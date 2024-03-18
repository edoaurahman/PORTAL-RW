<x-layout.form-login-layout>
    <div class="grid grid-cols-2 h-screen">
        <div class="flex justify-center items-center bg-transparent">
            <div class="absolute z-[-1] h-screen w-screen bg-black2" id="particles-js"></div>
            <div class="text-right pr-20 pl-20 ">
                <h2 class="text-5xl font-extrabold font-sans text-white mb-5 uppercase">Hubungan di Era Digital
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
                    class="text-white bg-ungu hover:bg-indigo-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-lg px-5 py-4 w-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                    new account</button>
            </form>
        </div>

        <script src="{{ asset('assets/js/particles.min.js') }}"></script>
        <script>
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 380,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#640EF1"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#640EF1",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        </script>
</x-layout.form-login-layout>
