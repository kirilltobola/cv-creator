<?php

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return redirect()->route('cv.create');
})->name('index');

Route::prefix('/cv')->group(function () {
    Route::get('/create', function () {
        return view('cv-form');
    })->name('cv.create');

    Route::post('/pdf', function (Request $request) {
        $cv = new Cv();
        $cv->fill([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'city' => $request->get('city'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'tg' => $request->get('tg'),
            'github' => $request->get('github'),
            'objective' => $request->get('objective'),
            'hardSkills' => $request->get('hardSkills'),
            'softSkills' => $request->get('softSkills'),
            'education' => $request->get('education'),
            'ps' => $request->get('ps')
        ]);

        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->loadHtml(view('cv-pdf', ['cv' => $cv]));
        return $pdf->inline();
    })->name('cv.make.pdf');
});
