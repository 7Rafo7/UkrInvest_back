<?php

Route::resource('links','Admin\LinkPageController')->only(['index','store','update','edit','destroy'])->names('admin.links');
