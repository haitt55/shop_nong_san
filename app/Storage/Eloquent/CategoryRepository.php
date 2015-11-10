<?php

namespace App\Storage\Eloquent;

use App\Storage\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Exception;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function findOrFail($id)
    {
        return Category::findOrFail($id);
    }

    public function all()
    {
        return Category::all();
    }

    public function store($data)
    {
        $category = new Category();
        $category->parent_id = $data['parent_id'];
        $category->name = $data['name'];
        $category->type = $data['type'];
        $category->page_title = $data['page_title'];
        $category->meta_keyword = $data['meta_keyword'];
        $category->meta_description = $data['meta_description'];
        if (empty($data['active'])) {
            $data['active'] = false;
        }
        $category->active = $data['active'];
        $category->save();

        return $category;
    }

    public function update($id, $data)
    {
        $category->parent_id = $data['parent_id'];
        $category->name = $data['name'];
        $category->type = $data['type'];
        $category->page_title = $data['page_title'];
        $category->meta_keyword = $data['meta_keyword'];
        $category->meta_description = $data['meta_description'];
        $category->active = $data['active'];
        $category->save();

        return $category;
    }

    public function delete($id)
    {
        $category = $this->findOrFail($id);
        if (!empty($category->parent_id)) {
            throw new Exception('Could not delete parent category.');
        }

        return $category->delete();
    }

    public function isParent($id)
    {
        $childCategoryNum = Category::where('parent_id', intval($id))->get()->count();

        if ($childCategoryNum) {
            return true;
        } else {
            return false;
        }
    }

    public function getCategoryOptions($id = null)
    {
        $categoryOptions = DB::table('categories')->lists('name', 'id');
        if (!is_null($id)) {
            unset($categoryOptions[$id]);
        }

        return $categoryOptions;
    }
}
?>