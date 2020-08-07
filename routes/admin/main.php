<?php

Route::resource('main','Admin\MainPageController')->only('index')->names('admin.main');
