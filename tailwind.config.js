import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'Inter', ...defaultTheme.fontFamily.sans],
                serif: ['"Newsreader"', 'Georgia', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                brand: {
                    accent: '#ff5533',
                    hover: '#ff6b4a',
                    surface: '#151722',
                    surfaceHover: '#1c1f2e',
                    border: 'rgba(255, 255, 255, 0.08)',
                }
            }
        },
    },
    plugins: [forms],
};
