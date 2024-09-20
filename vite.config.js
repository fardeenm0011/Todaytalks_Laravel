import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/app.min.css",
                "resources/css/fontawesome.min.css",
                "resources/css/style.css",
                "resources/js/app.js",
                "resources/js/vendor/jquery-3.6.0.min.js",
                "resources/js/app.min.js",
                "resources/js/bootstrap.js",
                "resources/js/main.js",
                "resources/js/custom.js",
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ["jquery"], // Include jQuery in the optimized dependencies
    },
});
