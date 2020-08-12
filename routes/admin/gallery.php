<?php

Route::resource('gallery','Admin\GalleryController')->only(['index','store','update','edit'])->names('admin.gallery');

