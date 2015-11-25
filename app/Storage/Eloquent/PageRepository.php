<?php

namespace App\Storage\Eloquent;

use App\Storage\PageRepositoryInterface;

class PageRepository extends Repository implements PageRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }
}
?>