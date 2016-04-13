<?php

namespace App\Storage\Eloquent;

use App\Storage\IntroducePolicyRepositoryInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class IntroducePolicyRepository extends Repository implements IntroducePolicyRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }
}
?>