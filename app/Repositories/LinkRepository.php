<?php


namespace App\Repositories;

use App\Models\Link as Model;

class LinkRepository extends BaseRepository
{
   protected function getModelClass()
   {
        return Model::class;
   }

   public function getEdit($id){
       return $this->startCondition()->find($id);
   }
}
