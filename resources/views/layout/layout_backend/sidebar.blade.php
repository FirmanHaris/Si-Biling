<div class="sidebar">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-layer-group"></i>
                        <p>Data Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('datasiswa') }}"
                                    class="{{ request()->is('datasiswa') ? 'active' : '' }}">
                                    <span class="sub-item">Data Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dataguru') }}"
                                    class="{{ request()->is('dataguru') ? 'active' : '' }}">
                                    <span class="sub-item">Data Guru</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('datakelas') }}"
                                    class="{{ request()->is('datakelas') ? 'active' : '' }}">
                                    <span class="sub-item">Data Kelas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('mapel') }}" class="{{ request()->is('mapel') ? 'active' : '' }}">
                                    <span class="sub-item">Mata Pelajaran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Bimbingan Konseling</h4>
                </li>
                {{-- <li class="nav-item {{ request()->is('datasiswa') ? 'active' : '' }}">
                    <a href="{{ route('datasiswa') }}">
                        <i class="fas fa-database"></i>
                        <p>Data Siswa</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="">
                        <i class="fas fa-layer-group"></i>
                        <p>Kegiatan Siswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="">
                        <i class="fas fa-graduation-cap"></i>
                        <p>Prestasi</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="">
                        <i class="fa fa-calendar"></i>
                        <p>Absensi</p>
                    </a>
                </li>
                <li class="nav-item  { request()->is('pelanggaran') ? 'active' : '' }}">
                    <a href="{{ route('pelanggaran') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Kasus / Pelanggaran</p>
                    </a>
                </li>
                {{-- <li class="nav-item {{ request()->is('mapel') ? 'active' : '' }} ">
                    <a href="{{ route('mapel') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Mata Pelajaran</p>
                    </a>
                </li> --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Bank Nilai Siswa</h4>
                </li>
                <li class="nav-item  ">
                    <a href="">
                        <i class="fas fa-th-list"></i>
                        <p>Nilai Siswa</p>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="">
                        <i class="fas fa-th-list"></i>
                        <p>E-Ijazah</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Guru</h4>
                </li>
                {{-- <li class="nav-item {{ request()->is('dataguru') ? 'active' : '' }}">
                    <a href="{{ route('dataguru') }}">
                        <i class="fas fa-database"></i>
                        <p>Data Guru</p>
                    </a>
                </li> --}}
                <li class="nav-item {{ request()->is('semester') ? 'active' : '' }}">
                    <a href="{{ route('semester') }}">
                        <i class="fas fa-database"></i>
                        <p>Semester</p>
                    </a>
                </li>
                {{-- <li class="nav-item {{ request()->is('kelas') ? 'active' : '' }}">
                    <a href="{{ route('datakelas') }}">
                        <i class="fas fa-database"></i>
                        <p>Kelas</p>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
