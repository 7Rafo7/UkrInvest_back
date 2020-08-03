<?php

Route::resource('home','Front\HomeController')->only('index')->names('home');
