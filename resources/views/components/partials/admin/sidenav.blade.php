<!-- ===== Sidebar Start ===== -->
<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-white duration-300 ease-linear dark:bg-boxdark lg:!static lg:!translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-center gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="index.html">
            <img :src="darkMode ? '{{ asset('assets/images/logo/logo-light.png') }}' : '{{ asset('assets/images/logo/logo-dark.png') }}'" width="150px" height="auto" class="duration-300" alt="Logo" />
        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{selected: $persist('Dashboard')}">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-black dark:text-white duration-300">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.dashboard') }}" @click="selected = 'Dashboard'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Dashboard')}">
                            <i class="fa-solid fa-house-chimney"></i>
                            Dashboard
                        </a>
                    </li>
                    <!-- Menu Item Dashboard -->

                    <!-- Menu Item Level -->
                    <li x-show="levelUser === 'Super Admin'">
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.level') }}" @click="selected = 'Level'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Level')}">
                            <i class="fa-solid fa-layer-group"></i>
                            Kelola Level
                        </a>
                    </li>
                    <!-- Menu Item Level -->

                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="#" @click.prevent="selected = (selected === 'Penduduk' ? '':'Penduduk')"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Penduduk') }">
                            <i class="fa-regular fa-address-card"></i>
                            Penduduk
                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected === 'Penduduk') }" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected === 'Penduduk') ? 'block' :'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark duration-300 ease-in-out hover:text-ungu"
                                        href="{{ route('admin.penduduk') }}" ">Daftar
                                        Penduduk
                                    </a>
                                </li>
                                <li>
                                    <a class=" group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark duration-300 ease-in-out hover:text-ungu"
                                        href="{{ route('admin.penduduk.akun') }}">Akun
                                        Penduduk
                                    </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark duration-300 ease-in-out hover:text-ungu"
                                        href="{{ route('admin.penduduk.kk') }}">Daftar KK
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>

                    <!-- Menu Bansos -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.bansos') }}" @click="selected = 'Bansos'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Bansos')}">
                            <i class="fa-solid fa-handshake-angle"></i>
                            Bansos
                        </a>
                    </li>
                    <!-- Menu Bansos End -->

                    {{-- Menu Data RT --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.data-rt') }}" @click="selected = 'Data RT'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Data RT')}">
                            <i class="fa-solid fa-people-roof"></i>

                            Data RT
                        </a>
                    </li>

                    {{-- Menu Inventaris --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.inventaris') }}" @click="selected = 'Inventaris'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Inventaris')}">

                            <i class="fa-solid fa-toolbox"></i>

                            Inventaris
                        </a>
                    </li>

                    {{-- Menu News --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.news') }}" @click="selected = 'News'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'News')}">

                            <i class="fa-regular fa-newspaper"></i>

                            News
                        </a>
                    </li>

                    {{-- Menu Layanan --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.layanan') }}" @click="selected = 'Layanan'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Layanan')}">
                            <i class="fa-solid fa-headset"></i>

                            Layanan
                        </a>
                    </li>

                    {{-- Menu Data UMKM --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.data-umkm') }}" @click="selected = 'Data UMKM'"
                            :class="{ 'bg-ungu-text-white dark:bg-meta-4': (selected === 'Data UMKM')}">
                            <i class="fa-solid fa-store"></i>

                            Data UMKM
                        </a>
                    </li>

                    {{-- Menu Keuangan --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.keuangan') }}" @click="selected = 'Keuangan'"
                            :class="{ 'bg-ungu-text-white dark:bg-meta-4': (selected === 'Keuangan')}">
                            <i class="fa-solid fa-money-bill"></i>

                            Keuangan
                        </a>
                    </li>

                    {{-- Menu Aspirasi --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.aspirasi') }}" @click="selected = 'Aspirasi'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Aspirasi')}">
                            <i class="fa-regular fa-lightbulb" width="18"></i>
                            Aspirasi
                        </a>
                    </li>

                    {{-- Menu Report Data --}}
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-graydark duration-300 ease-in-out hover:bg-ungu hover:text-white dark:hover:bg-meta-4 dark:text-white"
                            href="{{ route('admin.report-data') }}" @click="selected = 'Report Data'"
                            :class="{ 'bg-ungu text-white dark:bg-meta-4': (selected === 'Report Data')}">
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