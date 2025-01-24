<?php

namespace FM\Assets;

trait Resolver{

    private array $manifest = [];

    public function load(): void{
        $path = fm()->config->get('manifest.path');

        if( empty($path) || !file_exist($path) ){
            wp_die( __('Run <code>npm run build</code> in your application root!', THEME_NAME) );
        }

        $this->manifest = json_decode(file_get_contents($path), true);
    }

    private function resolve( string $path ): string{
        $url = '';

        if ( !empty($this->manifest["resources/{$path}"] ) ){
            $url = _DIST_URI . "/{$this->manifest["resources/{$path}"]['file']}";
        }

        return apply_filters('fm/assets/resolver/url', $url, $path);
    }

}