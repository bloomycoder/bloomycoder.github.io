@extends('layouts.homelayouts')

@section('content')
    <section class="text-gray-600 body-font bg-[url('/resources/images/background.png')]">
        <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
            <img class="lg:w-3/6 md:w-4/6 w-5/6 mb-5 object-cover object-center rounded" alt="hero"
                src="{{ Vite::asset('resources/images/suoyang.png') }}">
            <div class="text-center lg:w-2/3 w-full pt-10 mb-2 bg-white rounded">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-950">Suo Yang White Coffee</h1>
                <p class="mb-8 leading-relaxed">Merupakan kopi kesihatan yang enak lagi menenangkan. Gabungan Kopi Arabika, Koko, Herba-herba terpilih serta di formulasi dengan 
                    Sarang Burung Walit membuatkan Suo Yang White Coffee istimewa dari minuman kopi yang lain. Gandingan Tongkat Ali, Shou Wu dan Ubi Jaga pastinya membuat anda lebih sihat, 
                    bertenaga, awet muda dan dapat membantu meningkatkan tahap kesuburan anda. <br><strong>Nikmati kesegaran Suo Yang Coffee di waktu pagi dan alamilah kehebatannya.</strong> 
                </p>
            </div>

            <div class="container px-5 py-18 mx-auto">
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-20 h-20" src="{{ Vite::asset('resources/images/sy/suoyang.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Suo Yang</h2>
                        <p class="leading-relaxed text-base">Bagus untuk pemeliharaan tulang dan otot. Ia juga mampu mencegah kekeringan
                            dan melembabkan usus.
                        </p>
                           
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Koko</h2>
                        <p class="leading-relaxed text-base">Mengandungi tannin iaitu sejenis bahan yang bertindak sebagai benteng kerosakan gigi dan menghalang pembentukan plak gigi.
                            Kaya dengan antioksidan flavonoids yang dapat mengurangkan risiko atherosclerosis serta mengurangkan kematian berpunca daripada penyakit koronori jantung.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/koko.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/krimer.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Krimer Tanpa Tenusu</h2>
                        <p class="leading-relaxed text-base">Merupakan makanan seimbang yang sangat baik. 
                            Mudah dicerna dan mengandungi semua asid amino yang diperlukan untuk menjaga dan memperbaiki lapisan tubuh yang rosak serta menambah tenaga.
                        </p>
                           
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Shou Wu</h2>
                        <p class="leading-relaxed text-base">Merupakan salah satu herba dasar pengubatan cina yang sangat efektif untuk memperkuatkan hati dan ginjal serta meningkatkan penampilan rambut.
                            Menguatkan tulang dan otot serta mencegah penuaan. Selain itu, dapat mengawal kadar kolesterol, darah tinggi dan bronchitis kronik.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/shouwu.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/sarangburung.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Sarang Burung Walit</h2>
                        <p class="leading-relaxed text-base">Dapat memutihkan dan melicinkan kulit muka terutama wanita mengandung dan baik untuk kulit bayi.
                            Bagi lelaki dan wanita yang mengamalkannya dapat mengekalkan awet muda. Selain itu, sarang burung walit juga dapat membantu dalam melancarkan sistem aliran darah.
                        </p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Tongkat Ali</h2>
                        <p class="leading-relaxed text-base"> Menstabilkan hormon androgen lelaki. Selain itu, dapat membantu dalam proses penyembuhan dan merawat sakit sendi.
                            Tongkat ali juga dapat meningkatkan pembentukkan otot dan melegakan sakit pinggang.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/tongkatali.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/ganoderma.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Ganoderma Lucidum</h2>
                        <p class="leading-relaxed text-base">Meningkatkan imunisasi tubuh badan dan mengimbangi tahap gula dalam darah.
                            Selain itu, ia juga dapat membantu membersihkan toksik dalam badan dan menambahkan tenaga.
                        </p>
                           
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Cordyceps</h2>
                        <p class="leading-relaxed text-base">Melindungi buah pinggang daripada toksin dan membantu mengawal penghidratan tubuh.
                            Cordyceps juga merupakan anti kulat, anti keradangan dan anti bengkak semulajadi serta menghalang kontraksi otot lembut.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/cordyceps.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/ubijaga.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Ubi Jaga</h2>
                        <p class="leading-relaxed text-base">Ubi jaga bertindak sebagai ejen anti-penuanaan. Selain itu, ia juga dapat melegakan keletihan dan kelesuan. Ia 
                            membantu melancarkan pengaliran darah dan meningkatkan metabolisme.
                        </p>
                           
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Panax Ginseng</h2>
                        <p class="leading-relaxed text-base">Meningkatkan libido pada wanita dan lelaki serta meningkatkan satmina. 
                            Selain itu, panaz ginseng juga mampu meningkatkan daya tahan tubuh dan membantu mengawal suhu badan.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/panax.png') }}">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/arabika.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Kopi Arabika</h2>
                        <p class="leading-relaxed text-base">Kopi arabika mampu membantu menghilangkan rasa mengantuk. Ia juga dapat menyegarkan badan dan
                            menjadikan badan lebih bersemangat. Selain itu, ia juga membantu meningkatkan tahap kesuburan lelaki dan meningkatkan pengaliran darah.
                        </p>
                           
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Garam Buluh</h2>
                        <p class="leading-relaxed text-base">Ia bertindak sebagai ejen anti-oksida dan menyingkirkan toksin dalam badan. Garam buluh mengandungi mineral dan kandungan
                            magnesium yang tinggi. Ia dapat membantu melawaskan sistem penghadaman.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/sy/garam.jpg') }}">
                    </div>
                </div>
            </div>

            <div class="container px-5 py-20 mx-auto">
                <div class="text-center mb-10">
                    <h4 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-950 mb-2">Kebaikan Kopi Suo Yang</h4>
                    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Selain dari memberi kesegaran, membekalkan tenaga dan mempercepatkan kadar metabolisme badan, 
                        <strong>Kopi Suo Yang</strong>  juga baik untuk:
                </div>
                <div class="flex flex-wrap lg:w-3/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem hormon (lelaki/wanita)</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem kulit</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem tulang dan urat saraf</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem jantung</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem penglihatan</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem ginjal/buah pingang</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem pernafasan</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu sistem peraliran darah</span>
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
                <div class="flex flex-col grid justify-items-center mx-auto w-full">
                    <div class="lg:w-3/5 lg:px-20 pt-5 md:w-1/2 md:pr-10 md:py-6 bg-white rounded">
                        <div class="flex relative pb-12">
                            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>1</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Campurkan satu sachet Suo Yang White Coffee bersama 150 ml air panas.</h2>
                                {{-- <p class="leading-relaxed">(boleh juga menggunakan air sejuk)</p> --}}
                            </div>
                        </div>
                        <div class="flex relative">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                <strong>2</strong>
                            </div>
                            <div class="flex-grow pl-4">
                                <h2 class="font-medium title-font text-lg text-gray-950 mb-1 tracking-wider">Kacau sehingga larut dan sedia untuk diminum.</h2>
                                {{-- <p class="leading-relaxed">(sekiranya untuk tujuan kesihatan)</p> --}}
                            </div>
                        </div>
                    </div>
                    <video width="750" controls autoplay class="mt-5">
                        <source src="{{ Vite::asset('resources/videos/kopi.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="container lg:px-40 py-20">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-950">Testimoni Dari
                        Pelanggan Kami
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Pelanggan ini telah mengamalkan <strong>Kopi Suo Yang sudah lebih 5 tahun</strong>
                        . Ikuti kisahnya untuk mengetahui kesan <strong>ajaib</strong> yang dialaminya selepas minum kopi ini.</p>
                </div>
                <div class="flex justify-center flex-wrap">
                    <div class="lg:w-7/12 sm:w-1/2">
                        <div class="flex relative">
                            <video width="950" controls>
                                <source src="{{ Vite::asset('resources/videos/suoyang.mp4') }}" type="video/mp4">
                            </video>                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 py-18 mx-auto mt-10">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-950">Berminat untuk mendapatkan
                        Kopi Suo Yang?</h1>
                    <button
                        class="flex-shrink-0 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-10 sm:mt-0">Beli
                        Sekarang
                    </button>
                </div>
            </div>

            <div class="container lg:px-40 py-20 mx-auto">
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
