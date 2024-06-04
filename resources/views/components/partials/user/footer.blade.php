<footer class="w-full -mt-[330px] bg-black1 z-10">
    <div class="max-w-6xl mx-auto py-6 grid grid-cols-4 pt-[330px] gap-x-10">
        <div class="company flex flex-col gap-y-7 col-start-1 col-end-2">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/images/template/logo/LogoRWPutih.png') }}" alt="" class=" h-6">
                <span class="self-center text-2xl text-white font-semibold whitespace-nowrap dark:text-white">02
                    ARJOSARI</span>
            </a>
            <p class="text-base leading-loose text-white">
                We provide a variety of servers to grow your users
            </p>
            <div class="flex items-center space-x-6">
                <a href="#" class="text-white hover:text-blue-500">
                    <i class="fab fa-facebook-f text-3xl"></i>
                </a>
                <a href="#" class="text-white hover:text-blue-500">
                    <i class="fab fa-twitter text-3xl"></i>
                </a>
                <a href="#" class="text-white hover:text-blue-500">
                    <i class="fab fa-instagram text-3xl"></i>
                </a>
                <a href="#" class="text-white hover:text-blue-500">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
            </div>
        </div>
        <div class="sitemap flex flex-col gap-y-7 col-start-6 col-end-7">
            <h3 class="text-white font-bold text-lg">Menu</h3>
            <ul class=" flex flex-col gap-y-4">
                <li>
                    <a href="{{ route('user.home') }}" class="text-base text-gray-500 hover:text-ungu">Home</a>
                </li>
                <li>
                    <a href="{{ route('user.penduduk') }}" class="text-base text-gray-500 hover:text-ungu">Penduduk</a>
                </li>
                <li>
                    <a href="{{ route('user.berita') }}" class="text-base text-gray-500 hover:text-ungu">Berita</a>
                </li>
                <li>
                    <a href="{{ route('user.agenda') }}" class="text-base text-gray-500 hover:text-ungu">Agenda</a>
                </li>
                <li>
                    <a href="{{ route('user.umkm') }}" class="text-base text-gray-500 hover:text-ungu">UMKM</a>
                </li>
                <li>
                    <a href="{{ route('user.inventaris') }}"
                        class="text-base text-gray-500 hover:text-ungu">Inventaris</a>
                </li>
                <li>
                    <a href="{{ route('user.layanan') }}" class="text-base text-gray-500 hover:text-ungu">Layanan</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="max-w-6xl mx-auto pt-6 py-10 text-center">
        <p class="text-base leading-losee text-gray-500">We provide a variety of servers to grow your users
            acquisition much user-friendly and boosting up sales.</p>
    </div>
</footer>
