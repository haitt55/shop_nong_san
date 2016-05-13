<?php

namespace App\Storage;

interface ProductCategoryRepositoryInterface extends RepositoryInterface
{
    public function findBySlug($slug);
}
?>