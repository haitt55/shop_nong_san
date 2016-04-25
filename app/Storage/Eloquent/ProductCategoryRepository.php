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
        $categories = $this->model->where('parent_id', 0)->get()->sortBy('name');
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
        $childs = $category->childs->sortBy('name');
        if ($childs) {
            foreach ($childs as $child) {
                $this->addOptionCategory($categoryOptions, $child);
            }
        }
        return $categoryOptions;
    }

    public function getTree()
    {
        $categories = $this->model->where('parent_id', 0)->get()->sortBy('name');
        $categoryOptions = array();
        $index = 0;
        foreach ($categories as $category) {
            $index++;
            $this->addTreeCategory($categoryOptions, $category, $index);
        }

        return $categoryOptions;
    }

    public function addTreeCategory(&$categoryOptions, $category, $index) {
        $level = $category->getLevel();
        if ($category->parent_id != 0) {
            $printLevel = '';
            for ($i = 0; $i < $level; $i++) {
                $printLevel .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            $name = $printLevel . $index . '.' . $category->name;
        } else {
            $name = $index . '.' . $category->name;
        }
        $category->name = $name;
        $categoryOptions[] = $category;
        $childs = $category->childs->sortBy('name');
        if ($childs) {
            $index = 0;
            foreach ($childs as $child) {
                $index++;
                $this->addTreeCategory($categoryOptions, $child, $index);
            }
        }
        return $categoryOptions;
    }
}
?>