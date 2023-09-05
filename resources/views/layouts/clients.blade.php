<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset('clients/assets/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>SocialCircle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/icons.css') }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none !important;
        }

        .with-border-error {
            border: 1px solid #ff0000 !important;
        }
        #profileImage {
            font-family: Arial, Helvetica, sans-serif;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #2a64e2f5;
            font-size: 16px;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .uk-tooltip {
            display: none;
            position: absolute;
            z-index: 10000;
            box-sizing: boder-box;
            max-width: 250px;
            width: 100;
            padding: 6px 10px;
            background: #e82c2c !important;
            border-radius: 2px;
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            border-radius: 4px;
        }

        .fill-red-600 {
            fill: #1c64f2;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999999;
            display: none;
            justify-content: center;
            align-items: center;
        }


        .overlay.active {
            display: flex;
        }

        ion-icon {
            font-size: 22px;
        }

        ::-ms-reveal {
            display: none;
        }
    </style>
    @yield('customcss')
    @livewireStyles()
</head>

<body>


    <div id="wrapper">

        <!-- Header -->
        @include('clients.blocks.header')

        <!-- sidebar -->
        @include('clients.blocks.sidebar')

        <!-- Main Contents -->
        @yield('content')

    </div>

    @include('clients.blocks.right')

    <!-- For Night mode -->
    <script>
        // Feature test
        if ('localStorage' in window) {
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.classList.add('dark');
            }
        }

        (function(window, document, undefined) {
            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function(event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    changeLogo('logo-white.png');
                    return;
                } else {
                    localStorage.removeItem('gmtNightMode');
                    changeLogo('logo-dark.png');
                    return;
                }
            }, false);

            function changeLogo(logoFileName) {
                // Lấy phần tử hình ảnh logo
                var logoElement = document.querySelector('#logo img');

                // Thay đổi đường dẫn hình ảnh thành logoFileName
                logoElement.src = "{{ asset('clients/assets/images/') }}" + "/" + logoFileName;
            }

        })(window, document);
    </script>


    <!-- Javascript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('clients/assets/js/tippy.all.min.js') }}"></script>
    <script src="{{ asset('clients/assets/js/uikit.js') }}"></script>
    <script src="{{ asset('clients/assets/js/simplebar.js') }}"></script>
    <script src="{{ asset('clients/assets/js/custom.js?v=0000000000000000000000000001') }}"></script>
    <script src="{{ asset('clients/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/lib/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @yield('js')
    @livewireScripts()
</body>

</html>
