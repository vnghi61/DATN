<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Socialite Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


</head>
<body>


@include('Blocks.Clients.header')

        <!-- sidebar -->
@include('Blocks.Clients.left')

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">
                <!--  Feeds  -->
                <div class="lg:flex lg:space-x-10">
                    <div class="lg:w-3/4 lg:px-20 space-y-7">
                        @yield('noidung')
                    </div>
                    <div class="lg:w-72 w-full">

                        <a href="#birthdays" uk-toggle>
                            <div class="bg-white mb-5 px-4 py-3 rounded-md shadow">
                                <h3 class="text-line-through font-semibold mb-1"> Birthdays </h3>
                                <div class="-mx-2 duration-300 flex hover:bg-gray-50 px-2 py-2 rounded-md">
                                    <img src="assets/images/icons/gift-icon.png" class="w-9 h-9 mr-3" alt="">
                                    <p class="line-clamp-2 leading-6"> <strong> Jessica Erica </strong> and <strong> two others </strong>
                                        have a birthdays to day .
                                    </p>
                                </div>
                            </div>
                        </a>

                        <h3 class="text-xl font-semibold"> Contacts </h3>

                        <div class="" uk-sticky="offset:80">

                            <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                                <ul uk-switcher="connect: #group-details; animation: uk-animation-fade">
                                    <li class="uk-active"><a class="active" href="#0">  Friends  <span> 310 </span> </a></li>
                                    <li><a href="#0">Groups</a></li>
                                </ul>
                            </nav>

                            <div class="contact-list">

                                <a href="#">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                        <span class="user_status status_online"></span>
                                    </div>
                                    <div class="contact-username"> Dennis Han</div>
                                </a>
                                <div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small">
                                    <div class="contact-list-box">
                                        <div class="contact-avatar">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                            <span class="user_status status_online"></span>
                                        </div>
                                        <div class="contact-username">   Dennis Han</div>
                                        <p>
                                            <ion-icon name="people" class="text-lg mr-1"></ion-icon> Become friends with
                                            <strong> Stella Johnson </strong> and <strong> 14 Others</strong>
                                        </p>
                                        <div class="contact-list-box-btns">
                                            <button type="button" class="button primary flex-1 block mr-2">
                                                <i class="uil-envelope mr-1"></i> Send message</button>
                                            <button type="button"  href="#" class="button secondary button-icon mr-2">
                                                <i class="uil-list-ul"> </i> </button>
                                            <button type="button" a href="#" class="button secondary button-icon">
                                                <i class="uil-ellipsis-h"> </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <a href="#">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        <span class="user_status"></span>
                                    </div>
                                    <div class="contact-username"> Erica Jones</div>
                                </a>
                                <div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small">
                                    <div class="contact-list-box">
                                        <div class="contact-avatar">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                            <span class="user_status"></span>
                                        </div>
                                        <div class="contact-username">  Erica Jones </div>
                                        <p>
                                            <ion-icon name="people" class="text-lg mr-1"></ion-icon> Become friends with
                                            <strong> Stella Johnson </strong> and <strong> 14 Others</strong>
                                        </p>
                                        <div class="contact-list-box-btns">
                                            <button type="button" class="button primary flex-1 block mr-2">
                                                <i class="uil-envelope mr-1"></i> Send message</button>
                                            <button type="button"  href="#" class="button secondary button-icon mr-2">
                                                <i class="uil-list-ul"> </i> </button>
                                            <button type="button" a href="#" class="button secondary button-icon">
                                                <i class="uil-ellipsis-h"> </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <a href="timeline.html">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                        <span class="user_status status_online"></span>
                                    </div>
                                    <div class="contact-username">Stella Johnson</div>
                                </a>
                                <a href="timeline.html">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                    </div>
                                    <div class="contact-username"> Alex Dolgove</div>
                                </a>

                                <a href="timeline.html">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                        <span class="user_status status_online"></span>
                                    </div>
                                    <div class="contact-username"> Dennis Han</div>
                                </a>
                                <a href="timeline.html">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        <span class="user_status"></span>
                                    </div>
                                    <div class="contact-username"> Erica Jones</div>
                                </a>
                                <a href="timeline.html">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-7.jpg" alt="">
                                    </div>
                                    <div class="contact-username">Stella Johnson</div>
                                </a>
                                <a href="timeline.html">
                                    <div class="contact-avatar">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="contact-username"> Alex Dolgove</div>
                                </a>


                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>



    <!-- birthdays modal -->
@include('Blocks.Clients.right')

    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);

        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>

    <!-- Javascript
    ================================================== -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>
    <script src="{{asset('assets/js/uikit.js')}}"></script>
    <script src="{{ asset('assets/js/simplebar.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>
