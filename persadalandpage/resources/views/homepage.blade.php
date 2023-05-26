@extends('layouts.homelayouts')

@section('content')
    <section class="text-gray-600 body-font bg-[url('/resources/images/background.png')]">
        <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
            <img class="lg:w-3/6 md:w-4/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                src="{{ Vite::asset('resources/images/ramuan.jpg') }}">
            <div class="text-center lg:w-3/5 w-full pt-5 mb-2 bg-white rounded">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-950">ProGest - Tonik Jantung</h1>
                <p class="mb-8 leading-relaxed">Minuman campuran botani cina, diamalkan turun temurun oleh masyarakat
                    Cina kerana keberkesanannya dalam pemeliharaan kesihatan jantung dan membersihkan sumbatan saluran
                    darah. Ia telah dihasilkan menggunakan campuran bahan-bahan dan herba Cina terpilih seperti cendawan
                    mekah, danshen,
                    goji, delima, tien qi, kurma, mao dong qing, shanza dan ginseng. Khasiat setiap bahan dan herba Cina
                    yang digunakan adalah seperti berikut:
                </p>
            </div>

            <div class="container px-5 py-18 mx-auto">
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/cendawanmekah.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Cendawan Mekah</h2>
                        <p class="leading-relaxed text-base">Menghindari dan mencegah dari terkena masalah jantung dan
                            menguatkan sistem imunisasi badan.
                            Mengurangkan risiko penyakit diabetes. Ia juga mempunyai pro-biotik yang mampu melancarkan
                            sistem penghadaman.</p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Danshen</h2>
                        <p class="leading-relaxed text-base">Membantu mengubati penyakit yang berpunca dari masalah
                            peredaran darah seperti strok
                            dan sakit dada dengan melembutkan dan meluaskan saluran darah. Kebiasaannya, danshen dijadikan
                            minuman untuk mengubati
                            masalah insomnia dan melancarkan sistem pernafasan (bronkitis).</p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/danshen.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/goji.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Goji</h2>
                        <p class="leading-relaxed text-base">Membantu menstabilkan tekanan darah dan melancarkan peredaran
                            darah. Sangat bagus untuk masalah diabetes dan kanser.
                            Kebiasaannya ia diamalkan untuk mengelakkan dari terkena jangkitan virus dan malaria.
                            Menggantikan sel-sel yang rosak.</p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Delima</h2>
                        <p class="leading-relaxed text-base">Delima sangat bagus bagi memelihara kesihatan jantung dan
                            mengurangkan risiko penyakit jantung dan strok.
                            Ini kerana ia dapat mengurangkan kadar kolestrol berlebihan dalam tubuh dan mampu membaiki
                            sistem pengaliran darah ke jantung sekiranya diamalkan setiap hari.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/delima.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/tienqi.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Tien Qi</h2>
                        <p class="leading-relaxed text-base">Polisakarida yang terdapat didalam tien qi mampu melancarkan
                            dan mencairkan peredaran darah.
                            Kebiasaannya, tien qi dijadikan sebagai bahan untuk melegakan kesakitan dan membantu merendahkan
                            kolestrol sekaligus menjaga kestabilan jantung.</p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Kurma</h2>
                        <p class="leading-relaxed text-base">Kurma mengandungi antioksidan yang dapat mencegah pelbagai
                            penyakit kronik. Fungsi antioksidan melindungi sel-sel dalam tubuh daripada radikal bebas.
                            Antioksidan yang terkandung dalam kurma dikenali sebagai flavonoid cukup baik untuk mengurangkan
                            risiko kencing manis, alzheimer dan kanser.</p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/kurma.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/maodongqing.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Mao Dong Qing</h2>
                        <p class="leading-relaxed text-base">Melancarkan perjalanan darah di dalam badan dan menyingkirkan
                            toksin untuk mengelakkan dari
                            terkena serangan strok dan sakit dada. Ia juga mampu melegakan sakit tekak dan batuk.</p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Shanza</h2>
                        <p class="leading-relaxed text-base">Kebiasaannya Shanza dijadikan sebagai teh yang mampu melegakan
                            stress atau <i>anxiety</i> dan menstabilkan tekanan darah.
                            Ia juga berkesan untuk melancarkan sistem penghadaman dan mampu mengurangkan kolestrol badan.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/shanza.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/ginseng.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Ginseng</h2>
                        <p class="leading-relaxed text-base">Mengamalkan ginseng secara berterusan mampu memulihkan
                            diabetes, menguatkan imunisasi badan dan mengelakkan dari terkena
                            gangguan kognitif yang menjadikan daya fikiran dan ingatan menjadi lemah. Ia juga mampu
                            meningkatkan daya seksual.</p>
                    </div>
                </div>
            </div>

            <div class="container px-1 py-20 mx-auto">
                <div class="flex flex-col text-center w-full mb-10">
                    <h4 class="sm:text-3xl text-1=2xl font-medium title-font text-gray-950 mb-2">Minuman Campuran Botani
                        Cina
                        Ini Amat Berkesan</h4>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">untuk membantu atasi <strong>cabaran-cabaran
                            kesihatan</strong> berikut:</p>
                </div>
                <div class="flex flex-wrap justify-center -m-4">
                    <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                        <div class="h-full p-6 rounded-lg border-2 border-gray-100 flex flex-col relative overflow-hidden bg-white">
                            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Kesan seawal</h2>
                            <h3
                                class="text-3xl text-gray-950 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                <span>1 Minggu</span>
                            </h3>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Tangan/kaki kebas (kerana kolestrol tinggi)
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Sakit-sakit bahu
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Buasir
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Migrain
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Gout
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Sesak nafas
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Letih lesu
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Gangguan menstruasi
                            </p>
                        </div>
                    </div>
                    <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                        <div class="h-full p-6 rounded-lg border-2 border-gray-100 flex flex-col relative overflow-hidden bg-white">
                            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Kesan seawal</h2>
                            <h3
                                class="text-3xl text-gray-950 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                <span>2 Minggu</span>
                            </h3>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Strok Iskemia (kerana sumbatan pada saluran darah)
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Kolestrol tinggi
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Darah tinggi (peringkat awal)
                            </p>
                            <p class="flex items-center text-gray-600 mb-2">
                                <span
                                    class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Awal kencing manis
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-5 py-18 mx-auto">
                <div class="text-center mb-10">
                    <h4 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-950 mb-2">Progest Juga
                        Mampu</h4>
                    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">membantu dalam rawatan-rawatan berikut:-
                    </p>
                </div>
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menormalkan fungsi sistem penghadaman</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Mengatasi masalah resdung</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menurunkan tekanan darah tinggi (hipertensi)</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Melegakan masalah buah pinggang</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Mengurangkan tekanan dan gangguan tidur (insomnia)</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membersihkan racun dalam tubuh (detoksifikasi) dan sel
                                kanser</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menjaga stamina badan</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Mengurangkan ketegangan urat saraf</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu melegakan sakit-sakit otot pada bahu, leher dan
                                tengkuk</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container px-5 py-20 mx-auto flex flex-wrap">
                <div class="flex flex-col text-center w-full mb-10">
                    <h5 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-950">
                        Penghasilan Progest</h5>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">melibatkan <strong>dua</strong>
                        proses fermentasi bagi menghasilkan minuman campuran botani cina yang berkualiti.</p>
                </div>
                <div class="flex flex-wrap w-full justify-center">
                    <div class="lg:w-2/6 md:w-1/2 md:pr-10 md:py-6 bg-white mr-5 pl-5 rounded">
                        <div class="flex relative pb-12">
                            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>1</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Proses
                                    Fermentasi Pertama</h2>
                                <p class="leading-relaxed">Menghasilkan cuka cendawan mekah selama 30 hari.</p>
                            </div>
                        </div>
                        <div class="flex relative">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>2</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Proses
                                    Fermentasi Kedua</h2>
                                <p class="leading-relaxed">Air cuka cendawan mekah akan ditapis dan di rendam dengan
                                    campuran botani cina selama 30 hari untuk mendapatkan pengekstrakan
                                    zat-zat dan bahan aktif campuran botani cina secara maksimum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <video width="550" autoplay muted loop class="mt-5">
                        <source src="{{ Vite::asset('resources/videos/proses.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="container lg:px-40 py-10 mx-auto">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-950">Testimoni Dari
                        Pelanggan-Pelanggan Kami
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Pelanggan-pelanggan kami telah berkongsi kisah
                        mereka sebelum mencuba produk kami, <strong>Progest</strong>.
                        Setelah mengamalkan minuman campuran botani cina ini, mereka begitu teruja dengan kesan yang mereka
                        rasai. Ini adalah sebahagian testimoni dari pelanggan-pelanggan kami.</p>
                </div>
                <div class="flex justify-center flex-wrap">
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni1.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni3.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni4.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni5.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni6.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni7.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni8.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni9.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni10.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni11.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="lg:w-1/4 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <video width="300" controls>
                                <source src="{{ Vite::asset('resources/videos/testimoni12.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 py-18 mx-auto mt-10">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-950">Berminat untuk mendapatkan
                        Progest?</h1>
                    <button
                        class="flex-shrink-0 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-10 sm:mt-0">Beli
                        Sekarang
                    </button>
                </div>
            </div>

            <div class="container lg:px-40 py-24 mx-auto">
                <div class="container py-10 mx-0">
                    <div class="lg:w-6/6 flex flex-col sm:flex-row sm:items-center items-start w-full">
                      <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Produk-produk Lain</h1>
                      <a class="lex-shrink-0 cursor-pointer hover:text-green-600 text-black py-2 px-8 text-lg mt-10 sm:mt-0 ml-100">Lihat lagi...</a>
                    </div>
                </div>
                <div class="flex flex-wrap -m-4 ">
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
