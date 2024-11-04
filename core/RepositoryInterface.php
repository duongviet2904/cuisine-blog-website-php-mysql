<?php
namespace Core;

/**
 * Repository Interface class
 *
 * @author Nguyen Viet Duong
 */
interface RepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function save($data);
    public function delete($id);
}