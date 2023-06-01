<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::prefix('profil')->group(function () {
    Route::get('/sejarah', [App\Http\Controllers\PageController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [App\Http\Controllers\PageController::class, 'visimisi'])->name('visimisi');
    Route::get('/struktur-organisasi', [App\Http\Controllers\PageController::class, 'struktur_organisasi'])->name('struktur');
    Route::get('/maklumat-pelayanan', [App\Http\Controllers\PageController::class, 'maklumat_pelayanan'])->name('maklumat');
    Route::get('/dasar-hukum', [App\Http\Controllers\PageController::class, 'dasar_hukum'])->name('dasarhukum');
    Route::get('/prestasi', [App\Http\Controllers\PageController::class, 'prestasi'])->name('prestasi');
});

Route::prefix('layanan')->group(function () {
    Route::get('/rawat-jalan', [App\Http\Controllers\PageController::class, 'rawat_jalan'])->name('rj');
    Route::get('/rawat-inap', [App\Http\Controllers\PageController::class, 'rawat_inap'])->name('ri');
    Route::get('/gawat-darurat', [App\Http\Controllers\PageController::class, 'gawat_darurat'])->name('gd');
    Route::get('/pendaftaran-vaksin', [App\Http\Controllers\PageController::class, 'pendaftaran_vaksin'])->name('pv');
    Route::get('/pengajuan-surat-keterangan-medis', [App\Http\Controllers\PageController::class, 'pengajuan_surat_keterangan_medis'])->name('pskm');
    Route::get('/jam-pelayanan', [App\Http\Controllers\PageController::class, 'jam_pelayanan'])->name('jp');
});

Route::prefix('dokter')->group(function () {
    Route::get('/daftar-dokter', [App\Http\Controllers\PageController::class, 'daftar_dokter'])->name('dokter');
});

Route::prefix('informasi')->group(function () {
    Route::get('/berita', [App\Http\Controllers\PageController::class, 'berita'])->name('berita');
    Route::get('/berita/{news:slug}', [App\Http\Controllers\PageController::class, 'berita_detail'])->name('berita-detail');
    Route::get('/artikel-kesehatan', [App\Http\Controllers\PageController::class, 'artikel_kesehatan'])->name('artikel');
});

Route::prefix('media')->group(function () {
    Route::get('/foto', [App\Http\Controllers\PageController::class, 'foto'])->name('foto');
    Route::get('/video', [App\Http\Controllers\PageController::class, 'video'])->name('video');
    Route::get('/dokumen', [App\Http\Controllers\PageController::class, 'dokumen'])->name('dokumen');
});

Route::get('/kontak', [App\Http\Controllers\PageController::class, 'kontak'])->name('kontak');

// Route::get('/berita-cari', [App\Http\Controllers\Pagecontroller::class, 'hascarberita']);

// Route::get('/cari-kategori/{category:id}', [App\Http\Controllers\PageController::class, 'kategori'])->name('cari-kategori');
// Route::get('/cari-tag/{tag:id}', [App\Http\Controllers\PageController::class, 'tag'])->name('cari-tag');

// Route::get('/download', [App\Http\Controllers\PageController::class, 'download']);
// Route::get('/getdownload/{downloads:id}', [App\Http\Controllers\PageController::class, 'getDownload'])->name('getdownload');

Auth::routes([
    'register' => false,
    'reset'    => false,  // for resetting passwords
    'confirm'  => false, // for additional password confirmations
    'verify'   => false, // for email verification
]);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin']);

        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'], 'as' => 'admin']);

        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'], 'as' => 'admin']);

        //Profile
        Route::resource('/profile', App\Http\Controllers\Admin\ProfileController::class, ['except' => ['show'], 'as' => 'admin']);

        //Contact
        Route::resource('/contact', App\Http\Controllers\Admin\ContactController::class, ['except' => ['show'], 'as' => 'admin']);

        //link
        Route::resource('/link', App\Http\Controllers\Admin\LinkController::class, ['except' => ['show'], 'as' => 'admin']);

        //sosmed
        Route::resource('/sosmed', App\Http\Controllers\Admin\SosmedController::class, ['except' => ['show'], 'as' => 'admin']);

        //tags
        Route::resource('/tag', App\Http\Controllers\Admin\TagController::class, ['except' => 'show', 'as' => 'admin']);

        //categories
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => 'show', 'as' => 'admin']);

        //news
        Route::resource('/news', App\Http\Controllers\Admin\NewsController::class, ['except' => 'show', 'as' => 'admin']);

        //download
        Route::resource('download', App\Http\Controllers\Admin\DownloadController::class, ['except' => 'show', 'as' => 'admin']);

        //profil pegawai
        Route::resource('/profpeg', App\Http\Controllers\Admin\ProfpegController::class, ['except' => 'show', 'as' => 'admin']);

        //banners
        Route::resource('/banner', App\Http\Controllers\Admin\BannerController::class, ['except' => 'show', 'as' => 'admin']);

        //services
        Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class, ['except' => 'show', 'as' => 'admin']);

        //event
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class, ['except' => 'show', 'as' => 'admin']);

        //photo
        Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //video
        Route::resource('/video', App\Http\Controllers\Admin\VideoController::class, ['except' => 'show', 'as' => 'admin']);

        //slider
        Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);
    });
});
