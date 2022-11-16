<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stickfigures</title>
    <!-- CSS only -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Baloo+2|BrittanySignature|Multicolore:wght@400;500;600;800&amp;display=swap"
        rel="stylesheet"> --}}

    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightbox.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/megamenu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dreaming-attribute.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @stack('css')
</head>

<body>
    @if (request()->route()?->uri != 'customizer')
        <div class="w-100 row text-white d-flex justify-content-center m-0"
            style="background-color: #242424 !important;">
            <p class="my-3">Use Code: AMPAY15 for 15% Off Orders Over $99 When You Use Amazon Pay.</p>
        </div>
    @endif
    @if (request()->route()?->uri != 'customizer')
        @include('layouts.navbar')
    @else
        @include('layouts.customizer_nav')
    @endif

    @yield('content')
    @if (request()->route()?->uri != 'customizer')
        @include('layouts.footer')
    @endif

    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/chosen.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/countdown.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/threesixty.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/mobilemenu.js') }}"></script> --}}
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('assets/js/resource.js') }}"></script>

    @stack('js')
</body>

</html>
