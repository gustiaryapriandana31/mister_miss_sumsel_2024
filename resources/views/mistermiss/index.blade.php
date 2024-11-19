@extends('layouts.main')

@section('content')
    <section
        class="min-h-[100vh] max-h-[100vh] relative overflow-hidden"
    >
        <img
            src="{{ asset('img/banner_mister_miss_sumsel.jpg') }}"
            alt="banner"
            class="absolute top-0 left-0 w-full h-full object-cover object-center"
        />
    </section>

    <component-mistermiss-countdown></component-mistermiss-countdown>

    <section id="tentangKami" class="py-[60px] sm:py-[120px]">
        <div class="container">
            <div class="flex gap-y-6 flex-col lg:flex-row items-center bg-navy/95">
                <div class="lg:flex-[50%] flex items-center justify-center bg-navy relative w-full">
                    <img
                        src="{{ asset('img/logo_mister_miss_sumsel.png') }}"
                        alt="Logo Mister Miss Sumsel"
                        loading="lazy"
                    />
                </div>
                <div class="lg:flex-[50%] px-4 pb-4 lg:p-8">
                    <h2 class="font-bold text-2xl sm:text-3xl text-gold">
                        Mister Miss Sumatera Selatan
                    </h2>
                    <p class="mt-4 text-white text-sm sm:text-base">
                        Merupakan suatu platform perdana yang dirilis pada tahun
                        2024 dalam dunia per pageant an Idonesia khusunya di
                        Sumatera Selatan. Ajang ini dibuat untuk meningkatkan
                        berbagai sector sumatera selatan dengan peranan generasi
                        muda. Meningkatkan semangat generasi muda dalam beraktivitas
                        dan berkreativitas membangun Sumatera Selatan dan karakter
                        bangsa yang terarah dan positif sehingga menjadi penerus
                        cita-cita dan perjuangan bangsa serta generasi pembangun
                        yang berjiwa berasaskan Pancasila.
                    </p>
                </div>
            </div>
            <div class="flex gap-y-6 flex-col lg:flex-row items-center bg-navy/95">
                <div class="lg:flex-[50%] lg:order-2 flex items-center justify-center bg-navy relative w-full">
                    <img
                        src="{{ asset('img/mister_miss_model.jpg') }}"
                        alt="Logo Mister Miss Sumsel"
                        loading="lazy"
                    />
                </div>
                <div class="lg:flex-[50%] lg:order-1 px-4 pb-4 lg:p-8">
                    <h2 class="font-bold text-2xl sm:text-3xl text-gold">
                        Menciptakan Putra-Putri di Provinsi Sumatera Selatan
                    </h2>
                    <p class="mt-4 text-white text-sm sm:text-base">
                        Ajang ini bertujuan menjadikan Putra-Putri di Provinsi Selatan untuk mendukung penyelenggaraan disektor budaya dan pariwisata di Sumatera Selatan dan juga kebudayaan daerah yang bernuansa harmoni alam untuk kesejahteraan masyarakat serta meningkatkan mutu dan kualitas generasi muda di era milienial saat ini. Takhanya dibidang pariwisatan dan budaya namun ajang ini juga berfokus kjepada kepedulian terhadap lingkungan. Hasil dari pemilihan Mister dan Miss Sumatera Selatan 2024 ini, peserta kan dikirim ke ajang tingkat nasional yaitu Mister Miss Grand Tourism Indonesia dan Mister Miss Eco Indonesia
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
