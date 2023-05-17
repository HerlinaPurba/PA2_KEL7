<?php

use App\Http\Controllers\beranda;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DokumenUserController;
use App\Http\Controllers\KurveHarianUserController;
use App\Http\Controllers\KurveHarianDantobController;
use App\Http\Controllers\KurveHarianKapernaumController;
use App\Http\Controllers\KurveHarianSiloController;
use App\Http\Controllers\KurveHarianPnielController;
use App\Http\Controllers\KurveHarianRusun2Controller;
use App\Http\Controllers\KurveHarianRusun3Controller;
use App\Http\Controllers\KurveHarianRusun4Controller;
use App\Http\Controllers\KurveMassalUserController;
use App\Http\Controllers\RenunganUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DormMateController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\KurveController;
use App\Http\Controllers\KurveMassalController;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\AlergiController;
use App\Http\Controllers\AlergiUserController;
use App\Http\Controllers\KamarRusun1Controller;
use App\Http\Controllers\KamarRusun2Controller;
use App\Http\Controllers\KamarRusun3Controller;
use App\Http\Controllers\KamarRusun4Controller;
use App\Http\Controllers\KamarPnielController;
use App\Http\Controllers\KamarSiloController;
use App\Http\Controllers\KamarKapernaumController;
use App\Http\Controllers\KamarDanTobController;
use App\Http\Controllers\PDFControllerUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('login',[LoginController::class,'login'])->name('login');
Route::controller(LoginController::class)->group(function(){
   Route::get('login','login')->name('login');
   Route::post('login/proses','proses');
   Route::get('logout', 'logout');

});

Route::get('/registrasi', [RegistrasiController::class, 'registrasi']);
Route::post('/registrasiproses', [RegistrasiController::class, 'registerProses'])->name('registrasi-proses');

//admin
Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:admin']], function(){
        Route::resource('dashboard', dashboard::class);
        Route::resource('matedorm', DormMateController::class );
        Route::resource('evaluation', EvaluationController::class );
        Route::resource('kurvey', KurveController::class );
        Route::resource('kurvemassal', KurveMassalController::class );
        Route::resource('renungan', RenunganController::class );
        Route::resource('alergi', AlergiController::class );
        Route::resource('datadok', DokumenController::class );


        Route::get('sakit', function () {
            return view('admin.datasakit.sakit');
        });


        // Route::get('datadok', function () {
        //     return view('admin.datadokumen.datadok');
        // });

    });


//user
    Route::group(['middleware' => ['cekUserLogin:user']], function(){
        Route::resource('beranda', beranda::class);
        Route::get('halamankamar', function () {
            return view('user.halamankamar');
        });

        //data kamar
        Route::resource('kamarrusun1', KamarRusun1Controller::class );
        Route::resource('kamarrusun2', KamarRusun2Controller::class );
        Route::resource('kamarrusun3', KamarRusun3Controller::class );
        Route::resource('kamarrusun4', KamarRusun4Controller::class );
        Route::resource('kamarpniel', KamarPnielController::class );
        Route::resource('kamarsilo', KamarSiloController::class );
        Route::resource('kamarkapernaum', KamarKapernaumController::class );
        Route::resource('kamardantob', KamarDanTobController::class );

        //kurve
        Route::resource('kurverusun1', KurveHarianUserController::class );
        Route::resource('kurverusun2', KurveHarianRusun2Controller::class );
        Route::resource('kurverusun3', KurveHarianRusun3Controller::class );
        Route::resource('kurverusun4', KurveHarianRusun4Controller::class );
        Route::resource('kurvepniel', KurveHarianPnielController::class );
        Route::resource('kurvesilo', KurveHarianSiloController::class );
        Route::resource('kurvekapernaum', KurveHarianKapernaumController::class );
        Route::resource('kurvedantob', KurveHarianDantobController::class );
        Route::resource('kurvemassal', KurveMassalUserController::class );

        //renungan
        Route::resource('renungan', RenunganUserController::class );

        //dokumen
        Route::resource('document', DokumenUserController::class );

        //alergi
        Route::resource('alergic', AlergiUserController::class );

         Route::get('kurveyharian', function () {
            return view('user.kurveyharian');
        });

        Route::get('datadorm', function () {
            return view('user.evaluation');
        });

        // sakit
        Route::get('sakit', function () {
            return view('user.sakit');
        });

        // //download pdf
        // Route::get('/download-pdf', 'PDFControllerUser@downloadPDF')->name('Tabel Pembagian Waktu.pdf');


        //rules of dorm
        Route::get('aturanumum', function () {
            return view('user.aturanumum');
        });
        Route::get('aturanputri', function () {
            return view('user.aturanputri');
        });
        Route::get('aturanaskembar', function () {
            return view('user.aturanaskembar');
        });
        Route::get('aturanasantiokhia', function () {
            return view('user.aturanasantiokhia');
        });
        Route::get('aturanasrus1', function () {
            return view('user.aturanasrus1');
        });
        Route::get('aturanasmandiri', function () {
            return view('user.aturanasmandiri');
        });

        // ketentuan umum
        Route::get('ketentuan-umum', function () {
            return view('user.ketentuan-umum');
        });
        Route::get('halamanasrama', function () {
            return view('user.halamanasrama');
        });

    });
});





