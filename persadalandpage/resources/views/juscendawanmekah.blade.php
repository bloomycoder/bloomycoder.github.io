@extends('layouts.homelayouts')

@section('content')
    <section class="text-gray-600 body-font bg-[url('/resources/images/background.png')]">
        <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
            <img class="lg:w-3/6 md:w-4/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                src="{{ Vite::asset('resources/images/jcm.png') }}">
            <div class="text-center lg:w-3/5 w-full pt-5 mb-2 bg-white rounded">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-950">Jus Cendawan Mekah</h1>
                <p class="mb-8 leading-relaxed">Juga dikenali sebagai air <strong>Teh Kombucha </strong> yang merupakan
                    minuman zaman silam dari Manchuria yang melalui peroses pembentukan / pembiakan dari <i>Bacterium
                        Iylinium</i>.
                    Teh Kombucha sedikit berasid dan rasanya seperti ‘cuka sider epal’ yang rasanya sedikit manis dan
                    sedikit masam.
                    Jus ini mengandungi cendawan mekah, teh hijau, gula dan air proses berbalik.
                    </strong>
                </p>
            </div>

            <div class="container px-5 py-18 mx-auto">
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-2 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/cm.png') }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium ">Cendawan Mekah</h2>
                        <p class="leading-relaxed text-base">Menormalkan fungsi sistem penghadaman dengan tidak
                            mengakibatkan <i>hyperacidity</i> dalam perut.
                            Ia juga mampu mengatasi masalah sembelit dan dapat mengurangkan berat badan jika diminum setiap
                            hari. Selain itu, cendawan mekah juga
                            dapat membantu melegakan sakit-sakit otot, masalah <i>bronchitis</i>, asma dan batuk. Ia juga
                            mampu membersihkan pundi hempedu,
                            menolong masalah colitis dan sakit perut.
                        </p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-2 mb-2 border-gray-200 sm:flex-row flex-col bg-white rounded">
                    <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                        <h2 class="text-gray-950 text-lg title-font font-medium">Teh Hijau</h2>
                        <p class="leading-relaxed text-base"> Menurunkan berat badan cara efektif seperti mempercepatkan
                            metabolisme dan meningkatkan rasa kenyang. Ia juga mampu menghalang perkembangan sel lemak.
                            Selain itu, teh hijau juga dapat menghindar dari serangan mendadak penyakit jantung yang boleh
                            menyebabkan kematian dan mampu menurunkan kolestrol dalam badan.
                        </p>
                    </div>
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-1 inline-flex items-center justify-center text-green-500 flex-shrink-0">
                        <img class="w-25 h-25" src="{{ Vite::asset('resources/images/tehhijau.jpg') }}">
                    </div>
                </div>
            </div>

            <div class="container px-5 py-20 mx-auto ">
                <div class="text-center mb-10">
                    <h4 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-950 mb-2 ">Khasiat Jus
                        Cendawan Mekah</h4>
                </div>
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Meningkatkan tenaga dan kesihatan kulit</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menyeimbangkan berat badan</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menjadikan pola tidur yang lebih sihat</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Meningkatan ketahanan tubuh daripada alergi</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Menurunkan tahap kolestrol dan tekanan darah</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Meningkatkan ketahanan, menguatkan dan menyeimbangkan kerja
                                organ-organ tubuh</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Mencegah terjadinya kanser usus besar</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Memperbaiki saluran pembuluh darah</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Melambatkan proses menopaus bagi wanita</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Membantu melancarkan proses pencernaan</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-5 lg:py-18 mx-auto flex flex-wrap lg:w-4/6">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-950">Testimoni Daripada Pelanggan Kami</h1>
                    <p class="lg:w-3/3 mx-auto leading-relaxed text-base">Alhamdulillah, ramai pelanggan kami yang mencuba dan merasai sendiri keberkesanan <strong>Jus Cendawan Mekah</strong> ini. 
                        Ini adalah sebahagian daripada pelanggan kami yang telah berkongsi tentang kesan yang mereka rasai setelah mengamalkan jus ini.</p>
                </div>
                <div class="flex flex-wrap ">
                    <div class="flex flex-wrap sm:w-1/2 lg:w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <video width="950" controls>
                                <source src="{{ Vite::asset('resources/videos/tcdm1.mp4') }}" type="video/mp4">
                            </video> 
                        </div>
                       <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="{{ Vite::asset('resources/images/jcm/jcm1.png') }}">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="{{ Vite::asset('resources/images/jcm/jcm2.png') }}">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="{{ Vite::asset('resources/images/jcm/jcm3.png') }}">
                        </div>
                    </div>
                    <div class="flex flex-wrap sm:w-1/2 lg:w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <video width="950" controls>
                                <source src="{{ Vite::asset('resources/videos/tcdm2.mp4') }}" type="video/mp4">
                            </video> 
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="{{ Vite::asset('resources/images/jcm/jcm4.png') }}">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="{{ Vite::asset('resources/images/jcm/jcm5.png') }}">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="{{ Vite::asset('resources/images/jcm/jcm6.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-10 md:mt-5 mx-auto">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-950">Berminat untuk mendapatkan
                        Jus Cendawan Mekah?</h1>
                    <button
                        class="flex-shrink-0 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-10 sm:mt-0">Beli
                        Sekarang
                    </button>
                </div>
            </div>

            <div class="container lg:px-40 py-10 mx-auto">
                <div class="container py-10 mx-0">
                    <div class="lg:w-6/6 flex flex-col sm:flex-row sm:items-center items-start w-full">
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
