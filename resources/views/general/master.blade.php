<!DOCTYPE html>
<html lang="en">

<head>
    <!-- @extends('kit.header')
    @section('title', 'dashboard') -->
    @include('kit.header')
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <title>Login - Civex 2023</title>
    <style>
        body {
            background-color: #EDEDED !important;
        }
    </style>
</head>

<body class="mn-ht-100v d-flex flex-column general">
    @include('general.slicing.navbar')
    @include('general.slicing.sidebar')
    @include('general.slicing.fixednav')

    @yield('content')

    @include('kit.copyright')
    @include('kit.header')
    @include('kit.script')

    <script>
        $(function() {
            'use strict'

            $('[data-toggle="tooltip"]').tooltip()

            $('.df-example .btn-primary').tooltip({
                template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            })

            $('.df-example .btn-secondary').tooltip({
                template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            })

            $('.df-example .btn-success').tooltip({
                template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            })

            $('.df-example .btn-danger').tooltip({
                template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            })


        });
    </script>

</body>

</html>
