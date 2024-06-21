<?php
use Core\Router;
use App\Controllers\StudentController;
use App\Controllers\HomeController;

// Define routes
Router::get('/', [HomeController::class, 'index']);
Router::get('students', [StudentController::class, 'index']);
Router::get('students/create', [StudentController::class, 'create']);
Router::post('students/store', [StudentController::class, 'store']);
Router::get('students/edit', [StudentController::class, 'edit']);
Router::post('students/update', [StudentController::class, 'update']);
Router::post('students/delete', [StudentController::class, 'delete']);
