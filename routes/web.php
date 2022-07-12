<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


route::get('/',[TaskController::class,'index']);
route::post('/task/create',[TaskController::class,'store'])->name('task.create');
route::delete('/task/delete/{task}',[TaskController::class,'destroy'])->name('task.destroy');
