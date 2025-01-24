<?php

namespace Assets;

use Assets\Resolver;

class Assets{
    use Resolver;

    public function front(): void{

        wp_enqueue_style('theme', $this->resolve('sass/styles.scss'), [], _THEME_VERSION);
        wp_enqueue_script('theme', $this->resolve('js/scripts.js'), [], _THEME_VERSION, true);

    }
}