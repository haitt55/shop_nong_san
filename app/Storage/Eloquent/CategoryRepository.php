<?php

namespace App\Storage\Eloquent;

use App\Storage\CategoryRepositoryInterface;
use DB;

class CategoryRepository extends Repository implements CategoryRepositoryInterface
{
    public function create($data)
    {
        if (empty($data['active'])) {
            $data['active'] = false;
        }

        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        if (empty($data['active'])) {
            $data['active'] = false;
        }

        return $this->findOrFail($id)->update($data);
    }

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