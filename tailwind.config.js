const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    daisyui: {
        themes: [
          {
            mytheme: {
            
            "primary": "#a5f7b3",
                        
            "secondary": "#77f47e",
                        
            "accent": "#cbd129",
                        
            "neutral": "#2E2734",
                        
            "base-100": "#FCFBFD",
                        
            "info": "#9BBAE8",
                        
            "success": "#168D7D",
                        
            "warning": "#A25E07",
                        
            "error": "#EC6A6A",
            },
          },
        ],
      },

    plugins: [require('@tailwindcss/forms'),require("daisyui")],
};
