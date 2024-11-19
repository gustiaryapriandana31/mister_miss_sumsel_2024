<template>
    <footer class="bg-navy">
        <div class="border-b border-b-white-300">
            <div
                class="container py-4 flex flex-wrap flex-col justify-between xs:flex-row xs:items-center gap-4"
            >
                <ul
                    class="flex flex-wrap flex-col xs:flex-row gap-4 lg:gap-x-8"
                >
                    <li v-for="menu in menus">
                        <a
                            :href="menu.link || menu.items['0'].link"
                            class="py-1 text-white hover:text-gold"
                        >
                            {{ menu.title }}
                        </a>
                    </li>
                </ul>

                <ul
                    class="flex flex-wrap flex-col xs:flex-row gap-4 lg:gap-x-8"
                >
                    <li>
                        <a
                            href="https://www.instagram.com/bmodelschool/"
                            target="_blank"
                            class="flex gap-2 items-center text-gold transition-[font-weight] duration-200"
                        >
                            <i class="fa-brands fa-instagram text-xl"></i>
                            <span class="text-sm">B Model School</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="https://www.instagram.com/mistermiss_sumsel/"
                            target="_blank"
                            class="flex gap-2 items-center text-gold transition-[font-weight] duration-200"
                        >
                            <i class="fa-brands fa-instagram text-xl"></i>
                            <span class="text-sm">Mister Miss Sumsel</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container text-white">
            <p class="py-3 text-center text-black-500 text-sm">
                © 2024 B Management. All Rights Reserved
            </p>
        </div>
    </footer>
</template>

<script>
import { menus } from "../menus.js";

export default {
    data() {
        return {
            menus,
        };
    },
};
</script>
