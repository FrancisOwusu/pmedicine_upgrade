<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes
Route::prefix('v1')->group(function () {

    // Authentication
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/password/email', [AuthController::class, 'sendPasswordResetLink']);
    Route::post('/password/reset', [AuthController::class, 'resetPassword']);

    // Public content
   /* Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/blogs/{id}', [BlogController::class, 'show']);
    Route::get('/blogs/category/{categoryId}', [BlogController::class, 'byCategory']);

    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/{id}', [CourseController::class, 'show']);

    Route::get('/news', [NewsController::class, 'index']);
    Route::get('/news/{id}', [NewsController::class, 'show']);

    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{id}', [EventController::class, 'show']);

    Route::get('/webinars', [WebinarController::class, 'index']);
    Route::get('/webinars/{id}', [WebinarController::class, 'show']);

    // Protected routes - require authentication
    Route::middleware('auth:sanctum')->group(function () {

        // User management
        Route::get('/user', [AuthController::class, 'user']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/refresh-token', [AuthController::class, 'refresh']);

        // Account
        Route::get('/account/subscription', [AccountController::class, 'subscription']);
        Route::get('/account/progress', [AccountController::class, 'progress']);
        Route::post('/account/reset', [AccountController::class, 'reset']);

        // Q-Bank
        Route::get('/questions', [QuestionController::class, 'index']);
        Route::get('/questions/{id}', [QuestionController::class, 'show']);
        Route::post('/questions/{id}/answer', [QuestionController::class, 'submitAnswer']);
        Route::get('/questions/category/{categoryId}', [QuestionController::class, 'byCategory']);

        // Mock Exams
        Route::get('/mock-exams', [MockController::class, 'index']);
        Route::post('/mock-exams/start', [MockController::class, 'start']);
        Route::post('/mock-exams/{id}/submit', [MockController::class, 'submit']);
        Route::get('/mock-exams/{id}/result', [MockController::class, 'result']);

        // User questions
        Route::get('/user/questions', [UserQuestionController::class, 'index']);
        Route::post('/user/questions', [UserQuestionController::class, 'store']);
        Route::put('/user/questions/{id}', [UserQuestionController::class, 'update']);
        Route::delete('/user/questions/{id}', [UserQuestionController::class, 'destroy']);

        // Comments
        Route::post('/comments', [CommentController::class, 'store']);
        Route::delete('/comments/{id}', [CommentController::class, 'destroy']);

        // Flags
        Route::post('/questions/{id}/flag', [FlagController::class, 'add']);
        Route::delete('/questions/{id}/flag', [FlagController::class, 'remove']);

        // Admin routes - require admin role
        Route::middleware('role:admin')->prefix('admin')->group(function () {
            Route::apiResource('blogs', BlogController::class);
            Route::apiResource('courses', CourseController::class);
            Route::apiResource('news', NewsController::class);
            Route::apiResource('questions', QuestionController::class);
            Route::apiResource('users', UserController::class);
            // ... other admin resources
        });
    });
   */
});
