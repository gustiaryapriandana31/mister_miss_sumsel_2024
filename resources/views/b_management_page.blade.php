@extends('layouts.main')

@section('content')
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
        <img src="img/1.jpg" alt="Banner Image of B Management">
    </section>


    {{-- Section of Founder and Co-Founder --}}
    <section class="p-5 mb-12 font-montserrat">
        <h1 class="font-bold text-3xl text-navy ml-10 mt-10">Let's Know our Founder</h1>
        <p class="text-silver ml-10 mt-2 mb-10">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>

        <div class="flex flexr-row p-3 justify-center gap-10 items-center">
            <div class="flex flex-row gap-10 p-7 shadow-sm shadow-silver rounded-md">
                <img src="img/founder_mms.png" class="w-36 h-56 bg-gold shadow-md px-5 basis-1/2 rounded-md" alt="Founder MMS">
                <article class="flex flex-col justify-center">
                    <h4 class="text-navy font-bold font-inter">BAYU SYAMPRAKASA</h4>
                    <p class="text-sm">Founder Mister & Miss Sumsel 2024</p>
                    <div class="mt-10">
                        <a href="https://instagram.com" class="block text-sm hover:text-blue-500"><i class="fa-brands fa-facebook mr-1"></i> bayu1212</a>
                        <a href="https://facebook.com" class="block text-sm hover:text-pink-500"><i class="fa-brands fa-instagram mr-1.5"></i> bayu1212</a>
                        <a href="https://gmail.com" class="block text-sm hover:text-gold"><i class="fa-regular fa-envelope mr-1"></i> bayu@gmail.com</a>
                        <a href="https://tiktok.com" class="block text-sm hover:text-sky-800"><i class="fa-brands fa-tiktok mr-1.5"></i> bayu234</a>
                    </div>
                </article>
            </div>
            <div class="flex flex-row gap-10 p-7 shadow-sm shadow-silver rounded-md">
                <img src="img/co_founder_mms.png" class="w-36 h-56 bg-gold shadow-md px-5 basis-1/2 rounded-md" alt="Founder MMS">
                <article class="flex flex-col justify-center">
                    <h4 class="text-navy font-bold font-inter">M. ZAHIZAN PUTRA</h4>
                    <p class="text-sm">Co-Founder Mister & Miss Sumsel 2024</p>
                    <div class="mt-10">
                        <a href="https://instagram.com" class="block text-sm hover:text-blue-500"><i class="fa-brands fa-facebook mr-1"></i> izan1212</a>
                        <a href="https://facebook.com" class="block text-sm hover:text-pink-500"><i class="fa-brands fa-instagram mr-1.5"></i> izan1212</a>
                        <a href="https://gmail.com" class="block text-sm hover:text-gold"><i class="fa-regular fa-envelope mr-1"></i> izan@gmail.com</a>
                        <a href="https://tiktok.com" class="block text-sm hover:text-sky-800"><i class="fa-brands fa-tiktok mr-1.5"></i> izan234</a>
                    </div>
                </article>
            </div>
        </div>
    </section>


    {{-- Section of Visi & Misi --}}
    <section class="p-4">
        <h1 class="text-center text-5xl font-roboto text-navy font-bold mt-4">VISI <span class="text-gold">&</span> MISI</h1>
        <div class="flex flex-row justify-center items-center mt-5">
            <img src="img/logo_b_management.png" class="inline-block pl-5 w-2/5 h-2/5" alt="Logo B Management">
            <div class="px-12 basis-1/2">
                <h4 class="text-xl font-bold text-gold mb-3">Visi</h4>
                <p class="font-montserrat text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est quod ipsa numquam ad qui, commodi libero necessitatibus at eta itaque! Ab qui possimus dolorum ut nemo consectetur officiis cum. Doloribus, ipsum!</p>
                <h4 class="text-xl font-bold text-gold my-3">Misi</h4>
                <p class="font-montserrat text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est quod Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque amet voluptate sit non ipsum et beatae dolor perferendis officia. ipsa numquam ad qui, commodi libero necessitatibus at eta itaque! Ab qui possimus dolorum ut nemo consectetur officiis cum. Doloribus, ipsum!</p>
            </div>
        </div>
    </section>

    <a href="/model" class="inline-block shadow bg-blue-300 p-3 rounded mt-4">Model <i class="fa-solid fa-address-book"></i></a>
    @endsection
