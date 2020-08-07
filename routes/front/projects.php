<?php

Route::resource('projects','Front\ProjectsPageController')->only('index')->names('projects');
