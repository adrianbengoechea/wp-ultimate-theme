import mix from 'laravel-mix'
import path from 'path'


const themePath = path.resolve(); 
const resourcesPath = path.resolve() + '/resources'; 
const distPath = path.resolve() + '/dist'; 

mix.setPublicPath(themePath);

mix.js(resourcesPath + '/js/app.js', distPath + '/js').vue().postCss(resourcesPath + '/css/app.css', distPath + '/css', [
    '@tailwindcss/postcss'
])

mix.js(resourcesPath + '/js/custom.js', distPath + '/js');

const siteUrl = 'study.wordpress-and-vuejs.local';
mix.browserSync({
    proxy: siteUrl,
    files: [
        `${themePath}/**/*.php`,
        `${themePath}/app/**/*.php`,
        `${themePath}/**/*.vue`,
        `${themePath}/**/*.js`,
        `${themePath}/**/*.css`,
        `${themePath}/**/*.scss`,
    ]
});