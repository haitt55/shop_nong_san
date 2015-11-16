<?php

namespace App\Storage\Eloquent;

use App\Storage\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findOrFail($id, $columns = array('*'))
    {
        return $this->model->findOrFail($id, $columns);
    }

    public function all($columns = array('*'))
    {
        return $this->model->all($columns);
    }

    public function getByPage($page = 1, $limit = 10, $conditions = array())
    {
        $result = new \StdClass;
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();
        $models = $this->model->orderBy('created_at', 'desc')
            ->skip( $limit * ($page-1) )
            ->take($limit)
            ->get();
        $result->items = $models->all();
        $result->totalItems = $this->totalModels($conditions);
        return $result;
    }

    protected function totalModels($conditions = array())
    {
        return $this->model->orderBy('created_at', 'desc')
            ->get()->count();
    }

    protected function getAll($conditions = array())
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $model = $this->findOrFail($id);
        $model->update($data);

        return $model;
    }

    public function delete($id)
    {
        return $this->findOrFail($id)->delete();
    }
}
?>