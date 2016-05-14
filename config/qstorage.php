<?php

return [

    'static_all_site' => [
        'images' => ['logo'],
        'stringfields' => ['logo_descr', 'phone', 'map_link', 'copy', 'tell_everyone']
    ],

    'static_about' => [
        'images' => ['head', 'director_face'],
        'stringfields' => ['question', 'director_name', 'director_prof', 'feature_title'],
        'textfields' => ['director_descr'],
        'groups'=> [
            'features' => [
                'images' => ['feature_pict'],
                'stringfields' => ['feature_name'],
                'textfields' => ['feature_descr']
            ]
        ]
    ],

    'static_good_atm' => [
        'title' => 'Добрая атмосфера',
        'groups'=> [
            'good_atm_gallery' => [
                'images' => ['atm_pict']
            ]
        ]
    ],

    'dom_upgrade' => [
        'title' => 'Развивающие программы',
        'groups'=> [
            'upgrade_programs' => [
                'images' => ['upgrade_program'],
                'stringfields' => ['name', 'program_name'],
                'textfields' => ['descr', 'preview_descr']
            ],
            'program_gallery' => [
                'owner' => 'upgrade_programs',
                'images' => ['program_gallery_pict']
            ],
            'program_educators' => [
                'owner' => 'upgrade_programs',
                'numb' => 'educator_id'
            ]
        ]
    ],

    'dom_target_upgrade' => [
        'groups' => [
            'program_type' =>[
                'images' => ['type_pict'],
                'stringfields' => ['type_name', 'type_descr']
            ],
            'upgrade_program' => [
                'owner' => 'program_type',
                'stringfields' => ['name', 'program_name', 'program_name_descr'],
                'textfields' => ['descr']
            ],
            'program_gall' => [
                'owner' => 'upgrade_program',
                'images' => ['program_gallery_pict']
            ],
            'target_program_educators' => [
                'owner' => 'upgrade_program',
                'numb' => 'educator_id'
            ]
        ],
    ],

    'dom_staff' => [
        'title' => 'Работники',
        'groups'=> [
            'staff_list' => [
                'images' => ['face'],
                'stringfields' => ['name', 'dolzhnost'],
                'textfields' => ['descr']
            ]
        ]
    ],

    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images'    => ['text_pict']
            ]
        ]
    ],



];
