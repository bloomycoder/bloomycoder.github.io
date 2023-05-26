@extends('layouts.homelayouts')

@section('content')
    <section class="text-gray-600 body-font bg-[url('/resources/images/background.png')]">
        <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
            <img class="lg:w-3/6 md:w-4/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                src="{{ Vite::asset('resources/images/tehpersada1.png') }}">
            {{-- <div class="price-tag">RM 28.00</div> --}}

            <div class="text-center lg:w-3/5 w-full pt-5 mb-2 bg-white rounded">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-950">Teh Persada</h1>
                <p class="mb-8 leading-relaxed">Untuk ketenangan, kesegaran dan tinggi zatnya. Teh persada dengan campuran serai, madu kelulut, teh hijau bermutu tinggi dan ekstrak lemon.
                    <br><strong>Semestinya teh persada pilihan semua.</strong> 
                </p>
            </div>

            <div class="container px-5 py-18 mx-auto">
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/tehhijau.jpg') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Teh Hijau</h2>
                        <p class="leading-relaxed text-base">Teh hijau mengandungi banyak polyphenol seperti flavonoids dan catechins yang berfungsi mengurangkan pembentukan radikal bebas dalam badan, melindungi sel-sel dan molekul daripada dirosakkan oleh radikal bebas. 
                            Radikal bebas bertanggungjawab dalam proses penuaan badan dan dapat menjadikan seseorang awet muda. Teh hijau juga mengandungi L-theanine yang boleh sampai ke otak, mengurangkan stres dan kebimbangan.</p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Serai</h2>
                        <p class="leading-relaxed text-base">Mengandungi citral yang menyahtoksin di dalam badan dengan meningkatkan kekerapan urinisasi dan perpeluhan.
                            Aktiviti ini membantu membersihkan buah pinggang, hati, pankreas, sistem pencernaan, saluran darah dan membuang bahan toksin yang tidak diperlukan badan melalui proses urinisasi.
                            Penyingkiran urik asid dan bahan toksin dari badan mampu mengurangkan berat badan berlebihan seseorang.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/serai.jpeg') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/lemon.jpg') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Lemon</h2>
                        <p class="leading-relaxed text-base">Mengandungi asid sitrik, kalsium, magnesium, potassium, phosphorus, zat besi, vitamin A, vitamin B6
                        vitamin C, vitamin E, bioflavonoids, riboflavin, pectin dan lain-lain, yang meningkatkan tahap imun sistem, serta melawan sebarang jangkitan di dalam badan kita. 
                        </p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Madu Kelulut</h2>
                        <p class="leading-relaxed text-base">Khasiat madu kelulut termasuklah meningkatkan metabolisme badan, menambahkan tenaga batin, menjaga kecantikan, menguatkan wanita yang baru bersalin dan 
                            merawati pelbagai penyakit dan kecederaan dalaman.</p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/madu.png') }}">
                    </div>
                </div>
            </div>

            <div class="container px-5 py-20 mx-auto">
                <div class="text-center mb-10">
                    <h4 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-950 mb-2">Kebaikan Teh Persada</h4>
                </div>
                <div class="flex flex-wrap lg:w-3/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem penghadaman</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Mengawal tahap kolestrol</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membersih dan menyahkan toksin</span>
                        </div>
                    </div>             
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Melegakan tekanan</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Memngekalkan kulit yang sihat dan cantik</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Mengurangkan bau badan</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 ounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menurunkan berat badan</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menajamkan daya fikiran</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-5 py-0 mx-auto flex flex-wrap">
                <div class="flex flex-col text-center w-full mb-10">
                    <h5 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-950">
                        Cara Penyediaan</h5>
                    {{-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">melibatkan <strong>dua</strong>
                       </p> --}}
                </div>
                <div class="flex flex-wrap w-full justify-center">
                    <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6 bg-white rounded mr-5 pl-5">
                        <div class="flex relative pb-12">
                            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>1</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Campurkan 1 sachet teh persada bersama air panas sebanyak 200 ml. </h2>
                                <p class="leading-relaxed">(boleh juga menggunakan air sejuk)</p>
                            </div>
                        </div>
                        <div class="flex relative">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>2</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Disyorkan minum pagi dan malam dua jam sebelum tidur.</h2>
                                <p class="leading-relaxed">(sekiranya untuk tujuan kesihatan)</p>
                            </div>
                        </div>
                    </div>
                    <video width="550" autoplay controls loop class="mt-5">
                        <source src="{{ Vite::asset('resources/videos/tehpersada.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="container lg:px-40 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-950">Pelanggan-Pelanggan Kami</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Mereka telah mencuba <strong>Teh Persada</strong>.
                        Setelah mengamalkan minuman teh persada ini, ramai yang datang kembali untuk membeli produk ini lagi kerana <strong>kesannya yang memuaskan.</strong> </p>
                </div>
                <div class="flex justify-items-center flex-wrap ">
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp1.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp2.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp3.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp4.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp5.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp6.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp7.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp8.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp9.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp10.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp11.jpg') }}">
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 py-4">
                        <div class="flex relative">
                            <img class="inset-0 w-5/6 h-full object-cover object-center" src="{{ Vite::asset('resources/images/tp/tp12.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 mx-auto">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-950">Berminat untuk mendapatkan
                        Teh Persada?</h1>
                    <button
                        class="flex-shrink-0 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-10 sm:mt-0">Beli
                        Sekarang
                    </button>
                </div>
            </div>

            <div class="container lg:px-40 py-10 mx-auto">
                <div class="container py-10 mx-0">
                    <div class="lg:w-6/6 flex flex-col sm:flex-row sm:items-center items-start w-full">
                      <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Produk-produk Lain</h1>
                      <a class="lex-shrink-0 cursor-pointer hover:text-green-600 text-black py-2 px-8 text-lg mt-10 sm:mt-0 ml-100">Lihat lagi...</a>
                    </div>
                </div>
                <div class="flex flex-wrap -m-4 ">
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full bg-white border-2 border-gray-100">
                        <a class="block relative h-48 rounded overflow-hidden cursor-pointer" href="/">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ Vite::asset('resources/images/progest.png') }}">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-gray-950 title-font text-lg font-medium">Progest</h2>
                            <p class="mt-1">RM135.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full bg-white border-2 border-gray-100">
                        <a class="block relative h-48 rounded overflow-hidden cursor-pointer" href="/suoyangcoffee">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ Vite::asset('resources/images/kopi.png') }}">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-gray-950 title-font text-lg font-medium">Suo Yang White Coffee</h2>
                            <p class="mt-1">RM28.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full bg-white border-2 border-gray-100">
                        <a class="block relative h-48 rounded overflow-hidden cursor-pointer" href="/juscendawanmekah">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ Vite::asset('resources/images/jus.png') }}">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-gray-950 title-font text-lg font-medium">Jus Cendawan Mekah</h2>
                            <p class="mt-1">RM100.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full bg-white border-2 border-gray-100">
                        <a class="block relative h-48 rounded overflow-hidden cursor-pointer" href="/faebr">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ Vite::asset('resources/images/faebr.png') }}">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-gray-950 title-font text-lg font-medium">Faebr</h2>
                            <p class="mt-1">RM60.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
