@extends('layouts.main')

@section('content')
<section class="px-4 lg:px-8 min-h-[100vh] max-h-[100vh] relative overflow-hidden">
  <img src="{{ asset('img/banner_mister_miss_sumsel.jpg') }}" alt="banner" class="absolute top-0 left-0 w-full h-full object-cover object-center">
</section>

<section class= "px-4 lg:px-8 py-14">
    <div class="container flex gap-x-12 items-center">
        <div class="flex-[40%] flex items-center justify-center">
            <img src="{{ asset('img/logo_mister_miss_sumsel.png') }}" alt="Logo Mister Miss Sumsel" loading="lazy">
        </div>
        <div class="flex-[60%]">
            <h2 class="font-inter font-bold text-3xl lg:text-4xl font-gold">Mister Miss Sumsel</h2>
            <p class="mt-4">
                Merupakan suatu platform perdana yang dirilis pada tahun 2024 dalam dunia per pageant an Idonesia khusunya di Sumatera Selatan. Ajang ini dibuat untuk meningkatkan berbagai sector sumatera selatan dengan peranan generasi muda. Meningkatkan semangat generasi muda dalam beraktivitas dan berkreativitas membangun Sumatera Selatan dan karakter bangsa yang terarah dan positif sehingga menjadi penerus cita-cita dan perjuangan bangsa serta generasi pembangun yang berjiwa berasaskan Pancasila.

            </p>
        </div>
    </div>

</section>
@endsection
