import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
                sansx: ["Figtree", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
                noto: ["Noto Sans", "sans-serif"],
                rounded: ['"M PLUS Rounded 1c"', "sans-serif"],
            },
        },
    },
    plugins: [forms, require("daisyui")],
    daisyui: {
        themes: ["light", "dark", "auto"], // tambahkan atau ganti
    },
};
