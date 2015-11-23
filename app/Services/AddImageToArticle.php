<?php

namespace App\Services;

use App\Models\Article;
use App\Models\ArticleImage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddImageToArticle
{
    protected $article;

    protected $file;

    public function __construct(Article $article, UploadedFile $file, Thumbnail $thumbnail = null)
    {
        $this->article = $article;
        $this->file = $file;
        $this->thumbnail = $thumbnail ? : new Thumbnail;
    }

    public function save()
    {
        $image = $this->article->addImage($this->makeImage());

        // move the image to the images folder
        $this->file->move($image->baseDir(), $image->name);

        // generate a thumbnail
        $this->thumbnail->make($image->path, $image->thumbnail_path);
    }

    protected function makeImage()
    {
        return new ArticleImage([
            'name' => $this->makeFileName()
        ]);
    }

    protected function makeFileName()
    {
        $name = sha1(time() . $this->file->getClientOriginalName());
        $extention = $this->file->getClientOriginalExtension();

        return "{$name}.{$extention}";
    }
}

?>