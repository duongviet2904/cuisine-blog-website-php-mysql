<?php

namespace Core;

/**
 * This interface allows to run seeders.
 *
 * They are used to fill the database table with the dummy data.
 *
 * @author Nguyen Viet Duong
 */
interface Seeder {

    /**
     * The run method.
     * 
     * In this method, there should be a procedure for creating data 
     * and inserting them in the database.
     *
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public function run(): void;
}
