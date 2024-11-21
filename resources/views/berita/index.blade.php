@extends('layouts.main')

@section('content')
    <section>
        <div class="container pt-[150px] pb-[60px] sm:pb-[120px]">
            <div class="text-center font-bold mb-20">
                <h1 class="text-5xl sm:text-6xl">BERITA</h1>
                <p class="text-lg sm:text-xl mt-2">B Management</p>
            </div>

            <div class="grid grid-cols-3 gap-x-6 gap-y-6">
                @foreach ($posts as $post)
                    <a href="{{ url('berita/'.$post['id']) }}">
                        <figure
                            class="relative w-full shadow-md overflow-clip bg-white"
                        >
                            <img
                                src="{{ asset('img/berita/'.$post['thumbnail']) }}"
                                alt="Cover post"
                                class="w-full object-cover object-center h-[200px]"
                                loading="lazy"
                            />
                            <figcaption class="px-4 py-2">
                                <div>
                                    <h2
                                        class="font-semibold mb-[10px] mt-[6px] h-[45px] sm:h-[55px] line-clamp-2 sm:text-lg hover:underline"
                                    >
                                        {{ $post['title'] }}
                                    </h2>
                                    <div
                                        class="flex gap-2 flex-wrap items-center text-sm"
                                    >
                                        {{ date('d M Y', strtotime($post["created_at"])) }}
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
