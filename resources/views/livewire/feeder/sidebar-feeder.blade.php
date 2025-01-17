<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white shadow-sm rounded">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <!-- Feeder Koneksi -->
            <li class="nav-item">
                <a href="/laporan/feeder/koneksi" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/koneksi') ? 'active' : '' }}">
                    <i class="ri-plug-2-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Koneksi</span>
                </a>
            </li>

            <!-- Feeder Program Studi -->
            <li class="nav-item">
                <a href="/laporan/feeder" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder') ? 'active' : '' }}">
                    <i class="ri-home-gear-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Program Studi</span>
                </a>
            </li>

            <!-- Feeder Skala Nilai -->
            <li class="nav-item">
                <a href="/laporan/feeder/skala-nilai" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/skala-nilai') ? 'active' : '' }}">
                    <i class="ri-bar-chart-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Skala Nilai</span>
                </a>
            </li>

            <!-- Feeder Mata Kuliah -->
            <li class="nav-item">
                <a href="/laporan/feeder/mata-kuliah" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/mata-kuliah') ? 'active' : '' }}">
                    <i class="ri-book-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Mata Kuliah</span>
                </a>
            </li>

            <!-- Feeder Kurikulum -->
            <li class="nav-item">
                <a href="/laporan/feeder/kurikulum" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/kurikulum') ? 'active' : '' }}">
                    <i class="ri-article-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Kurikulum</span>
                </a>
            </li>

            <!-- Feeder MK Kurikulum -->
            <li class="nav-item">
                <a href="/laporan/feeder/mk-kurikulum" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/mk-kurikulum') ? 'active' : '' }}">
                    <i class="ri-article-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder MK Kurikulum</span>
                </a>
            </li>

            <!-- Feeder Mahasiswa -->
            <li class="nav-item">
                <a href="/laporan/feeder/mahasiswa" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/mahasiswa') ? 'active' : '' }}">
                    <i class="ri-user-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Mahasiswa</span>
                </a>
            </li>

            <!-- Feeder Dosen -->
            <li class="nav-item">
                <a href="/laporan/feeder/dosen" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/dosen') ? 'active' : '' }}">
                    <i class="ri-user-3-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Dosen</span>
                </a>
            </li>

            <!-- Feeder Kelas -->
            <li class="nav-item">
                <a href="/laporan/feeder/kelas" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/kelas') ? 'active' : '' }}">
                    <i class="ri-building-2-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Kelas</span>
                </a>
            </li>

            <!-- Feeder Dosen Ajar -->
            <li class="nav-item">
                <a href="/laporan/feeder/dosen-ajar" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/dosen-ajar') ? 'active' : '' }}">
                    <i class="ri-pencil-ruler-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Dosen Ajar</span>
                </a>
            </li>

            <!-- Feeder KRS -->
            <li class="nav-item">
                <a href="/laporan/feeder/krs" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/krs') ? 'active' : '' }}">
                    <i class="ri-bookmark-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder KRS</span>
                </a>
            </li>

            <!-- Feeder Nilai -->
            <li class="nav-item">
                <a href="/laporan/feeder/nilai" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/nilai') ? 'active' : '' }}">
                    <i class="ri-check-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Nilai</span>
                </a>
            </li>

            <!-- Feeder Nilai Transfer Mahasiswa -->
            <li class="nav-item">
                <a href="/laporan/feeder/nilai-transfer-mahasiswa" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/nilai-transfer-mahasiswa') ? 'active' : '' }}">
                    <i class="ri-arrow-right-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Nilai Transfer Mahasiswa</span>
                </a>
            </li>

            <!-- Feeder AKM -->
            <li class="nav-item">
                <a href="/laporan/feeder/akm" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/akm') ? 'active' : '' }}">
                    <i class="ri-flag-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder AKM</span>
                </a>
            </li>

            <!-- Feeder Kelulusan -->
            <li class="nav-item">
                <a href="/laporan/feeder/kelulusan" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/kelulusan') ? 'active' : '' }}">
                    <i class="ri-shield-user-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Kelulusan</span>
                </a>
            </li>

            <!-- Feeder Aktivitas -->
            <li class="nav-item">
                <a href="/laporan/feeder/aktivitas" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/aktivitas') ? 'active' : '' }}">
                    <i class="ri-time-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder Aktivitas</span>
                </a>
            </li>

            <!-- Feeder AKT Anggota -->
            <li class="nav-item">
                <a href="/laporan/feeder/akt-anggota" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/akt-anggota') ? 'active' : '' }}">
                    <i class="ri-user-add-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder AKT Anggota</span>
                </a>
            </li>

            <!-- Feeder AKT Bimbing Uji -->
            <li class="nav-item">
                <a href="/laporan/feeder/akt-bimbing-uji" class="nav-link align-middle px-0 {{ Request::is('laporan/feeder/akt-bimbing-uji') ? 'active' : '' }}">
                    <i class="ri-group-line fs-4"></i> <span class="ms-1 d-none d-sm-inline">Feeder AKT Bimbing Uji</span>
                </a>
            </li>
        </ul>
        <hr>
    </div>
</div>
