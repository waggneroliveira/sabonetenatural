// import defaultTheme from 'tailwindcss/defaultTheme';

// /** @type {import('tailwindcss').Config} */
// export default {
//     content: [
//         './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
//         './storage/framework/views/*.php',
//         './resources/**/*.blade.php',
//         './resources/**/*.js',
//         './resources/**/*.vue',
//     ],
//     theme: {
//         extend: {
//             fontFamily: {
//                 sans: ['Figtree', ...defaultTheme.fontFamily.sans],
//             },
//         },
//     },
//     plugins: [],
// };


import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php', // Blades no diretório views
        './resources/js/**/*.vue',         // Apenas arquivos Vue necessários
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'inner-banner': "url('/build/client/images/inner-banner.png')", // Banner interno dos produtos
                'firula-inner-banner': "url('/build/client/images/firula-inner-banner.png')", // Firula Banner interno dos produtos
            },
        },
    },
    plugins: [],
};
