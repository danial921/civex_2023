<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link href="../../civex/scss/style.css" rel="stylesheet">
    <style>
        .hm-gradient {
            background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
        }

        .navbar .dropdown-menu a:hover {
            color: #616161 !important;
        }

        .darken-grey-text {
            color: #2E2E2E;
        }
    </style>
</head>

<body class="hm-gradient landing-page">
    @include('landingpage.slicing.navbar')
    <main>

        <!--MDB Navbars-->

        @include('landingpage.slicing.hero-home')
        {{-- </div> --}}


        <!--MDB Navbars-->

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
    <script>
        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        }
    </script>
</body>

</html>
