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

                        {{-- BANGUNAN penilaian reka bentuk bangunan --}}
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
                            {{-- BANGUNAN Senarai Projek Bangunan --}}
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
                            {{-- BANGUNAN Melantik Pemudah Cara --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_bangunan/melantik_pemudah_cara') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan/melantik_pemudah_cara') ? 'text-dark' : '' }}">Melantik
                                            Pemudah Cara</span>
                                    </div>
                                </a>
                            </li>
                            {{-- BANGUNAN Penilaian Reka Bentuk --}}
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
                            {{-- BANGUNAN Pengesahan Penilaian Reka Bentuk --}}
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
                            {{-- BANGUNAN Semakan Rawak dan Jana Sijil --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_bangunan/semakan_rawak') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_bangunan/semakan_rawak">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_bangunan/semakan_rawak') ? 'text-dark' : '' }}">Semakan
                                            Rawak dan Jana Sijil</span>
                                    </div>
                                </a>
                            </li>
                
                            {{-- BANGUNAN Papar dan Muat Turun Sijil Verifikasi Reka Bentuk --}}
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

                        {{--BANGUNAN (Verifikasi Permarkahan Bangunan)--}}
                        <a class="nav-link py-0 dropdown-indicator {{ Request::is('verifikasi_bangunan/*') ? 'active-main' : '' }}"
                            href="#verifikasi_bangunan" role="button" data-bs-toggle="collapse"
                            aria-expanded="{{ Request::is('verifikasi_bangunan') ? 'true' : 'false' }}"
                            aria-controls="verifikasi_bangunan">
                            <div class="d-flex align-items-center nav-link-side px-0">
                                <span class="px-3"><span class="fas fa-home"></span> Verifikasi Permarkahan
                                    Bangunan</span>
                            </div>
                        </a>
                        <ul class="nav-item collapse {{ Request::is('verifikasi_bangunan/*') || Request::is('penilaian_reka_bentuk_bangunan') ? 'show' : 'false' }} my-1"
                            id="verifikasi_bangunan">
                            {{-- BANGUNAN (Verifikasi) Paparan Senarai Projek Bangunan --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan') ? 'text-dark' : '' }}">Paparan
                                            Senarai Projek</span>
                                    </div>
                                </a>
                            </li>
                            {{-- BANGUNAN (Verifikasi) Melantik Pemudah Cara --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan/') ? 'text-dark' : '' }}">Melantik
                                            Pemudah Cara</span>
                                    </div>
                                </a>
                            </li>

                            {{-- BANGUNAN (Verifikasi) Penilaian Verifikasi --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan') ? 'text-dark' : '' }}">Penilaian 
                                            Verifikasi</span>
                                    </div>
                                </a>
                            </li>

                            {{-- BANGUNAN (Verifikasi) Pengesahan Penilaian Verifikasi --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan') ? 'text-dark' : '' }}">Pengesahan
                                            Penilaian Verifikasi</span>
                                    </div>
                                </a>
                            </li>
                            {{-- BANGUNAN (Verifikasi) Jana Keputusan --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan/jana_keputusan_bangunan') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan/jana_keputusan">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan/jana_keputusan_bangunan') ? 'text-dark' : '' }}">Jana 
                                            Keputusan
                                            </span>
                                    </div>
                                </a>
                            </li>
                            {{-- BANGUNAN (Verifikasi) Papar dan Muat Turun Sijil Penilaian Verfikasi Pemarkahan --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan/semakan_rawak') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan/semakan_rawak">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan/semakan_rawak') ? 'text-dark' : '' }}">Papar dan Muat Turun Sijil
                                            Penilaian Verfikasi Pemarkahan</span>
                                    </div>
                                </a>
                            </li>
                        
                            {{-- BANGUNAN (Verifikasi) Pengesahan Rayuan --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan/pengesahan_rayuan') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan/pengesahan_rayuan">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan/pengesahan_rayuan') ? 'text-dark' : '' }}">Pengesahan 
                                            Rayuan
                                            </span>
                                    </div>
                                </a>
                            </li>

                            {{-- BANGUNAN (Verifikasi) Semakan Rawak dan Jana Sijil --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan/sijil_verifikasi') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan/sijil_verifikasi">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan/sijil_verifikasi') ? 'text-dark' : '' }}">Semakan Rawak 
                                            dan Jana Sijil
                                            </span>
                                    </div>
                                </a>
                            </li>

                            {{-- BANGUNAN (Verifikasi) Muat Turun Sijil Validasi --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('verifikasi_bangunan/sijil_validasi') ? 'active' : '' }} py-0"
                                    href="/verifikasi_bangunan/sijil_validasi">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('verifikasi_bangunan/sijil_validasi') ? 'text-dark' : '' }}">Muat Turun 
                                            Sijil Validasi
                                            </span>
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
                            {{-- Senarai Projek Bangunan --}}
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
                                <a class="nav-link {{ Request::is('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara') ? 'active' : '' }} py-0"
                                    href="/penilaian_reka_bentuk_gpss/melantik_pemudah_cara">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara') ? 'text-dark' : '' }}">Melantik
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
                            {{-- Semakan Rawak --}}
                            {{-- <li class="nav-item">
                            <a class="nav-link {{ Request::is('penilaian_reka_bentuk_gpss/semakan_rawak') ? 'active' : '' }} py-0"
                                href="/penilaian_reka_bentuk_gpss/semakan_rawak">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss/semakan_rawak') ? 'text-dark' : '' }}">Semakan Rawak</span>
                                </div>
                            </a>
                        </li> --}}
                            {{-- Papar dan Muat Turun Sijil Verifikasi Reka Bentuk --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('penilaian_reka_bentuk_gpss/sijil_verifikasi_gpss') ? 'active' : '' }} py-0"
                                    href="#">
                                    <div class="d-flex align-items-center nav-link-side">
                                        <span
                                            class="px-0 {{ Request::is('penilaian_reka_bentuk_gpss/sijil_verifikasi_gpss') ? 'text-dark' : '' }}">Papar
                                            dan Muat Turun Sijil
                                            Verifikasi Penilaian Reka Bentuk</span>
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