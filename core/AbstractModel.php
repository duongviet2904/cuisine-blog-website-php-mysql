<?php

namespace Core;

use Exception;
use PDO;

/**
 * The abstract model class.
 *
 * This class allows connection to the database via PDO.
 *
 * @author Nguyen Viet Duong
 */
abstract class AbstractModel
{

    /**
     * It represents a PDO instance
     *
     * @var object
     */
    static $db = null;

    /**
     * The name of the table in the database that the model binds
     *
     * @var string
     */
    private $_table;

    /**
     * The primary key columns of the table in the database that the model binds
     *
     * @var array
     */
    private $_primary;

    /**
     * The model construct
     *
     */
    public function __construct($table_name, $primaryColumn = 'id')
    {

        if (static::$db === null) {

            $conn_string = 'mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE . ';charset=utf8';
            $db = new \PDO($conn_string, DB_ROOT_USERNAME, DB_ROOT_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            static::$db = $db;
        }

        if ($table_name === '') {
            throw new Exception("Attribute _table is empty string!");
        }

        $this->_table = $table_name;
        $this->_primary = $primaryColumn;
    }

    /**
     * The insert method.
     *
     * This method makes it easy to insert data into the database
     * in a quick and easy way. The data set must be associative.
     * Index of array represents the field in the database.
     *
     * For example: [ "fist_name" => "John" ]
     *
     * @param array $data A set of data to be added to the database.
     *
     * @return integer The last insert ID
     * @access  public
     * @throws Exception
     * @since   Method available since Release 1.0.0
     */
    public function save(array $data): int
    {
        if (empty($data)) {
            throw new Exception("Invalid data to save to the model");
        }

        $isUpdate = false;

        // Fields to be added.
        $fields = array_keys($data);
        // Fields values
        $bindingValues = [];

        if (in_array($this->_primary, $fields) && $data[$this->_primary]) {
            $i = 0;
            $isUpdate = true;
            $condition = "WHERE $this->_primary = " . $data[$this->_primary];
            $action = " SET ";
            foreach ($data as $columnName => $columnValue) {
                if ($columnName == $this->_primary) {
                    continue;
                }
                $action .= $i ? "," : "" . $columnName . "= ?";
                $bindingValues[] = $columnValue;
                $i++;
            }
            $query = "UPDATE " . $this->_table . $action . " " . $condition;
        } else {
            $marks = array_fill(0, count($data), '?');
            $bindingValues = array_values($data);
            $query = "INSERT INTO "  . $this->_table . "(" . implode(",", $fields)
                . ") VALUES (" . implode(",", $marks) . ")";
        }

        // Prepare statement
        $stmt = $this->DB()->prepare($query);

        // Execute statement with values
        $stmt->execute($bindingValues);

        // Return last inserted ID.
        return $isUpdate ? $this->load($data[$this->_primary]) : $this->DB()->lastInsertId();
    }

    /**
     * Load data by id
     *
     * @param $id
     * @param array $columns
     * @return array|mixed
     */
    public function load($id, array $columns = ['*'])
    {
        if (!$id) {
            throw new Exception("Id is required by load method");
        }
        $query = $this->DB()->prepare('SELECT ' . implode(',', $columns) . ' FROM ' . $this->_table . ' WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return [];
        }
        return $result;
    }

    /**
     * Delete data by id
     *
     * @param $id
     * @return bool
     * @throws Exception
     */
    public function delete($id)
    {
        if (!$id) {
            throw new Exception("Id is required by load method");
        }
        $query = $this->DB()->prepare('DELETE FROM ' . $this->_table . ' WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        if ($query->rowCount()) {
            return true;
        }
        return false;
    }

    /**
     * The method return a PDO database connection.
     *
     * @return object
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public function DB(): PDO
    {

        return static::$db;
    }

    /**
     * Get table name of this model
     *
     * @return string
     */
    public function getTable()
    {
        return $this->_table;
    }

}
