<?php

namespace App\Storage;

interface NewsRepositoryInterface extends RepositoryInterface
{
    public function findBySlug($slug);

    public function getPublishedNews();
}
?>