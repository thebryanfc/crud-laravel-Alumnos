<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;



Route::resource('/alumnos', AlumnoController::class);
