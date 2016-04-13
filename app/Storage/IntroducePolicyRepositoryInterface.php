<?php

namespace App\Storage;

interface IntroducePolicyRepositoryInterface extends RepositoryInterface
{
    public function findBySlug($slug);
}
?>