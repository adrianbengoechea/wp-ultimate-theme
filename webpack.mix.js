import mix from 'laravel-mix'
import path from 'path'


const themePath = path.resolve(); 
const resourcesPath = path.resolve() + '/resources'; 
const distPath = path.resolve() + '/dist'; 

mix.setPublicPath(themePath);

mix.js(resourcesPath + '/js/app.js', distPath + '/js').vue();
mix.js(resourcesPath + '/js/main.js', distPath + '/js');


mix.postCss(resourcesPath + '/css/app.css', distPath + '/css');

// mix.sass(resourcesPath + '/sass/app.scss', distPath + '/css');

// mix.js(resourcesPath + '/js/app.js', distPath + '/js').vue().postCss(resourcesPath + '/css/app.css', distPath + '/css', [
//     '@tailwindcss/postcss'
// ])
