<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'CARDIOMOBILE',

    'title_prefix' => '',

    'title_postfix' => ',  La Solution N°1 Camerounaise dédié à votre santé CARDIOVASCULAIRE',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>CARDIO</b>MOBILE',

    'logo_mini' => '<b>C</b>M',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'admin',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [

        [
            'text' => 'Tableau de bord',
            'url'  => 'admin',
            'icon' => 'dashboard',
            'can' => 'is_admin',
        ],

        'PROFIL',
        [

            'text'    => 'Profil',
            'url'     => "admin",
            'icon'    => 'users',
        ],



        'PLATEFORME',
        [
            'text'    => 'Utilisateurs',
            'url'     => "admin/users",
            'icon'    => 'users',
            'can' => 'is_admin',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/users',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter un utilisateur',
                    'url'     => 'admin/users/create',
                    'icon_color' => 'yellow',
                ],

                [
                    'text'    => 'Roles',
                    'url'     => "admin/roles",
                    'icon'    => 'users',
                    'can' => 'is_admin',
                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'url'  => 'admin/roles',
                            'icon_color' => 'blue',
                        ],
                        [
                            'text'    => 'Ajouter un role',
                            'url'     => 'admin/roles/create',
                            'icon_color' => 'yellow',
                        ],
                    ],
                ],
            ],
        ],




        [
            'text'    => 'Prix',
            'url'     => "admin/prices",
            'icon'    => 'money',
            'can' => 'is_admin',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/prices',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter un prix',
                    'url'     => 'admin/prices/create',
                    'icon_color' => 'yellow',
                ],
            ],
        ],



        [
            'text'    => 'Localisation',
            'icon'    => 'hospital-o',
            'url'     => '#',
            'can' => 'is_admin',
            'submenu' => [
            [
            'text'    => 'Ville',
            'icon'    => 'hospital-o',
            'url'     => 'admin/ville',
            'can' => 'is_admin',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/ville',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter une nouvelle ville',
                    'url'     => 'admin/ville/create',
                    'icon_color' => 'yellow',
                ],
            ],
            ],





                [
                    'text'    => 'Arrondissement',
                    'icon'    => 'hospital-o',
                    'url'     => 'admin/ville',
                    'can' => 'is_admin',
                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'url'  => 'admin/arrondissement',
                            'icon_color' => 'blue',
                        ],
                        [
                            'text'    => 'Ajouter',
                            'url'     => 'admin/arrondissement/create',
                            'icon_color' => 'yellow',
                        ],
                    ],
                ],

                [
                    'text'    => 'Quartier',
                    'icon'    => 'hospital-o',
                    'url'     => 'admin/quartier',
                    'can' => 'is_admin',
                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'url'  => 'admin/quartier',
                            'icon_color' => 'blue',
                        ],
                        [
                            'text'    => 'Ajouter un nouveau quartier',
                            'url'     => 'admin/quartier/create',
                            'icon_color' => 'yellow',
                        ],
                    ],
                ],
            ],
        ],



        [
            'text'    => 'Medecin',
            'icon'    => 'user-md',
            'url'     => 'admin/medecin',
            'can' => 'is_admin',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/medecin',
                    'icon_color' => 'blue',
                    'can' => 'is_admin',
                ],
                [
                    'text'    => 'Ajouter un nouveau medecin',
                    'url'     => 'admin/medecin/create',
                    'icon_color' => 'blue',
                    'can' => 'is_admin',
                ],

                [
                    'text'    => 'Utilisateurs',
                    'url'     => 'admin/becomeuser/medecin',
                    'icon_color' => 'blue',

                    'submenu' => [

                        [
                            'text'    => 'Les Afficher',
                            'url'     => 'admin/becomeuser/medecin',
                            'icon_color' => 'blue',
                            'can' => 'is_admin',
                        ],

                        [
                            'text'    => 'Définir Comme Utilisateur',
                            'url'     => 'admin/becomeuser/medecin/create',
                            'icon_color' => 'blue',
                            'can' => 'is_admin',
                        ],
                    ],
                ],


                [
                    'text'    => 'Disponibilité',
                    'url'     => 'admin/medecin/available',
                    'icon_color' => 'blue',

                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'icon' => 'user',
                            'url'     => 'admin/medecin/available',
                            'can' => 'is_admin',
                        ],
                        [
                            'text' => 'Ajouter une disponibilité',
                            'icon' => 'user',
                            'url'     => 'admin/medecin/available/create',
                            'can' => 'is_admin'

                        ],
                    ],
                ],

                [
                    'text'    => 'Spécialité',
                    'url'     => 'admin/speciality',
                    'icon_color' => 'blue',
                    'can' => 'is_admin',
                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'icon' => 'user',
                            'url'     => 'admin/speciality',
                            'can' => 'is_admin',
                        ],
                        [
                            'text' => 'Ajouter une spécialité',
                            'icon' => 'user',
                            'url'     => 'admin/speciality/create',
                            'can' => 'is_admin'

                        ],
                    ],
                ],
            ],
        ],


        [
            'text'    => 'Medecin',
            'icon'    => 'user-md',
            'url'     => 'admin/medecin',
            'can' => 'is_gestionnaire',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/medecin',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter un nouveau medecin',
                    'url'     => 'admin/medecin/create',
                    'icon_color' => 'blue',
                ],

                [
                    'text'    => 'Utilisateurs',
                    'url'     => 'admin/becomeuser/medecin',
                    'icon_color' => 'blue',

                    'submenu' => [

                        [
                            'text'    => 'Les Afficher',
                            'url'     => 'admin/becomeuser/medecin',
                            'icon_color' => 'blue',
                        ],

                        [
                            'text'    => 'Définir Comme Utilisateur',
                            'url'     => 'admin/becomeuser/medecin/create',
                            'icon_color' => 'blue',
                        ],
                    ],
                ],


                [
                    'text'    => 'Disponibilité',
                    'url'     => 'admin/medecin/available',
                    'icon_color' => 'blue',

                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'icon' => 'user',
                            'url'     => 'admin/medecin/available',
                        ],
                        [
                            'text' => 'Ajouter une disponibilité',
                            'icon' => 'user',
                            'url'     => 'admin/medecin/available/create',
                        ],
                    ],
                ],
            ],
        ],



        [
            'text'    => 'Structures Hospitalières',
            'icon'    => 'plus-square',
            'url'     => 'admin/quartier',
            'can' => 'is_admin',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/hopital',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter une nouvelle structure ',
                    'url'     => 'admin/hopital/create',
                    'icon_color' => 'red',
                ],

                    [
                'text'    => 'Ambulance',
                'url'     => 'admin/ambulance',
                'icon'   => 'ambulance',
                'submenu' => [
                    [
                        'text' => 'Afficher',
                        'url'  => 'admin/ambulance',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text'    => 'Ajouter une ambulance',
                        'url'     => 'admin/ambulance/create',
                        'icon_color' => 'red',
                        ],
                    ]
                ],
            ]
],

        [
            'text'    => 'Structures Hospitalières',
            'icon'    => 'plus-square',
            'url'     => 'admin/quartier',
            'can' => 'is_gestionnaire',

            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/hopital',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter une nouvelle structure ',
                    'url'     => 'admin/hopital/create',
                    'icon_color' => 'red',
                ],

                [
                    'text'    => 'Ambulance',
                    'url'     => 'admin/ambulance',
                    'icon'   => 'ambulance',
                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'url'  => 'admin/ambulance',
                            'icon_color' => 'blue',
                        ],
                        [
                            'text'    => 'Ajouter une ambulance',
                            'url'     => 'admin/ambulance/create',
                            'icon_color' => 'red',
                        ],
                    ]
                ],
            ]
        ],


        [
            'text'    => 'Vehicules Personnels',
            'icon'    => 'automobile',
            'url'     => 'admin/vehicule',
            'can' => 'is_admin',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/vehicule',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter un nouveau véhicule',
                    'url'     => 'admin/vehicule/create',
                    'icon_color' => 'blue',
                ],
            ],
        ],

        [
            'text'    => 'Vehicules Personnels',
            'icon'    => 'automobile',
            'url'     => 'admin/vehicule',
            'can' => 'is_gestionnaire',
            'submenu' => [
                [
                    'text' => 'Afficher',
                    'url'  => 'admin/vehicule',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Ajouter un nouveau véhicule',
                    'url'     => 'admin/vehicule/create',
                    'icon_color' => 'blue',
                ],
            ],
        ],

        [
            'text'    => 'Services',
            'icon'    => 'plus-square',
            'url'     => '#',
            'can' => 'is_admin',
            'submenu' => [
                [
                    'text' => 'Ambulances Commandées',
                    'url'  => 'admin/itineraire',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Commander une Ambulance ',
                    'url'     => 'admin/itineraire/create',
                    'icon_color' => 'red',
                ],
                [
                    'text'    => 'Urgence Medecin',
                    'url'     => 'admin/urgences',
                    'icon'   => 'user-md',
                    'submenu' => [
                        [
                            'text' => 'Afficher',
                            'url'  => 'admin/urgences',
                            'icon_color' => 'blue',
                        ],
                    ]
                ],
            ]
        ],

        [
            'text'    => 'Services',
            'icon'    => 'plus-square',
            'url'     => '#',
            'can' => 'is_gestionnaire',
            'submenu' => [
                [
                    'text' => 'Medecins à domicile',
                    'url'  => 'admin/urgences',
                    'icon_color' => 'blue',
                ],
                [
                    'text'    => 'Medecins à la clinique ',
                    'url'     => 'admin/urgences',
                    'icon_color' => 'red',
                ],
                [
                            'text' => 'Afficher',
                            'url'  => 'admin/urgences',
                            'icon_color' => 'blue',
                ],

            ]
        ],

        [
            'text'    => 'Rendez-vous',
            'url'     => 'admin/urgences',
            'icon'   => 'calendar-times-o',
            'can' => 'is_medecin',
        ],


        [
            'text'    => 'Mes Disponibilités',
            'url'     => 'admin/medecin/available',
            'icon'   => 'clock-o',
            'icon_color' => 'blue',
            'can' => 'is_medecin',
        ],
],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
