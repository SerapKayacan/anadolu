<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults' => [
            'title' => "Anadolu Tadilat", // set false to total remove
            'titleBefore' => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description' => 'Tadilat Boya Epoxy Hizmeti — Hemen Arayın.', // set false to total remove
            'separator' => ' - ',
            'keywords' => ['tadilat', 'boya', 'solventli epoksi reçine', 'solventsiz epoksi', 'su bazlı epoksi', 'solventli epoksi boya', 'solventsiz epoksi boya',
                'su bazlı boya','yağlı boya','toz boya','saten boya','mat boya','dış cephe mantolama','iç cephe mantolama','su yalıtım sistemleri',
                'ısı yalıtım sistemleri','ısı','epoksi','mantolama',
            ],
            'canonical' => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots' => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
            'norton' => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title' => 'Anadolu Tadilat', // set false to total remove
            'description' => 'Tadilat Boya Epoxy Hizmeti — Hemen Arayın.', // set false to total remove
            'url' => null, // Set null for using Url::current(), set false to total remove
            'type' => false,
            'site_name' => 'Anadolu Tadilat',
            'images' => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card' => 'summary',
//           'site'        => '@ÖzelSultanEvdeSağlıkHizmetleri',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title' => 'Anadolu Tadilat', // set false to total remove
            'description' => 'Tadilat Boya Epoxy Hizmeti — Hemen Arayın.', // set false to total remove
            'url' => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type' => 'WebPage',
            'images' => [],
        ],
    ],
];
