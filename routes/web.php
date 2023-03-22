<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\LayananSuratController;
use App\Http\Controllers\NomorSuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SuketSiswaAktifController;
use App\Http\Controllers\SuratBerkelakuanBaikController;
use App\Http\Controllers\SuratKeteranganLulusController;
use App\Http\Controllers\SuratKunjunganSiswaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratOrangTuaController;
use App\Models\Kelas;
use App\Models\NomorSurat;
use App\Models\Siswa;
use App\Models\SuketSiswaAktif;
use App\Models\SuratBerkelakuanBaik;
use App\Models\SuratKeteranganLulus;
use App\Models\SuratKunjunganSiswa;
use App\Models\SuratOrangTua;
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

Route::get('/layanan_surat',[HomeController::class, 'layanan'])->name('home.layanan');
Route::post('/layanan_surat/send',[HomeController::class, 'layanan_send'])->name('home.layanan_send');

Route::get('/berita_kegiatan/{slug}',[HomeController::class, 'berita'])->name('home.berita');
Route::get('/kategori_berita/{id}',[HomeController::class, 'kategori'])->name('home.kategori');
Route::post('/cari_berita',[HomeController::class, 'cari_berita'])->name('home.cari_berita');

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

    Route::get('/layanan_surat',[LayananSuratController::class, 'index'])->name('layanan.index');
    Route::post('/layanan_surat/update/{id}',[LayananSuratController::class, 'update'])->name('layanan.update');
    Route::get('/layanan_surat/send/{id}',[LayananSuratController::class, 'send'])->name('layanan.send');

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
        $kelas = Kelas::where('id', $siswa->kelas_id)->first();

        $file = public_path('suket_siswa_aktif.rtf');

		$array = array(
            '[NOMOR_SURAT]' => $nomorsurat->id_surat . '/' . $nomorsurat->nomor_surat,
            '[NAMA_SISWA]' => $siswa->nama_siswa,
            '[JENIS_KELAMIN]' => $siswa->jenis_kelamin,
            '[TTL]' => $siswa->tempat_lahir . ', ' . date("d F Y", strtotime($siswa->tanggal_lahir)),
            '[NISN]' => $siswa->nisn,
            '[KELAS]' => $kelas->tingkat . ' ' . $kelas->nama,
            '[ALAMAT]' => $siswa->alamat,
            '[TANGGAL]' => date("d F Y", strtotime($suket->tanggal)),
		);

		$nama_file = 'Surat_Keterangan_Aktif_'.$siswa->nama_lengkap.'.doc';

		return WordTemplate::export($file, $array, $nama_file);
	})->name('suket_siswa_aktif.download');

    Route::get('/surat_kunjungan_siswa',[SuratKunjunganSiswaController::class, 'index'])->name('surat_kunjungan_siswa.index');
    Route::post('/surat_kunjungan_siswa/insert',[SuratKunjunganSiswaController::class, 'insert'])->name('surat_kunjungan_siswa.insert');
    Route::get('/surat_kunjungan_siswa/destroy/{id}',[SuratKunjunganSiswaController::class, 'destroy'])->name('surat_kunjungan_siswa.destroy');
    Route::get('/surat_kunjungan_siswa/download/{id}', function ($id) {
        $kunjungan = SuratKunjunganSiswa::where('id', $id)->first();

		$nomorsurat = NomorSurat::where('id', $kunjungan->nomorsurat_id)->first();
        $siswa = Siswa::where('id', $kunjungan->siswa_id)->first();
        $kelas = Kelas::where('id', $siswa->kelas_id)->first();

        $file = public_path('surat_kunjungan_siswa.rtf');

		$array = array(
            '[NOMOR_SURAT]' => $nomorsurat->id_surat . '/' . $nomorsurat->nomor_surat,
            '[IZIN_KE]' => $kunjungan->izin_ke,
            '[NAMA_SISWA]' => $siswa->nama_siswa,
            '[TAHAP]' => $kunjungan->tahap,
            '[TANGGAL]' => date("d F Y", strtotime($kunjungan->tanggal)),
		);

		$nama_file = 'Surat_Kunjungan_Siswa_'.$siswa->nama_lengkap.'.doc';

		return WordTemplate::export($file, $array, $nama_file);
	})->name('surat_kunjungan_siswa.download');

    Route::get('/surat_orang_tua',[SuratOrangTuaController::class, 'index'])->name('surat_orang_tua.index');
    Route::post('/surat_orang_tua/insert',[SuratOrangTuaController::class, 'insert'])->name('surat_orang_tua.insert');
    Route::get('/surat_orang_tua/destroy/{id}',[SuratOrangTuaController::class, 'destroy'])->name('surat_orang_tua.destroy');
    Route::get('/surat_orang_tua/download/{id}', function ($id) {
        $orangtua = SuratOrangTua::where('id', $id)->first();

		$nomorsurat = NomorSurat::where('id', $orangtua->nomorsurat_id)->first();
        $siswa = Siswa::where('id', $orangtua->siswa_id)->first();
        $kelas = Kelas::where('id', $siswa->kelas_id)->first();

        $file = public_path('surat_orang_tua.rtf');

		$array = array(
            '[NOMOR_SURAT]' => $nomorsurat->id_surat . '/' . $nomorsurat->nomor_surat,
            '[NAMA_WALI]' => $siswa->nama_wali,
            '[KEGIATAN]' => $orangtua->kegiatan,
            '[TGLGIAT]' => date("d F Y", strtotime($orangtua->tanggal)),
            '[TEMPAT]' => $orangtua->tempat,
            '[NAMA_SISWA]' => $siswa->nama_siswa,
            '[KELAS]' => $kelas->tingkat . ' ' . $kelas->nama,
            '[KETERANGAN]' => $orangtua->keterangan,
            '[TANGGAL]' => date("d F Y", strtotime($orangtua->tanggal)),
		);

		$nama_file = 'Surat_Orang_Tua_Siswa_'.$siswa->nama_lengkap.'.doc';

		return WordTemplate::export($file, $array, $nama_file);
	})->name('surat_orang_tua.download');

    Route::get('/surat_berkelakuan_baik',[SuratBerkelakuanBaikController::class, 'index'])->name('surat_berkelakuan_baik.index');
    Route::post('/surat_berkelakuan_baik/insert',[SuratBerkelakuanBaikController::class, 'insert'])->name('surat_berkelakuan_baik.insert');
    Route::get('/surat_berkelakuan_baik/destroy/{id}',[SuratBerkelakuanBaikController::class, 'destroy'])->name('surat_berkelakuan_baik.destroy');
    Route::get('/surat_berkelakuan_baik/download/{id}', function ($id) {
        $baik = SuratBerkelakuanBaik::where('id', $id)->first();

		$nomorsurat = NomorSurat::where('id', $baik->nomorsurat_id)->first();
        $siswa = Siswa::where('id', $baik->siswa_id)->first();
        $kelas = Kelas::where('id', $siswa->kelas_id)->first();

        $file = public_path('surat_berkelakuan_baik.rtf');

		$array = array(
            '[NOMOR_SURAT]' => $nomorsurat->id_surat . '/' . $nomorsurat->nomor_surat,
            '[NAMA_SISWA]' => $siswa->nama_siswa,
            '[TTL]' => $siswa->tempat_lahir. ', ' .date("d F Y", strtotime($siswa->tanggal_lahir)),
            '[NISN]' => $siswa->nisn,
            '[NAMA_WALI]' => $siswa->nama_wali,
            '[TANGGAL]' => date("d F Y", strtotime($baik->tanggal)),
		);

		$nama_file = 'Surat_Berkelakuan_Baik_Siswa_'.$siswa->nama_lengkap.'.doc';

		return WordTemplate::export($file, $array, $nama_file);
	})->name('surat_berkelakuan_baik.download');

    Route::get('/surat_keterangan_lulus',[SuratKeteranganLulusController::class, 'index'])->name('surat_keterangan_lulus.index');
    Route::post('/surat_keterangan_lulus/insert',[SuratKeteranganLulusController::class, 'insert'])->name('surat_keterangan_lulus.insert');
    Route::get('/surat_keterangan_lulus/destroy/{id}',[SuratKeteranganLulusController::class, 'destroy'])->name('surat_keterangan_lulus.destroy');
    Route::get('/surat_keterangan_lulus/download/{id}', function ($id) {
        $lulus = SuratKeteranganLulus::where('id', $id)->first();

		$nomorsurat = NomorSurat::where('id', $lulus->nomorsurat_id)->first();
        $siswa = Siswa::where('id', $lulus->siswa_id)->first();
        $kelas = Kelas::where('id', $siswa->kelas_id)->first();

        $file = public_path('surat_keterangan_lulus.rtf');

		$array = array(
            '[NOMOR_SURAT]' => $nomorsurat->id_surat . '/' . $nomorsurat->nomor_surat,
            '[NAMA_SISWA]' => $siswa->nama_siswa,
            '[NIS]' => $siswa->nis,
            '[NISN]' => $siswa->nisn,
            '[TTL]' => $siswa->tempat_lahir. ', ' .date("d F Y", strtotime($siswa->tanggal_lahir)),
            '[ALAMAT]' => $siswa->alamat,
            '[KELAS]' => $kelas->tingkat . ' ' . $kelas->nama,
            '[TAHUN_PELAJARAN]' => $lulus->tahun_pelajaran,
            '[TAHUN_US]' => $lulus->tahun_us,
            '[DARI_TANGGAL]' => date("d-m-Y", strtotime($lulus->dari_tanggal)),
            '[SAMPAI_TANGGAL]' => date("d-m-Y", strtotime($lulus->sampai_tanggal)),
            '[TANGGAL]' => date("d F Y", strtotime($lulus->tanggal)),
		);

		$nama_file = 'Surat_Keterangan_Lulus_Siswa_'.$siswa->nama_lengkap.'.doc';

		return WordTemplate::export($file, $array, $nama_file);
	})->name('surat_keterangan_lulus.download');

    Route::get('/profile',[ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/change_avatar',[ProfileController::class, 'change_avatar'])->name('profile.change_avatar');
    Route::post('/profile/change_info',[ProfileController::class, 'change_info'])->name('profile.change_info');
    Route::post('/profile/change_password',[ProfileController::class, 'change_password'])->name('profile.change_password');
});
