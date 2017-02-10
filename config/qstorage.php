<?php

return [

    'static_all_site' => [
        'images' => ['logo'],
        'stringfields' => ['logo_descr', 'landline_phone', 'phone', 'map_link', 'copy', 'tell_everyone']
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

    'static_contacts' => [
        'title' => 'Контактная информация',
        'textfields' => ['contact_descr'],
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
                'numbs' => ['educator_id']
            ],
            'program_schedule' => [
                'owner' => 'upgrade_programs',
                'stringfields' => ['day', 'hour'],
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
                'numbs' => ['educator_id']
            ],
            'target_program_schedule' => [
                'owner' => 'upgrade_program',
                'stringfields' => ['day', 'hour'],
            ]
        ],
    ],

    'dom_staff' => [
        'title' => 'Педагоги Bambini',
        'groups'=> [
            'staff_list' => [
                'images' => ['face', 'cert_preview'],
                'stringfields' => ['name', 'dolzhnost'],
                'textfields' => ['preview_descr', 'descr']
            ],
            'staff_certs' => [
                'owner' => 'staff_list',
                'images' => ['cert'],
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

// =====================================================================
    'fidback' => [
        'stringfields' => ['mail_rec','mail_username','site_name'],
        'groups' => [
            'lesson' =>[
                'stringfields' => ['fio','email','phone','comment'],
                'bools'        => ['mailed']
            ],
            'ask' =>[
                'stringfields' => ['fio','email'],
                'textfields'   => ['question'],
                'bools'        => ['mailed']
            ]
        ]
    ]



];
