<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Enzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Enzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets') }}/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon/favicon.png" type="image/x-icon">
    <title>Kendaraan</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('assets') }}/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/responsive.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <div class="p-0 container-fluid">
        {{ $slot }}
    </div>

    <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('assets') }}/js/icons/feather-icon/feather-icon.js"></script>
    <script src="{{ asset('assets') }}/js/config.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('assets') }}/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{ asset('assets') }}/js/notify/index.js"></script>
    <script>
        @if (session()->has('success'))
            $.notify({
                message: '{{ session()->get('success') }}'
            }, {
                type: 'success',
                allow_dismiss: false,
                newest_on_top: false,
                mouse_over: false,
                showProgressbar: false,
                spacing: 10,
                timer: 2000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                },
                offset: {
                    x: 30,
                    y: 30
                },
                delay: 1000,
                z_index: 10000,
                animate: {
                    enter: 'animated bounce',
                    exit: 'animated bounce'
                }
            });
        @endif

        @if (session()->has('danger'))
            $.notify({
                message: '{{ session()->get('danger') }}'
            }, {
                type: 'danger',
                allow_dismiss: false,
                newest_on_top: false,
                mouse_over: false,
                showProgressbar: false,
                spacing: 10,
                timer: 2000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                },
                offset: {
                    x: 30,
                    y: 30
                },
                delay: 1000,
                z_index: 10000,
                animate: {
                    enter: 'animated bounce',
                    exit: 'animated bounce'
                }
            });
        @endif
    </script>
</body>

</html>
