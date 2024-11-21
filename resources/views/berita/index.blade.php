@extends('layouts.main')

@section('content')

    <section>
        <div class="container pt-[150px] pb-[60px] sm:pb-[120px]">
            <div class="text-center font-bold mb-20">
                <h1 class="text-5xl sm:text-6xl">
                    BERITA
                </h1>
                <p class="text-lg sm:text-xl mt-2">B Management</p>
            </div>

            <div class="grid grid-cols-3 gap-x-6 gap-y-6">
                <a href="" class="group max-h-[300px] min-h-[300px] relative p-8 border border-black hover:bg-navy hover:border-navy transition-all duration-[.2s]">
                    <p class="text-xs sm:text-sm block w-fit border border-black group-hover:border-white group-hover:text-white font-bold px-2 py-1">
                        B Management
                    </p>
                    <h2 class="text-lg sm:text-xl mt-6 group-hover:text-gold line-clamp-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, voluptates Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem fugiat
                    </h2>
                    <p class="absolute right-8 bottom-8 text-xs block text-black w-fit border border-black group-hover:border-white group-hover:text-white font-bold px-2 py-1">
                        2024-01-20
                    </p>
                </a>
            </div>
        </div>
    </section>
@endsection
