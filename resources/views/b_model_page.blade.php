@extends('layouts.main')

@section('container')
{{-- Section of Hero Image --}}
    <section id="banner-image">
        {{-- <h1 class="text-white text-center font-bold font-roboto text-5xl mt-2">MISTER & MISS SUMSEL 2024</h1>
        <p class="text-white text-center font-normal font-montserrat text-2xl my-4">Daftarkan Segera Dirimu</p>
        <button class="mt-24 mx-auto block rounded-full w-1/5 h-16 text-2xl text-white hover:text-navy font-bold px-5 border border-gold hover:bg-gold opacity-80">DAFTAR</button>
        <img src="img/co_founder_mms.png" class="inline-block absolute bottom-0 left-12 h-4/5" alt="Co Founder MMS">
        <img src="img/founder_mms.png" class="inline-block absolute bottom-0 right-12" alt="Founder MMS">
        
        <div class="text-gold opacity-95 font-bold text-4xl shadow-lg shadow-navy font-montserrat">
            <h1 class="absolute bottom-5 left-16">M. ZAHIZAN PUTRA</h1>
            <h1 class="absolute bottom-5 right-16">BAYU SYAMPRAKASA</h1>
        </div>
        <div class="text-white font-bold text-lg font-inter">
            <p class="absolute bottom-16 left-1/4">Co-Founder</p>
            <p class="absolute bottom-16 right-[30%]">Founder</p>
        </div> --}}
        <img src="img/3.jpg" alt="Banner Image of B Model Pageant & School">
    </section>

    {{-- Section of Visi & Misi --}}
    <section class="p-4">
         <h1 class="text-center text-5xl font-roboto text-navy font-bold mt-4">PROFILE <span class="text-gold">B</span> MODEL</h1>
        <div class="flex flex-row justify-center items-center">
            <article class="font-montserrat basis-1/2 text-navy pl-16">
                <h6 class="text-gold mb-4 text-xl"><span class="font-bold">"B"</span> artinya Bahagia</h6>
                <p><span class="pl-7">Bermula</span> dari kepercayaan seorang teman pada bulan Desember 2021, meminta saya untuk berbagi ilmu agar dapat sharing kesemua orang secara umum. Akhirnya dengan support dan dukungan dari semua pihak, tepat pada tanggal 14 Januari 2022 "B Model & Pageant School Palembang dibuka.</p>
                <p class="my-3"><span class="pl-7">Pemilihan</span> nama mengandung arti Bahagia menjadi pelaku Model dan Pageant (beauty contest) di Palembang. Dengan tagline "Everyone Can Shine" artinya Setiap Orang Bisa Bersinar".</p>
                <p class="my-3"><span class="pl-7">Dua</span> Kepala Pria dan Wanita memakai tanjak dan crown khas Sumatera Selatan Terinspirasi dari Putra Putri Sriwijaya</p>
                <p><span class="pl-7">Kombinasi</span> <span class="text-light_blue font-bold">Warna Biru </span> melambangkan kepercayaan diri dan simbol kebebasan serta ketenangan dalam artian bebas berekspresi dalam menyalurkan kemampuan didunia modeling & pageant. <span class="text-gold font-bold">Warna Kuning</span> melambangkan Optimisme, dan pencerahan kreativitas.</p>
            </article>
            <img src="img/logo_b_model.png" class="inline-block basis-1/2" alt="Logo B Management">
        </div>
    </section>

@endsection