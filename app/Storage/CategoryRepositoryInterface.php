<?php

namespace App\Storage;

interface CategoryRepositoryInterface
{
    public function findOrFail($id);

    public function all();

    public function store($data);

    public function update($id, $data);

    public function delete($id);

    public function isParent($id);

    public function getCategoryOptions($id = null);

}
?>