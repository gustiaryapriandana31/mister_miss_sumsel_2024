@extends('layouts.main')

@section('content')

    <section
        class="min-h-[100vh] max-h-[100vh] relative overflow-hidden"
    >
        <img
            src="{{ asset('img/banner_b_management.jpg') }}"
            alt="banner"
            class="absolute top-0 left-0 w-full h-full object-cover object-center"
        />
    </section>

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

@endsection
