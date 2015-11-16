<?php

namespace App\Storage;

interface RepositoryInterface
{
    public function findOrFail($id, $columns = array('*'));

    public function all($columns = array('*'));

    public function getByPage($page = 1, $limit = 10, $conditions = array());

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
?>