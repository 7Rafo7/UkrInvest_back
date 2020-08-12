<?php


namespace App\Repositories;

use App\Models\Slider as Model;

class GalleryRepository extends BaseRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }


    public function getAllData(){
        $columns = ['id','title','description','img'];

        $result = $this->startCondition()->select($columns)->orderBy('id','ASC')->paginate(15);

        return $result;
    }


    public function getEdit($id){
        return $this->startCondition()->find($id);
    }
}
