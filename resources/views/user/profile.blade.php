<x-layout.user-layout>
    <section class="relative block h-[500px]">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style="
            background-image: url('assets/images/cover/bg-profile.webp');
          ">
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
    </section>
    <section class="relative py-16 bg-blueGray-200">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative">
                                <img alt="Foto Profile" src="{{ auth()->user()->penduduk->foto_profile() }}"
                                    class="w-50 h-50 -mt-20 rounded-full bg-white shadow-xl object-cover">
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                            <div class="py-6 px-3 mt-32 sm:mt-0">
                                <button
                                    class="border-ungu hover:bg-ungu uppercase text-ungu hover:text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                    type="button">
                                    {{ auth()->user()->penduduk->isPenerimaBansos() ? 'Penerima Bansos' : 'Bukan Penerima Bansos' }}
                                </button>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
                        </div>
                    </div>
                    <div class="text-center my-20">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700">
                            {{ auth()->user()->penduduk->nama }}
                        </h3>
                        <h1 class="text font-semibold leading-normal mb-2 text-blueGray-700">
                            {{ auth()->user()->penduduk->nik }}
                        </h1>
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                            {{ auth()->user()->penduduk->alamatLengkap() }}
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-10">
                            <i
                                class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>{{ auth()->user()->penduduk->status_penduduk }}
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            <i
                                class="fas fa-university mr-2 text-lg text-blueGray-400"></i>{{ auth()->user()->penduduk->pekerjaan }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.user-layout>
