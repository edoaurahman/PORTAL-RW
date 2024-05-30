<!-- ===== Sidebar Start ===== -->
<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-white shadow-md duration-100 ease-linear dark:bg-boxdark lg:!static lg:!translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-center gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="index.html">
            <img :src="darkMode ? '{{ asset('assets/images/logo/logo-light.png') }}' :
                '{{ asset('assets/images/logo/logo-dark.png') }}'"
                width="150px" height="auto" class="duration-300" alt="Logo" />
        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current ml-8" width="20" height="18" viewBox="0 0 20 18" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->
    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear" x-data="{ selected: location.pathname }">
        <!-- Sidebar Menu -->
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6">
            <!-- Menu Group -->
            <div>

                <ul class="mb-5 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.dashboard') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('dashboard')) }">
                            <i class="fa-solid fa-house-chimney"></i>
                            Dashboard
                        </a>
                    </li>
                    <!-- Menu Item Dashboard -->

                    <h3 class="mb-3 mt-4 ml-4 text-sm font-medium text-black dark:text-white duration-300">Menu
                        Kependudukan</h3>

                    <!-- Menu Item Level -->
                    <li x-show="levelUser === 'Super Admin' || levelUser === 'RW'">
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.level') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('level')) }">
                            <i class="fa-solid fa-layer-group"></i>
                            Kelola Level
                        </a>
                    </li>
                    <!-- Menu Item Level -->

                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="#" @click.prevent="selected = (selected.includes('penduduk') ? '':'penduduk')"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('penduduk')) }">
                            <i class="fa-solid fa-id-card"></i>
                            Penduduk
                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected.includes('penduduk')) }" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected.includes('penduduk')) ? 'block' : 'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/penduduk') }"
                                        href="{{ route('admin.penduduk') }}">Daftar
                                        Penduduk
                                    </a>
                                </li>
                                <li>
                                    <a class=" group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/penduduk/akun') }"
                                        href="{{ route('admin.penduduk.akun') }}">Akun
                                        Penduduk
                                    </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/penduduk/kk') }"
                                        href="{{ route('admin.penduduk.kk') }}">Daftar KK
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>

                    {{-- Menu Data RT --}}
                    <li x-show="levelUser === 'Super Admin' || levelUser === 'RW'">
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.data-rt') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('data-rt')) }">
                            <i class="fa-solid fa-people-roof"></i>

                            Data RT
                        </a>
                    </li>

                    <h3 class="mb-3 mt-4 ml-4 text-sm font-medium text-black dark:text-white duration-300">Menu
                        Kesejahteraan Masyarakat</h3>

                    <!-- Menu Bansos -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="#" @click.prevent="selected = (selected.includes('bansos') ? '':'bansos')"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('bansos')) }">
                            <i class="fa fa-handshake"></i>
                            Bansos
                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected.includes('bansos')) }" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected.includes('bansos')) ? 'block' : 'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/bansos') }"
                                        href="{{ route('admin.bansos') }}">Bansos
                                    </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/bansos/penerima') }"
                                        href="{{ route('admin.bansos.penerima') }}">Penerima
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>

                    <!-- Menu Bansos End -->

                    {{-- Menu Data UMKM --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.data-umkm') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('data-umkm')) }">
                            <i class="fa-solid fa-shop"></i>
                            Data UMKM
                        </a>
                    </li>

                    {{-- Menu Layanan --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.layanan') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('layanan')) }">
                            <i class="fa-solid fa-headset"></i>

                            Layanan
                        </a>
                    </li>

                    {{-- Menu Aspirasi --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.aspirasi') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('aspirasi')) }">
                            <i class="fa-regular fa-lightbulb" width="18"></i>
                            Aspirasi
                        </a>
                    </li>


                    {{-- Menu Keuangan --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="#"
                            @click.prevent="selected = (selected.includes('inventaris') ? '':'inventaris')"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('inventaris')) }">
                            <i class="fa-solid fa-id-card"></i>
                            Inventaris
                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected.includes('inventaris')) }" width="20"
                                height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected.includes('inventaris')) ? 'block' : 'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/inventaris') }"
                                        href="{{ route('admin.inventaris') }}">Kelola </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/inventaris/peminjaman') }"
                                        href="{{ route('admin.inventaris.peminjaman') }}">Peminjaman
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>


                    {{-- Menu News --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.news') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('news')) }">

                            <i class="fa-regular fa-newspaper"></i>

                            News
                        </a>
                    </li>

                    <h3 class="mb-3 mt-4 ml-4 text-sm font-medium text-black dark:text-white duration-300">Menu Laporan
                        RT/RW</h3>

                    {{-- Menu Keuangan --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="#" @click.prevent="selected = (selected.includes('keuangan') ? '':'keuangan')"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('keuangan')) }">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                            Keuangan
                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected.includes('keuangan')) }" width="20"
                                height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected.includes('keuangan')) ? 'block' : 'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/keuangan') }"
                                        href="{{ route('admin.keuangan') }}">Keuangan
                                    </a>
                                </li>
                                <li x-show="levelUser == 'RT'">
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/keuangan/pembayaran') }"
                                        href="{{ route('admin.keuangan.pembayaran') }}">Pembayaran
                                    </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/keuangan/riwayat') }"
                                        href="{{ route('admin.keuangan.riwayat') }}">Riwayat Pembayaran
                                    </a>
                                </li>
                                {{-- Menu Keuangan --}}
                                <li x-show="levelUser === 'Super Admin' || levelUser === 'RW'"
                                    x-data="{ subMenuPengeluaran: location.pathname }">
                                    <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                                        href="#"
                                        @click.prevent="subMenuPengeluaran = (subMenuPengeluaran.includes('pengeluaran') ? '':'pengeluaran')"
                                        :class="{
                                            'bg-ungu text-white dark:bg-meta-4': (subMenuPengeluaran.includes(
                                                'pengeluaran'))
                                        }">
                                        <i class="fa-solid fa-money-bill-transfer"></i>
                                        Pengeluaran
                                        <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                            :class="{ 'rotate-180': (subMenuPengeluaran.includes('pengeluaran')) }"
                                            width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                                fill="" />
                                        </svg>
                                    </a>

                                    <!-- Dropdown Pengeluaran -->
                                    <div class="translate transform overflow-hidden"
                                        :class="(subMenuPengeluaran.includes('pengeluaran')) ? 'block' : 'hidden'">
                                        <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                            <li>
                                                <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                                    :class="{
                                                        'text-ungu dark:bg-meta-4': (subMenuPengeluaran ==
                                                            '/admin/keuangan/pengeluaran')
                                                    }"
                                                    href="{{ route('admin.keuangan.pengeluaran') }}">Pengeluaran
                                                </a>
                                            </li>
                                            <li>
                                                <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                                    :class="{
                                                        'text-ungu dark:bg-meta-4': (subMenuPengeluaran ==
                                                            '/admin/keuangan/pengeluaran/kategori')
                                                    }"
                                                    href="{{ route('admin.keuangan.kategori') }}">Kategori Pengeluaran
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dropdown Menu End -->
                                </li>
                                <li x-show="levelUser === 'Super Admin' || levelUser === 'RW'">
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark dark:text-white duration-300 ease-in-out hover:text-ungu"
                                        :class="{ 'text-ungu dark:bg-meta-4': (selected == '/admin/keuangan/setting') }"
                                        href="{{ route('admin.keuangan.setting') }}">Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>

                    {{-- Menu Report Data --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.report-data') }}"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected.includes('report-data')) }">
                            <i class="fa-solid fa-chart-line"></i>
                            Report Data
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
<!-- ===== Sidebar End ===== -->
