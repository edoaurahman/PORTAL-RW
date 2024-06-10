<x-layout.admin-layout>
    <div class="mb-5">
        <div class="mb-2">
            <h1><strong>REPORT DATA</strong></h1>
        </div>
        <h3 class="text-muted">
            ADMIN
            <small class="text-dark">
                <i class="fas fa-xs fa-angle-right text-muted"></i>
                Report Data
            </small>
        </h3>
        <div class="py-4 px-16 dark:bg-[#ffffff] dark:text-black" id="report-data">
            <div class="fixed end-6 bottom-6 group animate-bounce">
                <button type="button" onclick="printJS('printJS-form', 'html')" aria-controls="speed-dial-menu-default"
                    aria-expanded="false"
                    class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 dark:bg-purple-700 dark:hover:bg-purple-800 rounded-full w-14 h-14 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                    <i class="fa-solid fa-print  text-xl"></i>
                    <span class="sr-only">Open actions menu</span>
                </button>
            </div>
            <x-partials.admin.report-data.preview />
        </div>
        <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
        <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    </div>
</x-layout.admin-layout>
