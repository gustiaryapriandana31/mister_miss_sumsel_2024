<template>
    <section>
        <div class="container pt-[60px] sm:pt-[120px]">
            <div class="space-y-6">
                <div
                    class="text-center lg:max-w-[600px] lg:mr-auto lg:text-left"
                >
                    <h1 class="font-bold text-3xl sm:text-4xl">
                        Pendaftaran Mister Miss Sumatera Selatan 2024
                    </h1>
                </div>
                <div
                    class="text-center lg:max-w-[680px] xl:max-w-[768px] lg:ml-auto lg:text-left sm:text-lg"
                >
                    <p>
                        Saat ini pendaftaran Mister Miss Sumatera Selatan 2024,
                        tunggu apa lagi daftar segara dan menjadi bagian dari
                        Mister Miss Sumatera Selatan.
                    </p>
                    <div class="support-by mt-3 mb-10">
                        <p class="font-semibold mb-4">
                            Hitung mundur penutupan pendaftaran
                        </p>
                        <div
                            class="bg-navy text-center flex flex-col items-center justify-center px-4 py-8"
                        >
                            <div
                                id="countdown"
                                class="font-bold text-white font-inter text-4xl sm:text-5xl"
                            ></div>
                            <div class="flex gap-x-4 gap-y-3 mt-6 flex-wrap">
                                <a
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSdP3HlJhMHXFroq-Qzk9XHKXiuZMJwlKoGwipmawNiZLkjnfQ/viewform?usp=sf_link&fbclid=PAZXh0bgNhZW0CMTEAAaY58dw0k_to3rbyucnGOdfcB1dS-BsCvc7jN6YS7uV_G11hPoAeYFhCLM8_aem_5HMaxtwxkLJLUq0wlG8j1w"
                                    class="bg-gold hover:bg-gold/85 text-black transition-all duration-200 py-3 px-2 rounded-sm text-base"
                                    >Daftar Sekarang
                                </a>
                                <a
                                    href="#tentangKami"
                                    class="bg-white hover:bg-white/85 text-black transition-all duration-200 py-3 px-2 rounded-sm text-base"
                                    >Tentang Kami
                                </a>
                            </div>
                        </div>
                        <p
                            class="font-semibold mt-2 text-center text-sm text-red-900"
                        >
                            Klik button "Daftar Sekarang" untuk mendaftar!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
var countDownDate = new Date("Nov 22, 2024 23:59:59").getTime();

setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML =
        days + "D  " + hours + "H  " + minutes + "M " + seconds + "S ";
}, 0);
</script>
