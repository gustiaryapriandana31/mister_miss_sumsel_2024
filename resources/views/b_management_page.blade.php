@extends('layouts.main')

@section('container')
    <section class="p-4">
        <h1 class="text-center text-5xl font-roboto text-navy font-bold mt-4">VISI <span class="text-gold">&</span> MISI</h1>
        <div class="flex flex-row justify-center items-center">
            <img src="img/logo_b_management.png" class="inline-block basis-1/2 pl-5" alt="Logo B Management">
            <div class="px-12">
                <h4 class="text-xl font-bold text-gold mb-3">Visi</h4>
                <p class="font-montserrat basis-1/2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est quod ipsa numquam ad qui, commodi libero necessitatibus at eta itaque! Ab qui possimus dolorum ut nemo consectetur officiis cum. Doloribus, ipsum!</p>
                <h4 class="text-xl font-bold text-gold my-3">Misi</h4>
                <p class="font-montserrat basis-1/2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est quod Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque amet voluptate sit non ipsum et beatae dolor perferendis officia. ipsa numquam ad qui, commodi libero necessitatibus at eta itaque! Ab qui possimus dolorum ut nemo consectetur officiis cum. Doloribus, ipsum!</p>
            </div>
        </div>
    </section>
    
    <a href="/contact" class="inline-block shadow bg-blue-300 p-3 rounded mt-4">Home <i class="fa-solid fa-address-book"></i></a>
@endsection