<?php

namespace App\Storage\Eloquent;

use App\Storage\NewsRepositoryInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class NewsRepository extends Repository implements NewsRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }

    public function getPublishedNews($limit = null)
    {
        return $this->model->published()->orderBy('created_at', 'desc')->paginate($limit);
    }
}
?>