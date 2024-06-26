<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <title>Mou - Mille Crepes Pontianak</title>
</head>

<body>
    <div id="navbar" class="flex flex-row items-center justify-center z-10 bg-amber-50">
        <img src="images/Logo Cokelat.png" alt="" class="w-16 mt-10 z-10">
    </div>

    <div id="hero" class="relative w-full h-auto sm:h-auto md:h-screen lg:h-screen bg-amber-50 flex justify-center items-center overflow-hidden">
        <img src="images/hero-ornamen.png" alt="" class="z-0 absolute w-full sm:w-full md:w-full lg:w-2/3 bottom-[-150px] sm:bottom-[-150px] md:bottom-[-20px] lg:bottom-[-400px] opacity-50">
        <img src="images/hero-daun.png" alt="" class="z-0 absolute bottom-[10px] sm:bottom-[10px] md:bottom-[-20px] lg:bottom-[-40px] w-6/7 opacity-60">
        <img src="images/hero-kue.png" alt="" class="z-5 absolute bottom-[5px] sm:bottom-[5px] md:bottom-[-400px] lg:bottom-[-80px] px-2 sm:px-2 md:px-5 lg:px-10" data-aos="zoom-in-up" data-aos-delay="400">

        <div class="hero-text flex flex-col justify-center items-center mt-10 pb-[250px] sm:pb-[250px] md:pb-[360px] lg:pb-[360px] z-10 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
            <div class="headline">
                <h1 class="text-5xl sm:text-5xl md:text-5xl lg:text-6xl text-brown-mou mb-3 break-words text-center">Mille Crepes Pontianak
                </h1>
            </div>
            <div class="isiheadline">
                <h4 class="text-lg sm:text-lg md:text-lg xl:text-xl leading-6 text-amber-700 max-w-[40rem] mx-auto px-10 md:px-10 text-center">
                    Kami menyediakan mille crepes premium dengan harga yang terjangkau, cocok untuk menemanimu menjalani hari
                </h4>
            </div>
            <div class="hero-cta w-44 h-12 flex justify-center items-center mt-6 rounded-xl bg-dark-brown-mou cursor-pointer"
                onclick="window.open('https://www.instagram.com/mou.crepes/','mywindow');">
                <i class="fa-brands fa-instagram mr-2" style="color:white"></i>
                <h4 class="text-amber-50">Hubungi Kami</h4>
            </div>
        </div>

        <img src="images/lengkungan-cokelat.png" class="absolute bottom-0 w-full" alt="">
    </div>

    <div id="cerita-kami"
        class="flex flex-col justify-center items-center text-zinc-800 bg-brown-mou px-5 pt-16 pb-24 sm:px-5 md:px-10 lg:px20 overflow-hidden relative">
        <img src="images/background-cerita.png" alt="" class="absolute bottom-0 w-2/3 opacity-10">
        <h1 class=" text-center text-3xl mb-3 text-amber-50 z-10" data-aos="fade-up" data-aos-delay="200">Cerita Kami
        </h1>
        <h4 class="text-center text-lg sm:text-lg md:text-lg xl:text-lg leading-6 w-5/6 sm:w-5/6 md:w-4/5 lg:w-3/6 text-amber-50 z-10" data-aos="fade-up" data-aos-delay="300">
            Kami menyadari bahwa kue bukan sekadar makanan penutup, ada momen yang terselip dalam setiap kue yang dinikmati, kami ingin memberikan pengalaman yang menyenangkan kepada pelanggan kami dengan menyediakan kue premium dengan harga yang terjangkau, ini menjadi pondasi awal kami menciptakan Mou
        </h4>
    </div>

    <div id="foto-kulkas" class="h-[10rem] sm:h-[10rem] md:h-[20rem] lg:h-[30rem] overflow-clip">
        <img src="images/Kulkas.jpg" alt="" class="w-full h-full object-cover">
    </div>

    <div id="produk" class="bg-amber-50 py-12 flex flex-col justify-center items-center relative">
        <h1 class="text-3xl text-dark-brown-mou mb-3" data-aos="fade-up" data-aos-delay="200">Produk Kami</h1>
        <h4 class="text-dark-brown-mou text-center px-10" data-aos="fade-up" data-aos-delay="300">
            Kami menyediakan berbagai varian mille crepes premium dan kue fresh lain untuk pelanggan kami
        </h4>

        <div class="wrapper mt-10 mb-10 z-10">
            <div class=" cards">
                <!-- Tiramisu -->
                <div class="card-wrapper rounded-xl mb-10 z-10 flex justify-center items-center">
                    <div class="card relative ">
                        <img src="images/produk/tiramisu.png" alt="" class="h-[13rem] sm:h-[13rem] lg:h-[26rem] rounded-xl">
                        <div class="produk-info absolute top-6 left-8">
                            <h1 class="text-white text-2xl">Tiramisú mille crepes</h1>
                            <h4 class="text-white text-sm">18k/slice | 145k/loyang</h4>
                        </div>
                    </div>
                </div>

                <!-- Caramel -->
                <div class="card-wrapper rounded-xl mb-10 z-10 flex justify-center items-center">
                    <div class="card relative">
                        <img src="images/produk/caramou.png" alt="" class="h-[13rem] sm:h-[13rem] lg:h-[26rem] rounded-xl">
                        <div class="produk-info absolute top-6 left-8">
                            <h1 class="text-white text-2xl">Caramou mille crepes</h1>
                            <h4 class="text-white text-sm">20k/slice | 160k/loyang</h4>
                        </div>
                    </div>
                </div>

                <!-- Matcha -->
                <div class="card-wrapper rounded-xl mb-10 z-10 flex justify-center items-center">
                    <div class="card relative">
                        <img src="images/produk/moucha.png" alt="" class="h-[13rem] sm:h-[13rem] lg:h-[26rem] rounded-xl">
                        <div class="produk-info absolute top-6 left-8">
                            <h1 class="text-white text-2xl">Moucha mille crepes</h1>
                            <h4 class="text-white text-sm">17k/slice | 135k/loyang</h4>
                        </div>
                    </div>
                </div>

                <!-- Mouberry Mini Cake -->
                <div class="card-wrapper rounded-xl mb-10 z-10 flex justify-center items-center">
                    <div class="card relative">
                        <img src="images/produk/mouberry.png" alt="" class="h-[13rem] sm:h-[13rem] lg:h-[26rem] rounded-xl">
                        <div class="produk-info absolute top-6 left-8">
                            <h1 class="text-white text-2xl">Mouberry mini cake</h1>
                            <h4 class="text-white text-sm">35k/pcs</h4>
                        </div>
                    </div>
                </div>

                <!-- Custom Bento Cake -->
                <div class="card-wrapper rounded-xl mb-10 z-10 flex justify-center items-center">
                    <div class="card relative">
                        <img src="images/produk/custom-bento.png" alt="" class="h-[13rem] sm:h-[13rem] lg:h-[26rem] rounded-xl">
                        <div class="produk-info absolute top-6 left-8">
                            <h1 class="text-white text-2xl">Custom bento cake</h1>
                            <h4 class="text-white text-sm">Start from 65k</h4>
                        </div>
                    </div>
                </div>

                <!-- Cover -->
                <div class="card-wrapper rounded-xl mb-10 z-10 flex justify-center items-center">
                    <div class="card relative">
                        <img src="images/produk/cover.png" alt="" class="h-[15rem] sm:h-[15rem] lg:h-[30rem] rounded-xl">

                    </div>
                </div>
            </div>
        </div>
        <img src="images/background-menu-atas.png" alt="" class="absolute top-0 w-full z-0 opacity-70">
        <img src="images/background-menu.png" alt="" class="absolute bottom-0 w-full  z-0 opacity-70">
    </div>

    <div id="kenapa-mou"
        class="flex flex-col justify-center items-center bg-dark-brown-mou px-20 pt-12 pb-20 overflow-hidden relative">

        <h1 class=" text-center text-3xl mb-12 text-amber-50" data-aos="fade-up" data-aos-delay="200">Kenapa Harus Mou?
        </h1>

        <div class="kenapamou-wrapper flex flex-col sm:flex-row gap-20 sm:gap-20 md:gap-25 lg:gap-32" data-aos="fade-up" data-aos-delay=>
            <div class="kenapamou-premium w-60">
                <div class="kenapamou-icon mb-2">
                    <i class="fa-solid fa-star fa-xl" style="color : #ffffff"></i>
                </div>
                <h1 class="text-xl  mb-1 text-amber-50">Bahan Premium</h1>
                <h4 class="text-amber-50 leading-5">Kami menggunakan bahan premium untuk semua kue yang kami buat</h4>
            </div>

            <div class="kenapamou-ongkir w-60" data-aos="fade-up" data-aos-delay="400">
                <div class="kenapamou-icon mb-2">
                    <i class="fa-solid fa-truck fa-xl" style="color : #ffffff"></i>
                </div>
                <h1 class="text-xl  mb-1 text-amber-50">Gratis Ongkir</h1>
                <h4 class="text-amber-50 leading-5">
                    Kami menyediakan jasa antar kue gratis untuk jarak antar tertentu (S&K berlaku)
                </h4>
            </div>

            <div class="kenapamou-custom w-60" data-aos="fade-up" data-aos-delay="500">
                <div class="kenapamou-icon mb-2">
                    <i class="fa-solid fa-palette fa-xl" style="color : #ffffff"></i>
                </div>
                <h1 class="text-xl  mb-1 text-amber-50">Bisa Custom</h1>
                <h4 class="text-amber-50 leading-5">
                    Kami melayani berbagai permintaan custom kue yang kamu inginkan disini
                </h4>
            </div>
        </div>
    </div>

    <div id="testimoni" class="bg-amber-100 h-auto pt-12 pb-12 flex flex-col overflow-hidden relative">
        <div class="testimoni-judul flex flex-col justify-center items-center z-10">
            <h1 class=" text-center text-3xl text-dark-brown-mou mb-3" data-aos="fade-up" data-aos-delay="200">Testimoni
            </h1>
            <h4 class="text-dark-brown-mou text-center break-words px-10" data-aos="fade-up" data-aos-delay="300">
                Ini kata mereka tentang Mille crepes dari Mou
            </h4>
        </div>
        <img src="images/ceritakami-ornament.png" alt="" class="z-0 opacity-5 absolute">
        <div class="testimoni-kartu z-10">
            <div class="mySwiper swiper-container px-20 py-20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/1.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/2.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/3.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/4.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/5.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/6.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/7.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/8.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <img src="images/foto-testi/9.svg" style="border-radius: 15px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="testimoni-kartu z-10">
            <swiper-container class="mySwiper swiper-container px-20 py-20 " space-between="12" slides-per-view="4"
                effect="slide" navigation="false" pagination="false" autoplay-delay="5000"
                autoplay-disable-on-interaction="false" autoplay-reverse-direction="false" loop="true"
                allow-touch-move="false" prevent-clicks="false">
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/1.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/2.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/3.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/4.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/5.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/6.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/7.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/8.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-container">
                        <img src="./img/foto-testi/9.svg" style="border-radius: 15px;">
                    </div>
                </swiper-slide>
            </swiper-container>
        </div> -->
    </div>

    <div class="copyright h-10 flex justify-center items-center bg-dark-brown-mou">
        <h4 class="text-amber-50 text-xs sm:text-xs md:text-sm lg:text-sm break-words">
            <center> Copyright © 2024, Mou Crepes. All Rights Reserved.</center>
        </h4>
    </div>

    <div id="button-up"
        class="fixed bottom-14 right-10 w-16 h-16 bg-dark-brown-mou rounded-full z-10 flex justify-center items-center cursor-pointer drop-shadow-xl"
        onclick="topFunction()">
        <i class="fa-solid fa-arrow-up fa-xl" style="color:white"></i>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script src="https://kit.fontawesome.com/2dee8e192b.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> -->

<script src="js/script.js"></script>

</html>