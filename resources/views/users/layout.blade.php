<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Daftar Investore</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/reg/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/reg/css/style.css">
    <style>
        .form-check {
            margin-bottom: 20px;
        }
        input[type=checkbox]{
            width: 2em;
            margin: 0;
            padding: 0;
            font-size: 1em;
            display: block;
        }

        input[type="checkbox" i] {
            background-color: initial;
            cursor: default;
            appearance: auto;
            box-sizing: border-box;
            margin: 3px 3px 3px 4px;
            padding: initial;
            border: initial;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .alert {
            font-size: 12pt;
            text-align: center;
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
        }


    </style>
</head>
<body>


@yield('content')

<!-- JS -->
<script src="/reg/vendor/jquery/jquery.min.js"></script>
<script src="/reg/js/main.js"></script>
@yield('js')

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
