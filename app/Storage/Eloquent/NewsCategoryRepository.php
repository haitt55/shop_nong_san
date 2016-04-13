<?php

namespace App\Storage\Eloquent;

use App\Storage\NewsCategoryRepositoryInterface;
use DB;

class NewsCategoryRepository extends Repository implements NewsCategoryRepositoryInterface
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