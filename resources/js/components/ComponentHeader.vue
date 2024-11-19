<template>
    <header
        class="fixed z-[1000] w-full px-4 py-1 md:px-8 bg-navy flex justify-between items-center space-x-2 transition-all duration-200 shadow-xl"
    >
        <a href="/" class="z-50">
            <img
                src="/img/logo_b_management.png"
                alt="nav-logo"
                class="w-[90px]"
            />
        </a>
        <nav
            id="headerNav"
            class="w-[80vw] h-[100vh] top-0 absolute -right-[100vw] transition-all duration-300 lg:h-auto lg:w-auto lg:block lg:relative lg:right-auto lg:p-8"
            :class="{
                'right-0 bg-navy shadow-2xl lg:bg-transparent lg:shadow-none':
                    isNavOpen,
            }"
        >
            <ul
                class="flex flex-col pt-[120px] px-4 gap-y-4 gap-x-12 font-semibold list-none lg:p-0 lg:flex-row mt-0 lg:justify-between"
            >
                <li
                    v-for="(menu, index) in menus"
                    :key="index"
                    class="nav-menu text-2xl lg:text-base z-50 relative text-white hover:text-gold duration-200 cursor-pointer"
                    :class="{
                        'text-gold lg:text-white': openSubMenuIndex === index,
                    }"
                    @click="toggleSubMenu(index)"
                >
                    {{ menu.title }}
                    <ul
                        class="nav-sub-menu !text-lg lg:!text-base grid grid-rows-[0fr] opacity-0 h-0 transition-all duration-300 ease-in-out my-4 mx-8 space-y-3 list-none lg:opacity-100 lg:h-auto lg:absolute lg:m-0 lg:left-0 lg:top-16 lg:hidden"
                        :class="{
                            'grid-rows-[1fr] opacity-100 h-auto':
                                openSubMenuIndex === index,
                        }"
                    >
                        <li
                            v-for="(item, subIndex) in menu.items"
                            :key="subIndex"
                            class="text-white hover:text-gold duration-200"
                        >
                            <a :href="item.link">{{ item.name }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="z-50 space-x-4 text-white">
            <a
                href="#"
                class="bg-gold/80 hover:bg-gold text-black transition-all duration-200 py-2 px-3 rounded-sm hidden lg:block"
            >
                Contact Us
            </a>
            <span
                class="text-white text-xl lg:hidden cursor-pointer"
                id="navToggler"
                @click="toggleNav"
            >
                <i
                    :class="
                        isNavOpen ? 'fa-solid fa-times' : 'fa-solid fa-bars'
                    "
                ></i>
            </span>
        </div>
    </header>
</template>

<script>
export default {
    data() {
        return {
            isNavOpen: false,
            openSubMenuIndex: null,
            menus: [
                {
                    title: "B Management",
                    items: [{ name: "Introduction", link: "#" }],
                },
                {
                    title: "B Model School",
                    items: [{ name: "About", link: "#" }],
                },
                {
                    title: "Mister Miss Sumsel",
                    items: [
                        { name: "About", link: "#" },
                        { name: "Daftar Finalis", link: "#" },
                        { name: "Vote", link: "#" },
                    ],
                },
                {
                    title: "Berita",
                    link: "#",
                    items: [],
                },
            ],
        };
    },
    mounted() {
        const header = document.querySelector("header");
        const nav = document.getElementById("headerNav");
        const navToggler = document.getElementById("navToggler");

        // Handle hover listeners based on viewport size
        this.handleHoverListeners = () => {
            if (window.innerWidth >= 1024) {
                nav.addEventListener("mouseenter", this.addOverClass);
                nav.addEventListener("mouseleave", this.removeOverClass);
                // Reset menu state when the viewport is large
                this.resetNavState();
            } else {
                nav.removeEventListener("mouseenter", this.addOverClass);
                nav.removeEventListener("mouseleave", this.removeOverClass);
            }
        };

        this.addOverClass = () => header.classList.add("over");
        this.removeOverClass = () => header.classList.remove("over");

        // Initial setup for listeners
        this.handleHoverListeners();
        window.addEventListener("resize", this.handleHoverListeners);

        // Close navigation if clicked outside
        this.onClickOutside = (e) => {
            if (!header.contains(e.target) && !navToggler.contains(e.target)) {
                this.isNavOpen = false;
            }
        };

        window.addEventListener("click", this.onClickOutside);
    },
    beforeDestroy() {
        window.removeEventListener("resize", this.handleHoverListeners);
        window.removeEventListener("click", this.onClickOutside);
        const nav = document.getElementById("headerNav");
        nav.removeEventListener("mouseenter", this.addOverClass);
        nav.removeEventListener("mouseleave", this.removeOverClass);
    },
    methods: {
        // Toggle the main navigation menu
        toggleNav() {
            this.isNavOpen = !this.isNavOpen;
        },

        // Toggle sub-menu open/close based on index
        toggleSubMenu(index) {
            if (window.innerWidth < 1024) {
                this.openSubMenuIndex =
                    this.openSubMenuIndex === index ? null : index;
            }
        },

        // Reset navigation state for larger viewports (over 1024px)
        resetNavState() {
            if (window.innerWidth > 1024) {
                this.isNavOpen = false;
                this.openSubMenuIndex = null;
            }
        },
    },
};
</script>

<style lang="scss" scoped>
@media screen and (min-width: 1024px) {
    header {
        &::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 250px;
            left: 0;
            top: -200px;
            z-index: -50;
            transition: top 0.3s;
            background-color: #1a1a40;
        }

        #headerNav {
            &::before {
                content: "";
                position: absolute;
                width: 100%;
                height: 200px;
                left: 0;
                top: -200px;
                transition: top 0.3s;
                background-color: #1a1a40;
            }
        }
    }

    header.over {
        &::before {
            top: 0;
        }

        #headerNav {
            &::before {
                top: 0;
            }
        }

        .nav-sub-menu {
            display: block;
            transition: height 0.3s ease-in-out;
        }
    }
}
</style>
