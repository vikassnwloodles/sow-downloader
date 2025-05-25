<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SowController;
use App\Utils\Parsedown;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // require_once app_path('Utils/Parsedown.php');
    $markdownPath = resource_path('markdown/example.md');
    if (!File::exists($markdownPath)) {
        abort(404, 'Markdown file not found.');
    }
    $markdown = File::get($markdownPath);
    $Parsedown = new Parsedown();
    $html = $Parsedown->text($markdown);

    return view('welcome', ['html' => $html]);
});
Route::get('/download-sow', [SowController::class, 'download']);
