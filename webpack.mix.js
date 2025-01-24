import mix from 'laravel-mix'
import path from 'path'

const siteUrl = 'study.wordpress-and-vuejs.local';

const themePath = path.resolve(); 

const resourcesPath = path.resolve() + '/resources'; 
const distPath = path.resolve() + '/dist'; 


mix.setPublicPath(themePath);

mix.sass(resourcesPath + '/sass/main.scss', distPath + '/css').sourceMaps();
mix.js(resourcesPath + '/js/main.js', distPath + '/js');

mix.browserSync({
    proxy: siteUrl,
    files: [
        `${themePath}/**/*.php`,
        `${themePath}/**/*.js`,
        `${themePath}/**/*.css`,
    ]
});