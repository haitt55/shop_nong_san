<?php

namespace App\Storage;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function findBySlug($slug);
}
?>