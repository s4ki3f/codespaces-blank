<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Laravel\Passport\Http\Controllers\AuthorizationController;
use Laravel\Passport\Http\Controllers\ApproveAuthorizationController;
use Laravel\Passport\Http\Controllers\DenyAuthorizationController;
use Laravel\Passport\Http\Controllers\PersonalAccessTokenController;
use Laravel\Passport\Http\Controllers\ClientController;
use Laravel\Passport\Http\Controllers\ScopeController;
use Laravel\Passport\Http\Controllers\TransientTokenController;

// Authentication Routes
Route::prefix('oauth')->group(function () {
    Route::post('token', [AccessTokenController::class, 'issueToken']);
    Route::post('token/refresh', [AccessTokenController::class, 'refresh']);
    Route::post('token/revoke', [AccessTokenController::class, 'revoke']);
});

// User Management Routes
Route::middleware('auth:api')->group(function () {
    // Users
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->middleware('permission:view-users');
        Route::post('/users', 'store')->middleware('permission:create-users');
        Route::put('/users/{user}', 'update')->middleware('permission:update-users');
        Route::delete('/users/{user}', 'destroy')->middleware('permission:delete-users');
    });
    
    // Roles and Permissions
    Route::apiResources([
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
    ]);
});