<x-layout.user-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <section class="hero max-w-6xl mx-auto font-sans pb-[200px] pt-[200px] sm:px-0 px-10">
        <div class="flex flex-row items-center justify-between">
            <div class="hidden sm:flex flex-row item-center">
                <img src="{{ asset('assets/images/illustration/orangorang.webp') }}" alt="" class=" max-w-100">
            </div>
            <div class="flex flex-col gap-y-10">
                <div class="gap-y-2 flex flex-col">
                    <h2 class="text-ungu dark:text-orange-100 font-bold text-3xl sm:text-[50px] leading-none">Informasi
                        Kegiatan
                        dan
                        Agenda
                    </h2>
                    <h1 class="text-black1 dark:text-purple-500 font-bold text-3xl sm:text-[60px] leading-none">
                        Warga RW 2
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class=" max-w-2xl  mx-auto font-sans bg-purple-500 dark:bg-purple-800 p-2 rounded-3xl z-20 relative">
        <h1 class="text-center font-bold text-3xl leading-tight text-white">Agenda</h1>
    </section>

    <section id="kalender"
        class="grid sm:grid-cols-2 gap-4 max-w-6xl sm:pt-20 mx-auto font-sans pb-12 mb-60 bg-ungu dark:bg-gray-800 p-10 sm:p-14 rounded-3xl z-20 relative ">
        <div>
            <h5 class="mx-5 mb-2 text-[20px] font-bold tracking-tight text-white dark:text-white">Kalender Agenda RW 2
            </h5>
            <div class="bg-purple-200 dark:bg-gray-700 rounded-xl sm:mx-5 p-5 sm:p-10">
                <div id="calendar"></div>
            </div>
        </div>
        <div class="h-[500px] overflow-auto">
            <div x-show="$store.agenda.data.length === 0">
                <div class="flex items center justify-center h-full">
                    <span class="text-white dark:text-gray-500">Tidak ada Agenda</span>
                </div>
            </div>
            <div x-show="$store.agenda.isLoading"
                class="flex items-center justify-center w-full h-56 rounded-lg bg-transparent dark:bg-gray-800 dark:border-gray-700">
                <div role="status">
                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-purple-600"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                <template x-for="item in $store.agenda.data">
                    <li class="mb-10 ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-100 dark:text-gray-200"
                            x-text="item.start">Tanggal</time>
                        <h3 class="text-lg font-semibold text-white dark:text-white" x-text="item.title">Abid Sunatan
                        </h3>
                        <p class="mb-4 text-base font-normal text-gray-300 dark:text-gray-400" x-text="item.deskripsi">
                            Lorem ipsum dolor sit
                            amet
                            consectetur adipisicing elit. Enim deserunt minus aspernatur quo, dolorum accusamus eligendi
                            veritati.</p>
                    </li>
                </template>
            </ol>
        </div>
    </section>
    <x-partials.user.agenda.detail />
</x-layout.user-layout>

<script src="{{ asset('assets/js/calender.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let calendarEl = document.getElementById('calendar');
        let calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'Asia/Jakarta',
            locale: 'id',
            height: 400,
            events: @json($agenda),
            headerToolbar: {
                start: 'prev',
                center: 'title',
                end: 'next'
            },
            customButtons: {
                addEvent: {
                    text: 'Tambah Agenda',
                    click: function() {
                        document.getElementById('add-agenda').classList.add('block');
                    }
                },
                next: {
                    click: function() {
                        calendar.next();
                        const date = calendar.getDate();
                        Alpine.store('agenda').getByDate(date.toISOString());
                    }
                },
                prev: {
                    click: function() {
                        calendar.prev();
                        const date = calendar.getDate();
                        Alpine.store('agenda').getByDate(date.toISOString());
                    }
                }
            },
            eventClick: function(info) {
                info.jsEvent.preventDefault(); // don't let the browser navigate
                Alpine.store('agenda').title = info.event.title;
                Alpine.store('agenda').deskripsi = info.event.extendedProps.deskripsi;
                Alpine.store('agenda').start = info.event.startStr;
                Alpine.store('agenda').end = info.event.endStr;
                // call alpine toggle agenda modal
                Alpine.store('agenda').toggle();
            },
        });
        calendar.render();
    });
</script>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('agenda', {
            id: '',
            title: '',
            deskripsi: '',
            start: '',
            end: '',
            on: false,
            data: [],
            isLoading: true,
            init() {
                this.getData();
            },
            toggle() {
                this.on = !this.on;
            },
            getData() {
                this.isLoading = true;
                fetch('/api/agenda', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.data = data;
                        // console.log(data);
                        this.isLoading = false;
                    })
            },
            getByDate(date) {
                this.isLoading = true;
                fetch('/api/agenda', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            date: date
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.data = data;
                        this.isLoading = false;
                    })
            },
        })
    })
</script>
