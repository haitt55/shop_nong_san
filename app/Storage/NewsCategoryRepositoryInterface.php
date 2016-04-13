<?php

namespace App\Storage;

interface NewsCategoryRepositoryInterface extends RepositoryInterface
{
    public function isParent($id);

    public function getCategoryOptions($id = null);
}
?>