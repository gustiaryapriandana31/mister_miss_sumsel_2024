@extends('layouts.main')

@section('content')
    <section>
        <div class="container pt-[150px] pb-[40px] sm:pb-[80px]">
            <div class="shadow-sm">
                <div class="text-left pb-4">
                    <h2 class="text-4xl sm:text-5xl  font-bold ">{{ $post['title'] }}</h2>
                    <div class="text-sm mt-2 ">
                        Dipublikasikan pada: {{ date('d M Y', strtotime($post["created_at"])) }}
                    </div>
                </div>
                <img
                    src="{{ asset('img/berita/'.$post['thumbnail']) }}"
                    alt="Cover post"
                    class="w-full object-cover object-center"
                    loading="lazy"
                />
                <div class="content py-4">
                    <?= $post['content'] ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pb-[60px] sm:pb-[120px]">
            <a href="/berita" class="font-bold mb-4 block hover:underline">
                <h1 class="text-2xl sm:text-3xl">Berita dan Artikel Lainnya</h1>
            </a>

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
