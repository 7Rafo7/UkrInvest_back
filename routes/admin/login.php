<?php

Route::resource('admin','Admin\LoginPageController')->only('index')->names('admin.login');
