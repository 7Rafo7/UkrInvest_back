<?php

use App\Models\Slider;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->firstItem();
//        $this->secondItem();
//        $this->thirdItem();
//        $this->fourthItem();
//        $this->fifthItem();
//        $this->sixthItem();
    }

    private function firstItem(){
        $galleryItem = new Slider();
        $galleryItem->title = 'First STR.';
        $galleryItem->description= "Test";
        $galleryItem->img ='../images/';
        $galleryItem->save();
    }

    private function secondItem(){}
    private function thirdItem(){}
    private function fourthItem(){}
    private function fifthItem(){}
    private function sixthItem(){}
}
