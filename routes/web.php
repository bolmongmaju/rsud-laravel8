<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProfpegController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index']);

Route::prefix('profil')->group(function () {
    Route::get('/sejarah', [PageController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [PageController::class, 'visimisi'])->name('visimisi');
    Route::get('/struktur-organisasi', [PageController::class, 'struktur_organisasi'])->name('struktur');
    Route::get('/maklumat-pelayanan', [PageController::class, 'maklumat_pelayanan'])->name('maklumat');
    Route::get('/motto', [PageController::class, 'motto'])->name('motto');
    Route::get('/dasar-hukum', [PageController::class, 'dasar_hukum'])->name('dasarhukum');
    Route::get('/prestasi', [PageController::class, 'prestasi'])->name('prestasi');
});

Route::prefix('layanan')->group(function () {
    Route::get('/rawat-jalan', [PageController::class, 'rawat_jalan'])->name('rj');
    Route::get('/rawat-inap', [PageController::class, 'rawat_inap'])->name('ri');
    Route::get('/gawat-darurat', [PageController::class, 'gawat_darurat'])->name('gd');
    Route::get('/pendaftaran-vaksin', [PageController::class, 'pendaftaran_vaksin'])->name('pv');
    Route::get('/pengajuan-surat-keterangan-medis', [PageController::class, 'pengajuan_surat_keterangan_medis'])->name('pskm');
    Route::get('/jam-pelayanan', [PageController::class, 'jam_pelayanan'])->name('jp');
});

Route::prefix('dokter')->group(function () {
    Route::get('/daftar-dokter', [PageController::class, 'daftar_dokter'])->name('dokter');
});

Route::prefix('informasi')->group(function () {
    Route::get('/berita', [PageController::class, 'berita'])->name('berita');
    Route::get('/berita/{news:slug}', [PageController::class, 'berita_detail'])->name('berita-detail');
    Route::get('/berita/categories/{slug}', [PageController::class, 'kategori'])->name('cari-kategori');
    Route::get('/berita/tag/{tag:slug}', [PageController::class, 'tag'])->name('cari-tag');
    Route::get('/artikel-kesehatan', [PageController::class, 'artikel_kesehatan'])->name('artikel');
});

Route::prefix('media')->group(function () {
    Route::get('/foto', [PageController::class, 'foto'])->name('foto');
    Route::get('/video', [PageController::class, 'video'])->name('video');
    Route::get('/dokumen', [PageController::class, 'dokumen'])->name('dokumen');
});

Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');


// Route::get('/berita-cari', [App\Http\Controllers\Pagecontroller::class, 'hascarberita']);

// Route::get('/download', [App\Http\Controllers\PageController::class, 'download']);
// Route::get('/getdownload/{downloads:id}', [App\Http\Controllers\PageController::class, 'getDownload'])->name('getdownload');

Route::prefix('bolmongmaju/rsud')->group(function () {
    Auth::routes([
        'register' => false,
        'reset'    => false,  // for resetting passwords
        'confirm'  => false, // for additional password confirmations
        'verify'   => false, // for email verification
    ]);
});

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

        Route::resource('news', NewsController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('role', RoleController::class);
        Route::resource('user', UserController::class);
        Route::resource('profile', ProfileController::class);
        Route::resource('contact', ContactController::class);
        Route::resource('link', LinkController::class);
        Route::resource('sosmed', SosmedController::class);
        Route::resource('tag', TagController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('download', DownloadController::class);
        Route::resource('profpeg', ProfpegController::class);
        Route::resource('service', ServiceController::class);
        Route::resource('photo', PhotoController::class);
        Route::resource('video', VideoController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('faq', FaqController::class);
    });
});
