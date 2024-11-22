@extends('layouts.main')

@section('content')
    {{-- Section of Hero Image --}}
    <section id="banner-image" class="min-h-[100vh] max-h-[100vh] relative overflow-hidden">
        <img src="img/banner_model_school.jpg" alt="Banner Image of B Models School" class="absolute top-0 left-0 w-full h-full object-center object-cover">
    </section>

    <div class="container">
        {{-- Section of Visi & Misi --}}
        <section class="p-4">
            <h1 class="text-center text-4xl lg:text-5xl font-roboto text-navy font-bold mt-4">PROFILE <span class="text-gold">B</span> MODEL</h1>
            <div class="flex flex-col lg:flex-row justify-center items-center">
                <article class="font-montserrat basis-1/2 text-navy text-justify lg:text-start lg:pl-16 order-2 lg:order-1">
                    <h6 class="text-gold mb-4 text-xl"><span class="font-bold">"B"</span> artinya Bahagia</h6>
                    <p><span class="pl-7">Bermula</span> dari kepercayaan seorang teman pada bulan Desember 2021, meminta saya untuk berbagi ilmu agar dapat sharing kesemua orang secara umum. Akhirnya dengan support dan dukungan dari semua pihak, tepat pada tanggal 14 Januari 2022 "B Model & Pageant School Palembang dibuka.</p>
                    <p class="my-3"><span class="pl-7">Pemilihan</span> nama mengandung arti Bahagia menjadi pelaku Model dan Pageant (beauty contest) di Palembang. Dengan tagline "Everyone Can Shine" artinya Setiap Orang Bisa Bersinar".</p>
                    <p class="my-3"><span class="pl-7">Dua</span> Kepala Pria dan Wanita memakai tanjak dan crown khas Sumatera Selatan Terinspirasi dari Putra Putri Sriwijaya</p>
                    <p><span class="pl-7">Kombinasi</span> <span class="text-light_blue font-bold">Warna Biru </span> melambangkan kepercayaan diri dan simbol kebebasan serta ketenangan dalam artian bebas berekspresi dalam menyalurkan kemampuan didunia modeling & pageant. <span class="text-gold font-bold">Warna Kuning</span> melambangkan Optimisme, dan pencerahan kreativitas.</p>
                </article>
                <img src="img/logo_b_model.png" class="inline-block basis-1/2 order-1 lg:order-2" alt="Logo B Management">
            </div>
        </section>

         <!-- Registration Section -->
        <section class="my-10 px-6 py-12 text-white font-sans bg-gradient-to-r from-navy to-sky-800 min-[700px :px-10 md:px-16 md:flex md:gap-x-20 lg:mb-12 lg:gap-x-24 min-[1150px]:gap-28 relative rounded-md">
            <img src="img/vector-4.png" alt="Vector" class="absolute top-0 right-0 w-32 h-24 opacity-45"/>
            <div class="md:basis-2/3">
                <h2 class="text-xl font-bold text-gold lg:text-2xl z-20">
                    Pendaftaran B Models School
                </h2>
                <p class="mt-3 text-[1.1rem] md:text-lg">
                    Kami tunggu kehadiran Anda untuk bergabung bersama kami dalam mengembangkan bakat dan potensi diri Anda.
                </p>
            </div>
            <div class="md:basis-1/3">
                <a href="https://docs.google.com/forms/d/1sYCbYsWoxdRbzLfK5ubTXjkVtY4DnDJUUQmab4D9CDA/edit" class="text-sm inline-block mt-7 text-center z-10 bg-white hover:bg-navy py-3 px-5 text-navy hover:text-white font-bold rounded-md shadow-md md:px-8 md:max-w-max md:self-start lg:text-lg">Daftar Sekarang</a>
                <p><i class="mr-2 mt-4 text-gold fa-solid fa-phone text-sm"></i>Contact Person : <a target="_blank" href="https://wa.me/6282184371382" class="inline-block">0821-8437-1382</a></p>
            </div>
        </section>    
    </div>
@endsection