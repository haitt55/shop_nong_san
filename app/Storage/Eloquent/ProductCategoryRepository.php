<?php

namespace App\Storage\Eloquent;

use App\Storage\ProductCategoryRepositoryInterface;
use DB;

class ProductCategoryRepository extends Repository implements ProductCategoryRepositoryInterface
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