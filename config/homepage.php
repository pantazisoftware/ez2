<?php
// Contstante pentru homepage


return [
    'hero' => [
        1 => [
            'id' => 1,
            'title' => "Financial Advisor Consultant",
            'image' => '/img/hero/hero1.avif',
            'color' => 'primary',
            'href' => '#first',
        ],
        2 => [
            'id' => 2,
            'title' => "To Actions, Go Ahead",
            'image' => '/img/hero/hero2.avif',
            'color' => 'accent',
            'href' => '#second',
        ],
        3 => [
            'id' => 3,
            'title' => "Great Support 24/7",
            'image' => '/img/hero/hero3.jpg',
            'color' => 'primary',
            'href' => '#third',
        ],
        4 => [
            'id' => 4,
            'title' => "Make Great Moves",
            'image' => '/img/hero/hero4.jpg',
            'color' => 'red-900',
            'href' => '#fourth',
        ],

    ],

    'industries' => [
        'title' => 'Industry',
        'short' => 'Lorem ipsum dolor sit amet, consectetur adipiscing. lorem ipsum dolor sit amet e a ante et justo vit.',
        'data' => [
            1 => [
                'icon' => htmlspecialchars('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
</svg>
'),
                'title' => 'Industrial Manufacturing',
                'content' => 'lorem ipsum dolor sit amet, consectetur adip',
            ],
            2 => [
                'icon' => 'fa-line-chart',
                'title' => 'Growing',
                'content' => 'lorem ipsum dolor sit amet, consectetur adip',
            ],
            3 => [
                'icon' => 'fa-bolt',
                'title' => 'Instant',
                'content' => 'lorem ipsum dolor sit amet, consectetur adip',
            ],
            4 => [
                'icon' => 'fa-road',
                'title' => 'Always Ready',
                'content' => 'lorem ipsum dolor sit amet, consectetur adip',
            ],

        ]
    ],

    'services' => [
        'title' => 'Business Services',
        'short' => 'Lorem ipsum dolor sit amet, consectetur adipiscing. lorem ipsum dolor sit amet e a ante et justo vit.',
        'types' => [
            'consulting' => [
                'id' => 0,
                'title' => 'Consulting',
                'data' => [
                    1 => [
                        'image' => '/img/services/service1.avif',
                        'title' => 'Business Unit Strategy',
                        'content' => '1The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ],
                    2 => [
                        'image' => '/img/services/service2.avif',
                        'title' => 'Technical Details',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ],
                    3 => [
                        'image' => '/img/services/service3.avif',
                        'title' => 'Finance',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ]
                ],
            ],
            'financial' => [
                'id' => 1,
                'title' => 'Financial',
                'data' => [
                    1 => [
                        'image' => '/img/services/service4.avif',
                        'title' => 'Management',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ],
                    2 => [
                        'image' => '/img/services/service5.avif',
                        'title' => 'Logic',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ],
                    3 => [
                        'image' => '/img/services/service6.avif',
                        'title' => 'Advisory',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ]
                ],
            ],
            'other' => [
                'id' => 2,
                'title' => 'Other Solutions',
                'data' => [
                    1 => [
                        'image' => '/img/services/service7.avif',
                        'title' => 'Unity',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ],
                    2 => [
                        'image' => '/img/services/service8.avif',
                        'title' => 'Learn',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ],
                    3 => [
                        'image' => '/img/services/service9.avif',
                        'title' => 'Internet',
                        'content' => 'The effort vastly improved the company’s planning and execution functions, they knew that in order to succeed in this era of technology their accounting systems needed.',
                        'href' => '#',
                    ]
                ],
            ],

        ]

    ]


];
