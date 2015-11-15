<?php

namespace App\Storage\Eloquent;

use App\Storage\CategoryRepositoryInterface;
use DB;

class CategoryRepository extends Repository implements CategoryRepositoryInterface
{

    public function isParent($id)
    {
        $childCategoryNum = $this->model->where('parent_id', intval($id))->get()->count();

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