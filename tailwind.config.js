import defaultTheme from 'tailwindcss/defaultTheme';

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
                roboto: ["Roboto", "sans-serif"],
                inter: ["Inter", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
            },
            colors: {
                navy: "#1A1A40",
                gold: "#FFD700",
                silver: "#C0C0C0",
                dark_silver: "#4F4F4F",
                light_blue: "#4682B4",
            },
        },
    },
    plugins: [],
};
