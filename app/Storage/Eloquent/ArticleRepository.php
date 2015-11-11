<?php

namespace App\Storage\Eloquent;

use App\Storage\ArticleRepositoryInterface;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function findOrFail($id)
    {
        return Article::findOrFail($id);
    }

    public function all()
    {
        return Article::all();
    }

    public function store($data)
    {
        $article = new Article();
        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->page_title = $data['page_title'];
        $article->meta_keyword = $data['meta_keyword'];
        $article->meta_description = $data['meta_description'];
        $article->excerpt = $data['excerpt'];
        $article->published_date = $data['published_date'];
        if (empty($data['published'])) {
            $article->published = false;
        } else {
            $article->published = $data['published'];
        }
        if (empty($data['active'])) {
            $article->active = false;
        } else {
            $article->active = $data['active'];
        }
        $article->user_id = Auth::user()->id;
        $article->save();

        return $article;
    }

    public function update($id, $data)
    {
        $article = $this->findOrFail($id);
        $article->save();

        return $article;
    }

    public function delete($id)
    {
        $article = $this->findOrFail($id);

        return $article->delete();
    }
}
?>