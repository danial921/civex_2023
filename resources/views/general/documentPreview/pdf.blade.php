<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan PDF di Halaman Web</title>
    <style>
        body{
            height: calc(100vh - 16px);
        }
        iframe {
            margin: 0px;
            width: 100%;
            height: calc(100vh - 94px);
            @media screen and (max-width: 920px) {
                height: calc(100vh - 60px);
            }
            border: none;
        }

        .img{
            width: 100%;
        }

        .header {
            margin-bottom: 10px;
            padding: 10px 20px;
            @media screen and (max-width: 920px) {
                padding: 10px 20px 0px 20px;
            }
            text-align: left;


        }

        .logo {
            max-width: 350px;
            height: auto;
            @media screen and (max-width: 920px) {
                max-width: 200px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <img src="{{ asset('civex/img/documentLogo.svg') }}" alt="Logo Perusahaan" class="logo">
    </header>
    @php
    $fileExtension = pathinfo($url, PATHINFO_EXTENSION);
    @endphp
    @if (strtolower($fileExtension) === 'pdf')
        <iframe src="{{ $url }}"></iframe>
    @else
        <img class="img" src="{{ $url }}"/>
    @endif
</body>

</html>
