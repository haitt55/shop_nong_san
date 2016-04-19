<?php

namespace App\Storage\Eloquent;

use App\Storage\ProductRepositoryInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }
}
?>