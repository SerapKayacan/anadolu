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
            'title'        => "Usta Renovasyon", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Evde Bakım Hizmeti — Medical Center İle Tüm Sağlık ve Bakım Hizmetlerini Evinizin Konforunda Alın. Hemen Arayın. Lisanslı, Sertifikalı ve Uzman Sağlık Çalışanlarımız İle İstanbul\'un Her Yerindeyiz.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                'doktor randevu', 'telemedicine', 'online doktor', 'tıp merkezi', 'tip merkezi',
                'hasta bakımı', 'hasta bakimi', 'teşhis ve tedavi', 'teshis ve tedavi',
                'tıbbi danışmanlık', 'tip danismanlik', 'sağlık platformu',
                'saglik platformu', 'sağlık ve turizm', 'saglik ve turizm',
                'sağlık hizmetleri', 'uzaktan doktor randevu', 'uzaktan doctor randevu',
                'tele sağlık', 'tele saglik', 'hasta tedavisi','sağlık danışmanlığı',
                'saglik danismanligi', 'sağlık çözümleri', 'saglik cozumleri',
                'modern sağlık', 'modern saglik', 'sağlık', 'saglik', 'evde saglik'
            ],
            'canonical'    => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Özel Sultan Evde Sağlık Hizmetleri', // set false to total remove
            'description' => 'Evde Bakım Hizmeti — Medical Center İle Tüm Sağlık ve Bakım Hizmetlerini Evinizin Konforunda Alın. Hemen Arayın. Lisanslı, Sertifikalı ve Uzman Sağlık Çalışanlarımız İle İstanbul\'un Her Yerindeyiz.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'Özel Sultan Evde Sağlık Hizmetleri',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@ÖzelSultanEvdeSağlıkHizmetleri',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Özel Sultan Evde Sağlık Hizmetleri', // set false to total remove
            'description' => 'Evde Bakım Hizmeti — Medical Center İle Tüm Sağlık ve Bakım Hizmetlerini Evinizin Konforunda Alın. Hemen Arayın. Lisanslı, Sertifikalı ve Uzman Sağlık Çalışanlarımız İle İstanbul\'un Her Yerindeyiz.', // set false to total remove
            'url'         => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
