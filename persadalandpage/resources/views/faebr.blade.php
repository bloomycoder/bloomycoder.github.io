@extends('layouts.homelayouts')

@section('content')
    <section class="text-gray-600 body-font bg-[url('/resources/images/background.png')]">
        <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-4/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                src="{{ Vite::asset('resources/images/fbr.png') }}">
            <div class="text-center lg:w-3/5 w-full pt-10 bg-white mb-2">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-950">Faebr - Ejen Detox</h1>
                <p class="mb-8 leading-relaxed">Minuman sari buah dirumus khas bagi mereka yang mengalami masalah
                    <strong>usus kotor</strong>.
                    Diperbuat daripada campuran <i>roselle, hawthorn berry, oat, chicory root, psllium husk, cascara
                        sagrada</i> dan halia.
                </p>
            </div>

            <div class="container px-5 py-18 mx-auto">
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/fb/hawthornberry.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0 ">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Hawthorn Berry</h2>
                        <p class="leading-relaxed text-base">Tinggi dengan Vitamin C, meningkatkan fungsi kardiovaskular dan
                            hati, meningkatkan bekalan darah ke hati,
                            menyingkirkan radikal bebas dan merendahkan kolestrol dalam badan.
                        </p>

                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Roselle</h2>
                        <p class="leading-relaxed text-base">Membantu menyingkirkan toksin dalam badan, membantu pergerakan
                            peristalsis usus, merendahkan kemungkinan sembelit,
                            membaiki peredaran darah dan merendahkan tekanan darah, mengandungi penyejuk semulajadi,
                            mencantikkan kulit dan boleh menyelesaikan masalah jerawat.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/fb/roselle.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/fb/oat.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Oat</h2>
                        <p class="leading-relaxed text-base">Lebih kaya dengan asid amino, vitamin B1, kalsium, zat besi,
                            vitamin E dan protein berbanding bijirin lain. Mengurangkan
                            risiko menghidap penyakit jantung dan stroke serta melegakan sakit kepala dan keletihan.
                        </p>

                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Halia</h2>
                        <p class="leading-relaxed text-base"> Berfungsi untuk membuang angin pada usus besar dan usus kecil,
                            melegakan sembelit ringan, mengurangkan
                            berat badan, membantu penghadaman makanan dan membunuh kuman yang terdapat pada tubuh.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/fb/halia.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/fb/chicory.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Chicory Root</h2>
                        <p class="leading-relaxed text-base"> Mampu membantu merawat masalah dalam hati, membersih darah dan
                            mengawal paras gula dalam darah. Bersifat anti radang dan sumber terbaik A dan C,
                            ia juga meningkatkan rasa kenyang dan membakar lemak.
                        </p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Psyllium Husk</h2>
                        <p class="leading-relaxed text-base"> Mampu mengurangkan risiko sakit jantung, mengurangkan
                            kolestrol, membaiki tahap gula bagi pesakit diabetes dan sangat
                            bagus untuk sembelit.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/fb/psyllium.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/fb/cascara.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Cascara Sagrada</h2>
                        <p class="leading-relaxed text-base"> Berfungsi untuk mengekalkan kelembapan kulit, merawat luka dan
                            lebam, merangsang perjalanan darah, mampu mencegah kanser, meningkatkan
                            tenaga daripada keletihan dan menggalakkan pertumbuhan kulit.
                        </p>

                    </div>
                </div>
            </div>

            <div class="container px-5 py-20 mx-auto">
                <div class="flex items-center lg:w-3/5 mx-auto flex-col text-center w-full bg-white py-5">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"><i> Colon Cleansing</i> (Pencucian Usus Besar)</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><strong>Adakah Colon Cleansing boleh membantu memulihkan penyakit kronik?</strong> 
                        <br>Dari kajian ke atas ribuan penyakit, Dr. Bernand Jensen telah mendapati kesihatan kebanyakkan pesakit pulih secara beransur-ansur selepas menjalankan proses
                        pembersihan kolon dan diikuti diet yang seimbang.
                    </p>
                    <br>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><strong>Adakah teknik Colon Cleansing member kesan sampingan dalam masa panjang?</strong> 
                        <br>Membersihkan kolon adalah perkara yang baik, namun kaedah yang digunakan mungkin mendatangkan mudarat seperti kecederaan pada usus dan kesakitan. 
                        Walaubagaimanapun, jika menggunakan kaedah yang betul, pembersihan kolon tidak mendatangkan apa-apa kemudaratan kepada anda.
                    </p>
                    <br>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><strong>Apakah kaedah yang terbaik untuk membersihkan kolon?</strong> 
                        <br>Kaedah yang terbaik adalah dengan menggunakan kaedah pemakanan yang dihasilkan dari buah-buahan dan sayur-sayuran semula jadi. Contohnya, <strong>Persada Faebr</strong>.
                    </p>
                </div>
            </div>

            <div class="container px-5 py-18 mx-auto mb-20">
                <div class="text-center mb-10">
                    <h4 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-950 mb-2 ">Kebaikan Faebr
                    </h4>
                </div>
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Melegakan sembelit dan masalah akibat sembelit seperti
                                buasir.</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu menyingkirkan koprotasis, merendahkan risiko
                                kanser kolon.</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membersihkan kolon, mempertingkatkan persekitaran untuk
                                pertumbuhan bakteria baik.</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Memberikan rasa kenyang, efektif untuk mengawal berat
                                badan.</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu mengawal paras lemak dan kolestrol dalam
                                badan.</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu memulihkan semula sistem penghadaman.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-5 grid justify-items-center mx-auto mb-20 flex flex-wrap">
                <div class="flex flex-col text-center lg:w-3/5 mb-5 pt-5 pb-5 bg-white">
                    <h5 class="sm:text-xl text-2xl font-medium title-font mb-2 text-gray-950">
                        Cara Penyediaan</h5>
                    {{-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">melibatkan <strong>dua</strong>
                       </p> --}}
                </div>
                <div class="flex flex-col grid justify-items-center mx-auto w-full ">
                    <div class="lg:w-3/5 lg:px-40 sm:pt-5 md:w-1/2 md:pr-10 md:py-6 bg-white">
                        <div class="flex relative pb-12">
                            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>1</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Masukkan 1
                                    paket ke dalam shaker yang berisi 300ml air sejuk.</h2>
                                <p class="leading-relaxed">(boleh juga menggunakan air suam)</p>
                            </div>
                        </div>
                        <div class="flex relative">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>2</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Goncang hingga
                                    sebati dan sedia untuk diminum.</h2>
                                <p class="leading-relaxed">(minum terus selepas digoncang)</p>
                            </div>
                        </div>
                    </div>
                    <video width="750" controls class="mt-5">
                        <source src="{{ Vite::asset('resources/videos/faebr.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="container px-5 lg:pt-10 mx-auto flex flex-wrap lg:w-3/5 bg-white">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-950">90% PENYAKIT BERPUNCA
                        DARIPADA USUS BESAR</h1>
                    <p class="lg:w-3/3 mx-auto leading-relaxed text-base">Berapa lamakah saya perlu mengambil
                        <strong>Faebr</strong> dari Persada untuk memberikan
                        <strong>kesan yang optimum</strong>? Mengikut kajian daripada testimoni yang telah berjaya, ramai
                        yang memperoleh
                        kesannya dalam masa beberapa hari saja (5-7 hari), namun yang sebaik-baiknya <strong>tidak kurang
                            dari 15 hari.</strong>
                    </p>
                </div>
            </div>
            <div class="container py-10 md:mt-5 mx-auto">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-950">Berminat untuk mendapatkan
                        Faebr?</h1>
                    <button
                        class="flex-shrink-0 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-10 sm:mt-0">Beli
                        Sekarang
                    </button>
                </div>
            </div>

            <div class="container lg:px-40 py-10 mx-auto">
                <div class="container py-10 mx-0">
                    <div class="lg:w-6/6 flex flex-col sm:flex-row sm:items-center items-start">
                        <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Produk-produk Lain
                        </h1>
                        <a
                            class="lex-shrink-0 cursor-pointer hover:text-green-600 text-black py-2 px-8 text-lg mt-10 sm:mt-0 ml-100">Lihat
                            lagi...</a>
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
                        <a class="block relative h-48 rounded overflow-hidden cursor-pointer" href="/tehpersada">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ Vite::asset('resources/images/tehpersada.png') }}">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-gray-950 title-font text-lg font-medium">Teh Persada</h2>
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
                            <p class="mt-1">RM60.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
