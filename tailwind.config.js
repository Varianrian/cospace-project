/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: [],
    },
    plugins: [
        require('flowbite/plugin'),
        require('daisyui'),
    ],
}

