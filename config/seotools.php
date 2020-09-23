<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => config('app.name'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Pure Aroma From Nature', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['best essential oils brand in Lagos Nigeria, affordable lemongrass essential oil in Lagos Nigeria, best essential oil diffuser in Lagos Nigeria, essential oils for headache, affordable essential oils in Nigeria, benefits of essentail oils, benefits of essential oil diffuser, affordable essential oils for aromatherapy, aromatherapy essential oil diffuser, natural hand sanitizer, affordable lemongrass hydrosol, affordable lemongrass liquid soap'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'index,follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => 'C9E40CE04FC37ADEA608C2742EBD138C',
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => '8dbcb0f4ac580acd',
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Pure Aroma From Nature', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'Website',
            'site_name'   => config('app.name'),
            'images'      => [config('app.url').'/images/nardus.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Pure Aroma From Nature', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [config('app.url').'/images/nardus.png'],
        ],
    ],
];
