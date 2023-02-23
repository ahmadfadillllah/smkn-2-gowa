<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard.index') }}" aria-expanded="false">
                    <i class="material-icons-outlined">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> app_registration </i>
                <span class="nav-text">Profil Sekolah</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('profilsekolah.visi') }}">Visi</a></li>
                    <li><a href="{{ route('profilsekolah.misi') }}">Misi</a></li>
                    <li><a href="{{ route('profilsekolah.struktur_organisasi') }}">Struktur Organisasi</a></li>
                    <li><a href="{{ route('profilsekolah.sejarah') }}">Sejarah</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('users.index') }}" aria-expanded="false">
                    <i class="material-icons">folder</i>
                    <span class="nav-text">Kelola Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('kategoriberita.index') }}" aria-expanded="false">
                    <i class="material-icons">widgets</i>
                    <span class="nav-text">Kategori Berita</span>
                </a>
            </li>
            <li>
                <a href="{{ route('berita.index') }}" aria-expanded="false">
                    <i class="material-icons">article</i>
                    <span class="nav-text">Berita/Kegiatan</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> table_chart </i>
                <span class="nav-text">Master Data</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('guru.index') }}">Guru</a></li>
                <li><a href="{{ route('kelas.index') }}">Kelas</a></li>
                <li><a href="table-bootstrap-basic.html">Siswa</a></li>
            </ul>
             </li>
             <li>
                <a href="{{ route('reviews.index') }}" aria-expanded="false">
                    <i class="material-icons">assessment</i>
                    <span class="nav-text">User Reviews</span>
                </a>
            </li>
            <li>
                <a href="{{ route('saran.index') }}" aria-expanded="false">
                    <i class="material-icons">favorite</i>
                    <span class="nav-text">Saran / Masukan</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons"> insert_drive_file </i>
                    <span class="nav-text">Data Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void(0);">Layanan Surat</a></li>
                    <li><a href="javascript:void(0);">Cetak Surat</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>
<div class="wallet-bar-close"></div>
