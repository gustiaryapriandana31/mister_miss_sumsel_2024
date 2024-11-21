@extends('layouts.main')

@section('content')
    {{-- Section of Hero Image --}}
    <section id="banner-image" class="min-h-[100vh] max-h-[100vh] relative overflow-hidden">
        <img src="img/1.jpg" alt="Banner Image of B Management" class="absolute top-0 left-0 w-full h-full object-fill">
    </section>

    <div class="container">
        {{-- Section of Founder and Co-Founder --}}
        <section class="lg:p-5 py-5 mb:6 lg:mb-12 font-montserrat">
            <h1 class="font-bold lg:text-start text-center text-2xl lg:text-3xl text-navy lg:ml-10 lg:mt-10">Let's Know our Founder</h1>
            <p class="text-silver text-center lg:text-start text-sm lg:text-base lg:ml-10 mt-2 mb-10">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
    
            <div class="flex flex-col lg:flex-row lg:p-3 p-2 justify-center gap-10 items-center">
                <div class="flex flex-row gap-6 lg:gap-10 p-4 lg:p-7 shadow-sm shadow-silver rounded-md">
                    <img src="img/founder_mms.png" class="w-32 h-52 lg:w-36 lg:h-56 bg-gold shadow-md px-5 basis-1/2 rounded-md" alt="Founder MMS">
                    <article class="flex flex-col justify-center">
                        <h4 class="text-navy font-bold font-inter">BAYU SYAMPRAKASA</h4>
                        <p class="lg:text-sm text-xs">Founder Mister & Miss Sumsel 2024</p>
                        <div class="mt-10 lg:text-base text-xs">
                            <a href="https://instagram.com" class="block lg:text-sm hover:text-blue-500"><i class="fa-brands fa-facebook mr-1"></i> bayu1212</a>
                            <a href="https://facebook.com" class="block lg:text-sm hover:text-pink-500"><i class="fa-brands fa-instagram mr-1.5"></i> bayu1212</a>
                            <a href="https://gmail.com" class="block lg:text-sm hover:text-gold"><i class="fa-regular fa-envelope mr-1"></i> bayu@gmail.com</a>
                            <a href="https://tiktok.com" class="block lg:text-sm hover:text-sky-800"><i class="fa-brands fa-tiktok mr-1.5"></i> bayu234</a>
                        </div>
                    </article>
                </div>
                <div class="flex flex-row gap-6 lg:gap-10 p-4 lg:p-7 shadow-sm shadow-silver rounded-md">
                    <img src="img/co_founder_mms.png" class="w-32 h-52 lg:w-36 lg:h-56 bg-gold shadow-md px-5 basis-1/2 rounded-md" alt="Founder MMS">
                    <article class="flex flex-col justify-center">
                        <h4 class="text-navy font-bold font-inter">MUHAMMAD ZAHIZAN PUTRA</h4>
                        <p class="lg:text-sm text-xs">Co-Founder Mister & Miss Sumsel 2024</p>
                        <div class="mt-10 lg:text-base text-xs">
                            <a href="https://instagram.com" class="block lg:text-sm hover:text-blue-500"><i class="fa-brands fa-facebook mr-1"></i> izan1212</a>
                            <a href="https://facebook.com" class="block lg:text-sm hover:text-pink-500"><i class="fa-brands fa-instagram mr-1.5"></i> izan1212</a>
                            <a href="https://gmail.com" class="block lg:text-sm hover:text-gold"><i class="fa-regular fa-envelope mr-1"></i> izan@gmail.com</a>
                            <a href="https://tiktok.com" class="block lg:text-sm hover:text-sky-800"><i class="fa-brands fa-tiktok mr-1.5"></i> izan234</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    
    
        {{-- Section of Visi & Misi --}}
        <section class="p-4 mb-4 bg-navy text-white">
            <h1 class="text-center text-4xl lg:text-5xl font-roboto font-bold mt-4">Tentang <span class="text-gold">B</span> Management</h1>
            <div class="flex flex-col justify-center items-center mt:2">
                <img src="img/logo_b_management.png" class="inline-block lg:w-2/5 lg:h-2/5" alt="Logo B Management">
                <h5 class="italic font-bold text-gold text-xs text-center lg:text-lg font-inter mb-4">“Unleash the Extraordinary Moments with Us!”</h5>
                <p class="px-3 lg:px-12 font-montserrat lg:text-justify text-sm lg:text-base lg:mb-10 mb-4"><span class="text-gold font-bold pl-7">B Management</span> hadir sebagai mitra andalan di bidang layanan event! Dari sekolah modeling yang membantu mencetak talenta berbakat, hingga wedding organizer dan event organizer yang siap mewujudkan momen-momen tak terlupakan. Dengan sentuhan profesional dan ide-ide segar, CV B Management berkomitmen untuk menghidupkan setiap acara dengan sempurna dan penuh gaya.
                </p>
                <div class="px-3 lg:px-12 basis-1/2 flex flex-col lg:flex-row gap-2 items-start">
                    <div class="p-4 bg-blue-950/85">
                        <h4 class="text-xl font-bold text-gold mb-3">Visi</h4>
                        <p class="font-montserrat text-justify text-sm lg:text-base">Menjadi pilihan utama di industri event dan fashion, serta menjadi inspirasi dalam menciptakan pengalaman berkesan yang penuh kreativitas.
                            </p>
                    </div>
                    <div class="p-4 bg-blue-950/80">
                        <h4 class="text-xl font-bold text-gold mb-3">Misi</h4>
                        <ul class="font-montserrat lg:text-justify text-sm lg:text-base">
                            <li>1.	Menyajikan layanan berkualitas dan profesional untuk setiap acara, baik besar maupun kecil.</li>
                            <li>2.	Mengembangkan sekolah modeling yang membangun rasa percaya diri dan mencetak model-model masa depan yang siap bersinar.</li>
                            <li>3.	Merancang konsep pernikahan yang personal dan penuh makna sesuai impian setiap pasangan.</li>
                            <li>4.	Menghadirkan solusi event organizer yang kreatif dan inovatif untuk semua jenis acara.</li>
                            <li>5.	Menjaga kepuasan dan kebahagiaan klien dengan pelayanan ramah, responsif, dan berfokus pada detail.</li>
                        </ul>
                    </div>
                </div>
                <p class="px-3 lg:px-12 font-montserrat lg:text-justify text-sm lg:text-base mt-4">Dengan B Management, setiap acara menjadi lebih dari sekadar perayaan. Kami ada untuk mewujudkan momen-momen spesial yang tak terlupakan, penuh makna, dan tentunya, luar biasa!</p>
            </div>
        </section>
    </div>
@endsection
