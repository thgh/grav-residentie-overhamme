<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class MapShortcode extends Shortcode
{
    public function init()
    {
        $apikey = $this->grav['config']->get('plugins.googlemaps-reloaded.google_api_key');

        $this->shortcode->getHandlers()->add('googlemaps-reloaded', function(ShortcodeInterface $sc) use ($apikey) {

            // Google Maps JS
            // $this->grav['assets']->addJs('//maps.googleapis.com/maps/api/js?callback=initGoogleMaps&key=' . $apikey,
            //     ['pipeline' => false]
            // );

            // Add assets
            $this->shortcode->addAssets('js', 'jquery');
            $this->shortcode->addAssets('js', 'plugin://googlemaps-reloaded/js/googlemaps-reloaded.js');

            $hash = $this->shortcode->getId($sc);
            $infowindow = $sc->getContent();

            $output = $this->twig->processTemplate('partials/googlemaps-reloaded.html.twig', [
                'hash' => $hash,
                'width' => $sc->getParameter('width', '600px'),
                'height' => $sc->getParameter('height', '400px'),
                'lat' => $sc->getParameter('lat', 44.540),
                'lng' => $sc->getParameter('lng', -78.546),
                'zoom' => $sc->getParameter('zoom', 8),
                'scrollwheel' => $sc->getParameter('scrollwheel', true),
                'draggable' => $sc->getParameter('draggable', true),
                'pancontrol' => $sc->getParameter('pancontrol', true),
                'iconurl' => $sc->getParameter('iconurl', ''),
                'infowindow' => $infowindow,
            ]);

            return $output;
        });
    }
}
