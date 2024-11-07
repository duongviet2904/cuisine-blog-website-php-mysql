<?php

namespace Core;

/**
 * Repository implement class
 *
 * @author Nguyen Viet Duong
 */
class RepositoryImplement implements RepositoryInterface
{
    protected $model;

    public function __construct(AbstractModel $model)
    {
        $this->model = $model;
    }

    public function getTableName()
    {
        return $this->model->getTable();
    }

    public function getAll($limit = 0, $page = 1, $columns = ['*'], $otherConditions = null)
    {
        $offset = ($page - 1) * $limit;
        $query = $this->model->DB()->prepare(
            'SELECT ' . implode(',', $columns) . ' FROM ' .
            $this->getTableName() .
            ($otherConditions ?  ' ' . $otherConditions  . ' ' : '') .
            ($limit ? ' LIMIT :limit OFFSET :offset' : '')
        );

        if ($limit) {
            $query->bindParam(':limit', $limit, $this->model->DB()::PARAM_INT);
            $query->bindParam(':offset', $offset, $this->model->DB()::PARAM_INT);
        }

        $query->execute();
        $result = $query->fetchAll($this->model->DB()::FETCH_ASSOC);
        if (!$result) {
            return [];
        }
        return $result;
    }

    public function getById($id, $columns = ['*']): array
    {
        return $this->model->load($id, $columns);
    }

    public function save($data): int|array
    {
        return $this->model->save($data);
    }

    public function delete($id): bool
    {
        return $this->model->delete($id);
    }
}