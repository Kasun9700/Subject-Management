<?php
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/subjects', function(){
    $data=App\Models\Subject::all();
    

    return view('subjects')-> with('subjects', $data);
});


Route::post('/saveSubject', [SubjectController::class, 'store']);

Route::get('/deleteSubject/{id}', [SubjectController::class, 'deleteSubject']);

Route::put('/saveSubject/{id} ', [SubjectController::class, 'updateSubject']);

Route::get('/saveSubject',[SubjectController::class, 'getAll']);

Route::get('/saveSubject/{id}',[SubjectController::class, 'search']);

Route::get('/subjectMin',[SubjectController::class, 'min']);

Route::get('/subjectMax',[SubjectController::class, 'max']);

Route::get('/subjectAvg',[SubjectController::class, 'avg']);

Route::get('/subjectSum',[SubjectController::class, 'sum']);