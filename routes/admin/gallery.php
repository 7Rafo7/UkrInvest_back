<?php

Route::resource('gallery','Admin\GalleryController')->only(['index','store','update','edit','destroy'])->names('admin.gallery');

