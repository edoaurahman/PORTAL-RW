<x-layout.form-login-layout>
    <div class="grid grid-cols-2 h-screen">
        <div class="flex justify-center items-center bg-blue-500">
            <div class="text-right pr-20 pl-20">
                <h2 class="text-5xl font-bold font-sans text-ungu mb-5">Membangun Hubungan <br>Era Digital
                </h2>
                <p class="text-white text-lg mb-9">Selamat datang di Portal Web RW 02, tempat di mana Anda dapat
                    mengakses berbagai layanan dan informasi terkait dengan lingkungan dan kegiatan komunitas di RW 02.
                    Portal ini menyediakan akses mudah dan cepat bagi warga untuk terhubung, berkomunikasi, dan
                    terinformasi tentang berbagai kegiatan dan inisiatif yang sedang berlangsung di sekitar lingkungan
                    kita.</p>
                <button type="button"
                    class="text-ungu hover:text-white border-2 border-ungu hover:bg-ungu focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium text-base px-8 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    Beranda</button>
            </div>
        </div>
        <div class="flex justify-center items-center bg-white">
            <form class="w-full pl-20 pr-24">
                <h1 class="text-3xl font-sans font-medium text-ungu mb-2">Welcome!</h1>
                <h3 class="text-2xl font-sans font-normal capitalize mb-8">Sign into your account</h3>
                <div class="mb-5">
                    <label for="email"
                        class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">NIK</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-ungu focus:border-ungu block w-full py-3 px-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="name@flowbite.com" required />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-lgfont-medium text-gray-900 dark:text-white">
                        password</label>
                    <input type="password" id="password"
                        class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-ungu focus:border-ungu block w-full py-3 px-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Password" required />
                </div>
                <div class="flex items-center mb-5 mt-4">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="terms" class="ms-2 text-base font-medium  text-gray-900 dark:text-gray-300">I
                        agree
                        with
                        the <a href="#" class="text-ungu hover:underline dark:text-blue-500">terms and
                            conditions</a></label>
                </div>
                <button type="submit"
                    class="text-white bg-ungu hover:bg-chocolate focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-lg px-5 py-4 w-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                    new account</button>
            </form>
        </div>
    </div>
</x-layout.form-login-layout>
