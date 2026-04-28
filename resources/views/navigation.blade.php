<div id="kitchen-tailor-navigation" class="container-fluid px-lg-0 px-5">
    <div class="row custom-container kitchen-tailor-navigation-container">
        <div class="col-12">
            <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                <button id="close-nav-btn" class="navigation-button nav-close">
                    <i class="fa-solid fa-xmark font-kitchen-tailor-icon"></i>
                </button>
            </div>
            <div class="col-12 d-flex flex-column align-items-center align-items-lg-start" style="gap: 20px; padding-bottom:25px;">
                <a href="{{ route('our-story-page') }}" class="text-decoration-none font-kitchen-tailor">
                    <h3 class="gothic-font kitchen-tailor-font-navigation font-kitchen-tailor active">Our Story</h3>
                </a>
                @php
                    $nav_dropdown = [
                        'Collaborations' => [
                            [
                                'title' => 'Gerobok Cendayam',
                                'link' => route('collaboration-gerobok-cendayam-page'),
                            ]
                        ],
                        'Project Profile' => [
                            [
                                'title' => 'Kimpton Naluria Hotel',
                                'link' => route('collaboration-kimpton-naluria-page'),
                            ]
                        ],
                        'Services' => [
                            [
                                'title' => 'Kitchen',
                                'link' => '#',
                            ],
                            [
                                'title' => 'Bathroom',
                                'link' => '#',
                            ],
                            [
                                'title' => 'Wardrobe',
                                'link' => '#',
                            ],
                        ],
                    ]
                @endphp
                @foreach ($nav_dropdown as $group => $contents)
                    <div class="dropdown">
                        <button class="d-flex align-items-center justify-content-center gap-2 p-0 font-kitchen-tailor" style="background: none; border: none;">
                            <h3 class="gothic-font kitchen-tailor-font-navigation">{{ $group }}</h3>
                            <i class="fa-solid fa-angle-down font-kitchen-tailor-icon" style="font-size: 20px;"></i>
                        </button>
                        <div class="dropdown-content px-4 pt-0 pt-lg-2">
                            <div class="d-flex flex-column align-items-center align-items-lg-start gap-2">
                                @foreach ($contents as $content)
                                    <a href="{{ $content['link'] }}" class="text-decoration-none font-kitchen-tailor">
                                        <h3 class="gothic-font kitchen-tailor-font-navigation active" style="font-size: 20px;">{{ $content['title'] }}</h3>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="#" class="text-decoration-none font-kitchen-tailor">
                    <h3 class="gothic-font kitchen-tailor-font-navigation font-kitchen-tailor active">Request for Appointment</h3>
                </a>
                <h3 class="gothic-font kitchen-tailor-font-navigation font-kitchen-tailor-grey">Info</h3>
                <h3 class="gothic-font kitchen-tailor-font-navigation font-kitchen-tailor-grey">Contact</h3>
            </div>
            <div class="col-12 d-flex gap-4 justify-content-center justify-content-lg-start">
                <a href="#">
                    <i class="fa-brands fa-facebook-f font-kitchen-tailor-icon footer-clickable"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram font-kitchen-tailor-icon footer-clickable"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-tiktok font-kitchen-tailor-icon footer-clickable"></i>
                </a>
            </div>
        </div>
    </div>
</div>