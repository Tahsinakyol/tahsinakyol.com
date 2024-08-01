<!--
      ********       **********
         **          **      **
         **          **********
         **     **   **      **
 -->

<?php

use App\Http\Middleware\LangMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CVController;


Route::middleware(LangMiddleware::class)->group(function () {

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::post('/', function () {
        return view('index');
    })->name('index');


    Route::get('/greeting/{locale}', function ($locale) {
        if (!in_array($locale, ['tr', 'en'])) {
            abort(400);
        }
        App::setLocale($locale);

        session()->put('locale', $locale);

        return redirect()->back();
    });
});
Route::post('/form-gonder', [FormController::class, 'gonder']);
Route::get('/cv-indir', [CVController::class,"indir"])->name('cv-indir');