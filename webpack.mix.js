import mix from 'laravel-mix'
import path from 'path'
import tailwindcss from 'tailwindcss'
// import { default as ImageminPlugin } from 'imagemin-webpack-plugin'

// let ImageminPlugin = require( '' ).default;

const siteUrl = 'study.wordpress-and-vuejs.local';

const themePath = path.resolve(); 

const resourcesPath = path.resolve() + '/resources'; 
const distPath = path.resolve() + '/dist'; 


mix.setPublicPath(themePath);

mix.sass(resourcesPath + '/sass/main.scss', distPath + '/css').options(
    {
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js')
        ]
    });

mix.js(resourcesPath + '/js/main.js', distPath + '/js');
mix.js(resourcesPath + '/js/app.js', distPath + '/js').vue();

// mix.copy( 'resources/img', 'public/img', false );

// mix.webpackConfig({
//     plugins: [
//         new ImageminPlugin({
//             pngquant: {
//                 quality: '95-100',
//             },
//             test: /\.(jpe?g|png|gif|svg)$/i,
//         })
//     ]
// });

mix.browserSync({
    proxy: siteUrl,
    files: [
        `${themePath}/**/*.php`,
        `${themePath}/**/*.vue`,
        `${themePath}/**/*.js`,
        `${themePath}/**/*.css`,
        `${themePath}/**/*.scss`,
    ]
});