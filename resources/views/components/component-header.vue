<template>
    <header class="px-4 py-1 md:px-8 bg-navy">
        <div class="flex justify-between gap-4 items-center">
            <a href="/">
                <img
                    src="{{ asset('img/logo_b_management.png') }}"
                    alt="nav-logo"
                    class="w-[80px]"
                />
            </a>
            <div class="flex justify-between gap-12 font-semibold">
                <a
                    href="#"
                    class="nav-menu text-white hover:text-gold duration-200"
                    >B Management</a
                >
                <a
                    href="#"
                    class="nav-menu text-white hover:text-gold duration-200"
                    >B Model School</a
                >
                <div class="nav-menu relative">
                    <a href="#" class="text-white hover:text-gold duration-200"
                        >Mister Miss Sumsel</a
                    >
                    <div class="absolute left-0 top-16 flex flex-col gap-y-2">
                        <a
                            href="#"
                            class="nav-sub-menu text-white hover:text-gold duration-200 hidden"
                            >Daftar Finalis</a
                        >
                        <a
                            href="#"
                            class="nav-sub-menu text-white hover:text-gold duration-200 hidden"
                            >Vote</a
                        >
                    </div>
                </div>
                <a
                    href="#"
                    class="nav-menu text-white hover:text-gold duration-200"
                    >Berita</a
                >
            </div>
            <div class="space-x-4 text-white">
                <a href="#"><i class="fa-brands fa-instagram text-xl"></i></a>
            </div>
        </div>
    </header>
</template>
