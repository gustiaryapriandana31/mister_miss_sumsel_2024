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

    <section class="px-4 lg:px-8 py-14">
        <div class="container flex gap-x-12 items-center">
            <div class="flex-[40%] flex items-center justify-center">
                <img
                    src="{{ asset('img/logo_mister_miss_sumsel.png') }}"
                    alt="Logo Mister Miss Sumsel"
                    loading="lazy"
                />
            </div>
            <div class="flex-[60%]">
                <h2 class="font-inter font-bold text-3xl lg:text-4xl font-gold">
                    Mister Miss Sumsel
                </h2>
                <p class="mt-4">
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
    </section>

    <section id="about" class="relativ">
        <div class="container py-[40px] sm:py-[120px]">
            <div class="space-y-6">
                <div
                    class="text-center lg:max-w-[540px] lg:mr-auto lg:text-left"
                >
                    <p class="font-bold text-2xl sm:text-4xl">
                        Mister Miss Sumsel 2024
                    </p>
                </div>
                <div
                    class="text-center lg:max-w-[680px] xl:max-w-[768px] lg:ml-auto lg:text-left sm:text-lg"
                >
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur saepe libero nobis obcaecati, beatae ut fuga unde error sint cumque!
                    </p>
                    <div class="support-by mt-3 mb-10">
                        <p class="font-semibold">
                            MoslemMate didukung oleh organisasi Islam Terkemuka
                            di Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
