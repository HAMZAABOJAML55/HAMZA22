<?php

use Illuminate\Routing\Route;

Route::get('social/login', [AuthController::class, 'socialLogin']);
