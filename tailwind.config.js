import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                navy: "#1A1A40",
                gold: "#FFD700",
                silver: "#C0C0C0",
                dark_silver: "#4F4F4F",
                light_blue: "#4682B4",
            },
            spacing: {
                18: "4.5rem",
                30: "7.5rem",
                34: "8.5rem",
                42: "10.5rem",
                46: "11.5rem",
            },
        },
        screens: {
            xxs: "320px",
            xs: "426px",
            ...defaultTheme.screens,
        },
    },
    plugins: [],
};
