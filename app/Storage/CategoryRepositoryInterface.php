<?php

namespace App\Storage;

interface CategoryRepositoryInterface extends RepositoryInterface
{
    public function isParent($id);

    public function getCategoryOptions($id = null);
}
?>