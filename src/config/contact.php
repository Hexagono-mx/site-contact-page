<?php
return [
    'send-mail-to'      => 'example@mail.com',
    'send-cc'           => [],
    'send-bcc'          => [],
    'mail-subject'      => 'Contacto desde sitio. '.env('APP_NAME'),
    'logo-url'          => 'https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png',
    'logo-alt'          => env('APP_NAME')." logo",
    'map-url'           => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d193485.0770144881!2d-100.25390113255891!3d25.697268242463345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1599747439494!5m2!1ses!2smx',
    'map-height'        => 450,

    'form-layout'       => 'extend',        // Options: extend | compact
    'use-fontawsome'    => true,            // Options: true | false
    'display-map'       => 'fluid',     // Options: container | fluid
    'display-content'   => 'container',     // Options: container | fluid



    /// Utilice [null] para desactivar las siguientes secciones

    'h1'        => 'Contáctanos',
    'h2'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
    'intro'     => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'direccion' => [
        'Nombre Calle. No.999. Colonia Name',
        'Monterrey, Nuevo León'
    ],
    'telefonos' => ['81 1111 1111', '81 2222 2222'],
    'whatsapp'  => ['81 9999 9999'],
    'horarios'  => [
        'Lunes a Viernes de 8:00am a 5:00pm',
        'Sabados de 9:00am a 12:00pm',
        'Domingos cerrado'
    ],
    'redes'     => [
        ['Facebook',    'http://facebook.com',  'fa-facebook'],
        ['Twitter',     'http://twitter.com',   'fa-twitter'],
        ['Instagram',   'http://instagram.com', 'fa-instagram'],
        ['YouTube',     'http://youtube.com',   'fa-youtube']
    ]
];
