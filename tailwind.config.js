import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "primary-orange": "#FF5722",

            },
        },
    },

    plugins: [forms],
};

// /** @type {import('tailwindcss').Config} */
// export default {
//     content: [
//         "./resources/**/*.blade.php",
//         "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
//         "./storage/framework/views/*.php",
//         "./resources/views/**/*.blade.php",
//     ],

//     theme: {
//         extend: {
//             fontFamily: {
//                 satoshi: ["Satoshi", "sans-serif"],
//                 inter: ["Inter", ...defaultTheme.fontFamily.sans],
//             },
//             colors: {
//                 "primary-orange": "#FF5722",
//             },
//         },
//     },
//     plugins: [forms],
// };
