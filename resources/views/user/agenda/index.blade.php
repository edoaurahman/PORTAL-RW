<x-layout.user-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/illustration/kerjabakti.png') }}" alt="" class=" max-w-100">
            </div>
            <div class="flex flex-col gap-y-10">
                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-ungu dark:text-orange-100 font-bold text-[70px] leading-none">Kerja Bakti Serentak Seluruh RT
                    </h1>
                    <h1 class="text-black1 dark:text-purple-500 font-bold text-[70px] leading-none">
                        26 Mei 2024
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class=" max-w-2xl  mx-auto font-sans bg-purple-500 p-2 rounded-3xl z-20 relative">
        <h1 class="text-center font-bold text-3xl leading-tight text-white">Agenda</h1>
    </section>
    <section id="tutorial" class=" flex flex-row max-w-6xl pt-20 mx-auto font-sans pb-12 mb-60 bg-ungu p-14 rounded-3xl z-20 relative ">
        <div class="mx-20 items-center justify-between">
            <h5 class="mb-2 text-[20px] font-bold tracking-tight text-white dark:text-white">Kalender Agenda RW 2</h5>

            <div  inline-datepicker data-date="05/22/2024"></div>

        </div>

        <ol class="relative border-s border-gray-200 dark:border-gray-700">
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-100 dark:text-gray-500">12 Mei 2024</time>
                <h3 class="text-lg font-semibold text-white dark:text-white">Abid Sunatan</h3>
                <p class="mb-4 text-base font-normal text-gray-300 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim deserunt minus aspernatur quo, dolorum accusamus eligendi veritati.</p>
                <!-- <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg></a> -->
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-100 dark:text-gray-500">26 Mei 2024</time>
                <h3 class="text-lg font-semibold text-white dark:text-white">Kerja Bakti Seluruh RT</h3>
                <p class="text-base font-normal text-gray-300 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-100 dark:text-gray-500">30 Mei 2024</time>
                <h3 class="text-lg font-semibold text-white dark:text-white">RW 2 Bersholawat</h3>
                <p class="text-base font-normal text-gray-300 dark:text-gray-400">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
            </li>
        </ol>


    </section>
</x-layout.user-layout>