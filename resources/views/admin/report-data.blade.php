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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="py-4 px-16 dark:bg-[#ffffff] dark:text-black" id="report-data">
            <div class="fixed end-6 bottom-6 group animate-bounce">
                <button type="button" {{-- onclick="printJS('printJS-form', 'html')" --}} id="downloadPdfBtn" aria-controls="speed-dial-menu-default"
                    aria-expanded="false"
                    class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                    <i class="fa-solid fa-print  text-xl"></i>
                    <span class="sr-only">Open actions menu</span>
                </button>
            </div>
            <x-partials.admin.report-data.preview />


        </div>
    </div>
</x-layout.admin-layout>
<script>
    document.getElementById('downloadPdfBtn').addEventListener('click', function() {
        // go to /report-data/preview on new tab
        window.open('/report-data/download', '_blank');
    });
</script>
