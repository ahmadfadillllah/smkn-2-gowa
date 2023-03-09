<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\NomorSuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SuketSiswaAktifController;
use App\Http\Controllers\SuratMasukController;
use App\Models\NomorSurat;
use App\Models\Siswa;
use App\Models\SuketSiswaAktif;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/contact_us',[HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact_us/send',[HomeController::class, 'contact_send'])->name('home.contact_send');

Route::get('/berita_kegiatan/{slug}',[HomeController::class, 'berita'])->name('home.berita');

Route::post('/login_post',[AuthController::class, 'login_post'])->name('login.post');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth', 'checkRole:admin,guru']], function(){
    Route::get('/dashboard/index',[DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/search',[DashboardController::class, 'search'])->name('dashboard.search');

    Route::get('/profil_sekolah/visi',[ProfilSekolahController::class, 'visi'])->name('profilsekolah.visi');
    Route::post('/profil_sekolah/visi/update',[ProfilSekolahController::class, 'visi_update'])->name('profilsekolah.visi_update');
    Route::get('/profil_sekolah/misi',[ProfilSekolahController::class, 'misi'])->name('profilsekolah.misi');
    Route::post('/profil_sekolah/misi/update',[ProfilSekolahController::class, 'misi_update'])->name('profilsekolah.misi_update');
    Route::get('/profil_sekolah/struktur_organisasi',[ProfilSekolahController::class, 'struktur_organisasi'])->name('profilsekolah.struktur_organisasi');
    Route::post('/profil_sekolah/struktur_organisasi/upload',[ProfilSekolahController::class, 'struktur_organisasi_upload'])->name('profilsekolah.struktur_organisasi_upload');
    Route::get('/profil_sekolah/sejarah',[ProfilSekolahController::class, 'sejarah'])->name('profilsekolah.sejarah');
    Route::post('/profil_sekolah/sejarah/update',[ProfilSekolahController::class, 'sejarah_update'])->name('profilsekolah.sejarah_update');

    Route::get('/kelola_users',[KelolaUserController::class, 'index'])->name('users.index');
    Route::get('/kelola_users/reset_password/{id}',[KelolaUserController::class, 'reset_password'])->name('users.reset_password');
    Route::get('/kelola_users/destroy/{id}',[KelolaUserController::class, 'destroy'])->name('users.destroy');

    Route::get('/kategori_berita',[KategoriBeritaController::class, 'index'])->name('kategoriberita.index');
    Route::post('/kategori_berita/insert',[KategoriBeritaController::class, 'insert'])->name('kategoriberita.insert');
    Route::post('/kategori_berita/update/{id}',[KategoriBeritaController::class, 'update'])->name('kategoriberita.update');
    Route::get('/kategori_berita/destroy/{id}',[KategoriBeritaController::class, 'destroy'])->name('kategoriberita.destroy');

    Route::get('/berita',[BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/insert',[BeritaController::class, 'insert'])->name('berita.insert');
    Route::post('/berita/insert/post',[BeritaController::class, 'insert_post'])->name('berita.insert_post');
    Route::get('/berita/edit/{id}',[BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('/berita/update/{id}',[BeritaController::class, 'update'])->name('berita.update');
    Route::get('/berita/destroy/{id}',[BeritaController::class, 'destroy'])->name('berita.destroy');

    Route::get('/saran_masukan',[SaranController::class, 'index'])->name('saran.index');
    Route::get('/saran_masukan/destroy/{id}',[SaranController::class, 'destroy'])->name('saran.destroy');

    Route::get('/reviews',[ReviewsController::class, 'index'])->name('reviews.index');
    Route::post('/reviews/insert',[ReviewsController::class, 'insert'])->name('reviews.insert');

    Route::get('/guru',[GuruController::class, 'index'])->name('guru.index');
    Route::post('/guru/insert',[GuruController::class, 'insert'])->name('guru.insert');
    Route::post('/guru/update/{id}',[GuruController::class, 'update'])->name('guru.update');
    Route::post('/guru/import',[GuruController::class, 'importGuru'])->name('guru.import');

    Route::get('/kelas',[KelasController::class, 'index'])->name('kelas.index');
    Route::post('/kelas/insert',[KelasController::class, 'insert'])->name('kelas.insert');
    Route::post('/kelas/update/{id}',[KelasController::class, 'update'])->name('kelas.update');
    Route::get('/kelas/destroy/{id}',[KelasController::class, 'destroy'])->name('kelas.destroy');

    Route::get('/siswa',[SiswaController::class, 'index'])->name('siswa.index');
    Route::post('/siswa/insert',[SiswaController::class, 'insert'])->name('siswa.insert');
    Route::post('/siswa/update/{id}',[SiswaController::class, 'update'])->name('siswa.update');
    Route::get('/siswa/destroy/{id}',[SiswaController::class, 'destroy'])->name('siswa.destroy');
    Route::post('/siswa/import',[SiswaController::class, 'importSiswa'])->name('siswa.import');

    Route::get('/nomor_surat',[NomorSuratController::class, 'index'])->name('nomorsurat.index');
    Route::post('/nomorsurat/insert',[NomorSuratController::class, 'insert'])->name('nomorsurat.insert');
    Route::post('/nomorsurat/update/{id}',[NomorSuratController::class, 'update'])->name('nomorsurat.update');
    Route::get('/nomorsurat/destroy/{id}',[NomorSuratController::class, 'destroy'])->name('nomorsurat.destroy');

    Route::get('/surat_masuk',[SuratMasukController::class, 'index'])->name('suratmasuk.index');
    Route::post('/surat_masuk/insert',[SuratMasukController::class, 'insert'])->name('suratmasuk.insert');
    Route::post('/surat_masuk/update/{id}',[SuratMasukController::class, 'update'])->name('suratmasuk.update');
    Route::get('/surat_masuk/destroy/{id}',[SuratMasukController::class, 'destroy'])->name('suratmasuk.destroy');

    Route::get('/suket_siswa_aktif',[SuketSiswaAktifController::class, 'index'])->name('suket_siswa_aktif.index');
    Route::post('/suket_siswa_aktif/insert',[SuketSiswaAktifController::class, 'insert'])->name('suket_siswa_aktif.insert');
    Route::get('/suket_siswa_aktif/destroy/{id}',[SuketSiswaAktifController::class, 'destroy'])->name('suket_siswa_aktif.destroy');
    Route::get('/suket_siswa_aktif/download/{id}', function ($id) {
        $suket = SuketSiswaAktif::where('id', $id)->first();

		$nomorsurat = NomorSurat::where('id', $suket->nomorsurat_id)->first();
        $siswa = Siswa::where('id', $suket->siswa_id)->first();

        $file = public_path('suket_siswa_aktif.rtf');

		$array = array(
            '[NOMOR_SURAT]' => $nomorsurat->id_surat . '/' . $nomorsurat->nomor_surat,
            '[NAMA_SISWA]' => $siswa->nama_siswa,
            '[TTL]' => $siswa->tempat_lahir . ', ' . date("d F Y", strtotime($siswa->tanggal_lahir)),
            '[JURUSAN]' => $siswa->kelas_id,
            '[NISN]' => $siswa->nisn,
            '[NAMA_IBU_KANDUNG]' => $siswa->nama_wali,
            '[AGAMA]' => $siswa->agama,
            '[TAHUN_LULUS]' => $suket->tahun_lulus,
            '[TANGGAL]' => date("d F Y", strtotime($suket->tanggal)),
		);

		$nama_file = 'Surat_Keterangan_Aktif_'.$siswa->nama_lengkap.'.doc';

		return WordTemplate::export($file, $array, $nama_file);
	})->name('suket_siswa_aktif.download');

    Route::get('/profile',[ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/change_avatar',[ProfileController::class, 'change_avatar'])->name('profile.change_avatar');
    Route::post('/profile/change_info',[ProfileController::class, 'change_info'])->name('profile.change_info');
    Route::post('/profile/change_password',[ProfileController::class, 'change_password'])->name('profile.change_password');
});
