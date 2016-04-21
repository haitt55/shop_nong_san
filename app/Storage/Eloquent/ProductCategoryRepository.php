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
        $categories = $this->model->where('parent_id', 0)->get();
        $categoryOptions = array();
        foreach ($categories as $category) {
            $this->addOptionCategory($categoryOptions, $category);
        }
        if (!is_null($id)) {
            unset($categoryOptions[$id]);
        }

        return $categoryOptions;
    }

    public function addOptionCategory(&$categoryOptions, $category) {
        $level = $category->getLevel();
        if ($category->parent_id != 0) {
            $printLevel = '';
            for ($i = 0; $i < $level; $i++) {
                $printLevel .= '++';
            }
            $name = $printLevel . $category->name;
        } else {
            $name = $category->name;
        }
        $categoryOptions[$category->id] = $name;
        $childs = $category->childs;
        if ($childs) {
            foreach ($childs as $child) {
                $this->addOptionCategory($categoryOptions, $child);
            }
        }
        return $categoryOptions;
    }
}
?>