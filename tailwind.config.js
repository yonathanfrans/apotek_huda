/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "main-color": "#30533E",
                "second-color": "#9CDBA6",
                "third-color": "#34A339",
                "fourth-color": "#528553",
                "dark-color": "#232321",
            },
            fontFamily: {
                "main-font": ["Open Sans", "sans-serif"],
                "second-font": ["Quicksand", "sans-serif"],
            },
            borderWidth: {
                20: "20px",
            },
            fontSize: {
                mini: ["8px", "10px"],
            },
        },
    },
    plugins: []
};
