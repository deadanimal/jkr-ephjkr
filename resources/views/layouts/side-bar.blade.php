<style>
    .modal {
        position: fixed;
        top: 0;
        right: 0;
        z-index: 10000 !important
            /* width: 100vw;
        height: 100vh; */
    }
    .modal-content {
        z-index: 20000 !important
    }
    .navbar-vertical .navbar-nav .nav-item .nav-link.dropdown-indicator:after {
        border-color: white;
    }
    .navbar-vertical .navbar-nav .nav-item .nav-link:hover.dropdown-indicator:after,
    .navbar-vertical .navbar-nav .nav-item .nav-link:focus.dropdown-indicator:after {
        border-color: white;
    }
    .info-sidebar {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 10.0013px;
        line-height: 13px;
        color: white;
    }
    /* .profil-icon {
        width: 33.07px;
        height: 33.07px;
    } */
    .profil-bg{
        height: 59.17px;
        width: 59.17px;
    }
</style>
<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
</script>

<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar" id="checklim">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <div class="row align-items-center mb-3">
                    <div class="col-auto pe-0">
                        <img src="/assets/img/icons/user-icon.png" class="bg-primary p-3" alt="" style="border-radius: 10px;">
                    </div>
                    <div class="col-8">
                        {{-- <p class="info-sidebar mb-0">Nama: {{ Auth::user()->name }}</p> --}}
                        <p class="info-sidebar mb-0">No. Kakitangan: </p>
                        <p class="info-sidebar mb-0">Peranan: </p>
                    </div>
                </div>
                <li class="nav-item mx-3 mx-md-0">

                    {{-- dashboard --}}
                    <a class="nav-link py-0 dropdown-indicator {{ Request::is('dashboard/*') ? 'active-main' : '' }}"
                        href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('dashboard') ? 'true' : 'false' }}" aria-controls="dashboard">
                        <div class="d-flex align-items-center nav-link-side px-0">
                            <span class="px-3"><span class="fas fa-home"></span> Dashboard</span>
                        </div>
                    </a>
                    <ul class="nav-item collapse {{ Request::is('dashboard/*') ? 'show' : 'false' }} my-1"
                        id="dashboard">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/laman_utama') ? 'active' : '' }} py-0"
                                href="/dashboard/laman_utama">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('dashboard/laman_utama') ? 'text-dark' : '' }}">Laman
                                        Utama</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/pengesahan_pengguna') ? 'active' : '' }} py-0"
                                href="/dashboard/pengesahan_pengguna">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('dashboard/pengesahan_pengguna') ? 'text-dark' : '' }}">Pengesahan
                                        Pengguna</span>
                                </div>
                            </a>
                        </li>
                        <hr class="navbar-vertical-divider mx-3">
                    </ul>

                    {{-- pengurusan maklumat --}}
                    <a class="nav-link py-0 dropdown-indicator {{ Request::is('pengurusan_maklumat/*') ? 'active-main' : '' }}"
                        href="#pengurusan_maklumat" role="button" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('pengurusan_maklumat') ? 'true' : 'false' }}"
                        aria-controls="pengurusan_maklumat">
                        <div class="d-flex align-items-center nav-link-side px-0">
                            <span class="px-3"><span class="fas fa-home"></span> Pengurusan Maklumat</span>
                        </div>
                    </a>
                    <ul class="nav-item collapse {{ Request::is('pengurusan_maklumat/*') ? 'show' : 'false' }} my-1"
                        id="pengurusan_maklumat">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengurusan_maklumat/profil_pengguna') ? 'active' : '' }} py-0"
                                href="/pengurusan_maklumat/profil_pengguna">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('pengurusan_maklumat/profil_pengguna') ? 'text-dark' : '' }}">Profil
                                        Pengguna</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengurusan_maklumat/senarai_pengguna') ? 'active' : '' }} py-0"
                                href="/pengurusan_maklumat/senarai_pengguna">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('pengurusan_maklumat/senarai_pengguna') ? 'text-dark' : '' }}">Senarai
                                        Pengguna</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 dropdown-indicator" href="#selenggara" role="button"
                                data-bs-toggle="collapse"
                                aria-expanded="{{ Request::is('pengurusan_maklumat/selenggara/*') ? 'true' : 'false' }}"
                                aria-controls="selenggara">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0">Selenggara</span>
                                </div>
                            </a>
                            <ul class="nav-item collapse {{ Request::is('pengurusan_maklumat/selenggara/*') ? 'show' : 'false' }} my-1"
                                id="selenggara">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('pengurusan_maklumat/selenggara/nama_peranan') ? 'active' : '' }} py-0"
                                        href="/pengurusan_maklumat/selenggara/nama_peranan">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Selenggara Nama Peranan</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('pengurusan_maklumat/selenggara/status_projek') ? 'active' : '' }} py-0"
                                        href="/pengurusan_maklumat/selenggara/status_projek">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Selenggara Status Projek</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('pengurusan_maklumat/selenggara/jenis_hebahan') ? 'active' : '' }} py-0"
                                        href="/pengurusan_maklumat/selenggara/jenis_hebahan">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Selenggara Jenis Hebahan</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('pengurusan_maklumat/selenggara/status_maklum_balas') ? 'active' : '' }} py-0"
                                        href="/pengurusan_maklumat/selenggara/status_maklum_balas">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Selenggara Status Maklum Balas</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('pengurusan_maklumat/selenggara/kriteria_penilaian') ? 'active' : '' }} py-0"
                                        href="/pengurusan_maklumat/selenggara/kriteria_penilaian">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Selenggara Kriteria Penilaian</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('pengurusan_maklumat/selenggara/log_audit') ? 'active' : '' }} py-0"
                                        href="/pengurusan_maklumat/selenggara/log_audit">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Selenggara Log Audit</span>
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengurusan_maklumat/manual_dan_standard') ? 'active' : '' }} py-0"
                                href="/pengurusan_maklumat/manual_dan_standard">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('pengurusan_maklumat/manual_dan_standard') ? 'text-dark' : '' }}">Manual
                                        dan Standard</span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengurusan_maklumat/hebahan') ? 'active' : '' }} py-0"
                                href="/pengurusan_maklumat/hebahan">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('pengurusan_maklumat/hebahan') ? 'text-dark' : '' }}">Hebahan</span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengurusan_maklumat/faq') ? 'active' : '' }} py-0"
                                href="/pengurusan_maklumat/faq">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('pengurusan_maklumat/faq') ? 'text-dark' : '' }}">FAQ</span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengurusan_maklumat/maklum_balas') ? 'active' : '' }} py-0"
                                href="/pengurusan_maklumat/maklum_balas">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('pengurusan_maklumat/maklum_balas') ? 'text-dark' : '' }}">Maklumbalas</span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengurusan_maklumat/pendaftaran_projek') ? 'active' : '' }} py-0"
                                href="/pengurusan_maklumat/pendaftaran_projek">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('pengurusan_maklumat/pendaftaran_projek') ? 'text-dark' : '' }}">Pendaftaran
                                        Projek</span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    
                        {{-- penilaian reka bentuk bangunan --}}
                        <a class="nav-link py-0 dropdown-indicator {{ Request::is('penilaian_reka_bentuk_bangunan/*') ? 'active-main' : '' }}"
                            href="#penilaian_reka_bentuk_bangunan" role="button" data-bs-toggle="collapse"
                            aria-expanded="{{ Request::is('penilaian_reka_bentuk_bangunan') ? 'true' : 'false' }}"
                            aria-controls="penilaian_reka_bentuk_bangunan">
                            <div class="d-flex align-items-center nav-link-side px-0">
                                <span class="px-3"><span class="fas fa-home"></span> Penilaian Reka Bentuk
                                    Bangunan</span>
                            </div>
                        </a>
                        <ul class="nav-item collapse {{ Request::is('penilaian_reka_bentuk_bangunan/*') || Request::is('penilaian_reka_bentuk_bangunan') ? 'show' : 'false' }} my-1"
                            id="penilaian_reka_bentuk_bangunan">
                            {{-- Senarai Projek Bangunan --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_bangunan') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_bangunan">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan') ? 'text-dark' : '' }}">Paparan
                                            Senarai Projek</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Melantik Pemudah Cara --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara') ? 'text-dark' : '' }}">Melantik
                                            Pemudah Cara</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Penilaian Reka Bentuk --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_bangunan/skor_penilaian') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_bangunan/skor_penilaian">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan/skor_penilaian') ? 'text-dark' : '' }}">Penilaian
                                            Reka Bentuk</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Pengesahan Penilaian Reka Bentuk --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_bangunan/pengesahan_penilaian') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan/pengesahan_penilaian') ? 'text-dark' : '' }}">Pengesahan
                                            Penilaian
                                            Reka Bentuk</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Semakan Rawak dan Jana Sijil Bangunan --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('semakan_rawak_jana_sijil') ? 'active' : '' }} py-0"
                                    href="#">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan/semakan_rawak_jana_sijil') ? 'text-dark' : '' }}">Semakan
                                            Rawak dan
                                            Jana Sijil</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Semakan Rawak --}}
                            {{-- <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_reka_bentuk_bangunan/semakan_rawak') ? 'active' : '' }} py-0"
                                href="/penilaian_reka_bentuk_bangunan/semakan_rawak">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan/semakan_rawak') ? 'text-dark' : '' }}">Semakan Rawak</span>
                                </div>
                            </a>
                        </li> --}}
                        
                            {{-- Papar dan Muat Turun Sijil Verifikasi Reka Bentuk --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_bangunan/sijil_verifikasi_bangunan') ? 'active' : '' }} py-0"
                                    href="#">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan/sijil_verifikasi_bangunan') ? 'text-dark' : '' }}">Papar
                                            dan Muat Turun Sijil
                                            Verifikasi Penilaian Reka Bentuk</span>
                                    </div>
                                </a>
                            </li>
                            <hr class="navbar-vertical-divider mx-3">
                        </ul>

                        {{-- penilaian reka bentuk GPSS --}}
                        <a class="nav-link py-0 dropdown-indicator {{ Request::is('penilaian_reka_bentuk_gpss/*') ? 'active-main' : '' }}"
                            href="#penilaian_reka_bentuk_gpss" role="button" data-bs-toggle="collapse"
                            aria-expanded="{{ Request::is('penilaian_reka_bentuk_gpss') ? 'true' : 'false' }}"
                            aria-controls="penilaian_reka_bentuk_gpss">
                            <div class="d-flex align-items-center nav-link-side px-0">
                                <span class="px-3"><span class="fas fa-home"></span> Penilaian Reka Bentuk
                                    GPSS</span>
                            </div>
                        </a>
                        <ul class="nav-item collapse {{ Request::is('penilaian_reka_bentuk_gpss/*') || Request::is('penilaian_reka_bentuk_gpss') ? 'show' : 'false' }} my-1"
                            id="penilaian_reka_bentuk_gpss">
                            {{-- Senarai Projek GPSS --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_gpss') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_gpss">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss') ? 'text-dark' : '' }}">Paparan
                                            Senarai Projek</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Melantik Pemudah Cara --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_gpss/melantik_pemudah_cara') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_gpss/melantik_pemudah_cara">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss/melantik_pemudah_cara') ? 'text-dark' : '' }}">Melantik
                                            Pemudah Cara</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Penilaian Reka Bentuk --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_gpss/skor_penilaian') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_gpss/skor_penilaian">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss/skor_penilaian') ? 'text-dark' : '' }}">Penilaian
                                            Reka Bentuk</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Pengesahan Penilaian Reka Bentuk --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_gpss/pengesahan_penilaian') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_gpss/pengesahan_penilaian">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss/pengesahan_penilaian') ? 'text-dark' : '' }}">Pengesahan
                                            Penilaian
                                            Reka Bentuk</span>
                                    </div>
                                </a>
                            </li>
                            {{-- Semakan Rawak dan Jana Sijil --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('semakan_rawak_jana_sijil/*') ? 'active' : '' }} py-0"
                                    href="#">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss/semakan_rawak_jana_sijil') ? 'text-dark' : '' }}">Semakan
                                            Rawak dan
                                            Jana Sijil</span>
                                    </div>
                                </a>
                            </li>
                            
                            {{-- Papar dan Muat Turun Sijil Verifikasi Reka Bentuk --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_gpss/sijil_verifikasi_gpss') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_gpss/skor_penilaian">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss/sijil_verifikasi_gpss') ? 'text-dark' : '' }}">Papar
                                            dan Muat Turun Skor Kad Penilaian Reka Bentuk</span>
                                    </div>
                                </a>
                            </li>
                            <hr class="navbar-vertical-divider mx-3">
                        </ul>

                        {{-- verifikasi permarkahan GPSS --}}
                        <a class="nav-link py-0 dropdown-indicator {{ Request::is('penilaian_verifikasi_gpss/*') ? 'active-main' : '' }}"
                        href="#penilaian_verifikasi_gpss" role="button" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('penilaian_verifikasi_gpss') ? 'true' : 'false' }}"
                        aria-controls="penilaian_verifikasi_gpss">
                        <div class="d-flex align-items-center nav-link-side px-0">
                            <span class="px-3"><span class="fas fa-home"></span> Penilaian Verifikasi 
                                    GPSS</span>
                        </div>
                    </a>
                    <ul class="nav-item collapse {{ Request::is('penilaian_verifikasi_gpss/*') || Request::is('penilaian_verifikasi_gpss') ? 'show' : 'false' }} my-1"
                        id="penilaian_verifikasi_gpss">
                        {{-- Senarai Projek GPSS --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss') ? 'text-dark' : '' }}">Paparan
                                        Senarai Projek</span>
                                </div>
                            </a>
                        </li>
                        {{-- Melantik Penilai GPSS --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/melantik_penilai_gpss') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/melantik_penilai_gpss">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/melantik_penilai_gpss') ? 'text-dark' : '' }}">Melantik
                                        Penilai GPSS</span>
                                </div>
                            </a>
                        </li>
                        {{-- Penilaian Verifikasi GPSS --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/penilaian_verifikasi') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/penilaian_verifikasi">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/penilaian_verifikasi') ? 'text-dark' : '' }}">Penilaian
                                        Verifikasi</span>
                                </div>
                            </a>
                        </li>
                        {{-- Pengesahan Penilaian Verifikasi GPSS --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/pengesahan_penilaian_verifikasi') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/pengesahan_penilaian_verifikasi">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/pengesahan_penilaian_verifikasi') ? 'text-dark' : '' }}">Pengesahan
                                        Penilaian
                                        Verifikasi</span>
                                </div>
                            </a>
                        </li>
                        {{-- Menjana Keputusan Verifikasi GPSS --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/menjana_keputusan_gpss') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/menjana_keputusan_gpss">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/menjana_keputusan_gpss') ? 'text-dark' : '' }}">Menjana
                                            Keputusan</span>
                                </div>
                            </a>
                        </li>
                        
                        {{-- Permohonan Rayuan GPSS --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/permohonan_rayuan_gpss') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/permohonan_rayuan_gpss">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/permohonan_rayuan_gpss') ? 'text-dark' : '' }}">Permohonan
                                        Rayuan</span>
                                </div>
                            </a>
                        </li>
                         {{-- Pengesahan Rayuan GPSS --}}
                         <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/pengesahan_rayuan_gpss') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/pengesahan_rayuan_gpss">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/pengesahan_rayuan_gpss') ? 'text-dark' : '' }}">Pengesahan
                                        Rayuan</span>
                                </div>
                            </a>
                        </li>
                         {{-- Jana Sijil GPSS --}}
                         <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/jana_sijil_gpss') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/jana_sijil_gpss">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/jana_sijil_gpss') ? 'text-dark' : '' }}">Jana
                                        Sijil</span>
                                </div>
                            </a>
                        </li>
                         {{-- Papar dan Muat Turun Sijil Verifikasi GPSS --}}
                         <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_verifikasi_gpss/pengesahan_rayuan_gpss') ? 'active' : '' }} py-0"
                                href="/penilaian_verifikasi_gpss/pengesahan_rayuan_gpss">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_verifikasi_gpss/pengesahan_rayuan_gpss') ? 'text-dark' : '' }}">Papar dan Muat
                                        Turun Sijil Verifikasi</span>
                                </div>
                            </a>
                        </li>
                        <hr class="navbar-vertical-divider mx-3">
                    </ul>



                </li>
                <hr class="navbar-vertical-divider mx-3">
            </ul>

            </li>
            </ul>
        </div>
    </div>
</nav>