<?php

Route::resource('news','Front\NewsPageController')->only('index')->names('news');
