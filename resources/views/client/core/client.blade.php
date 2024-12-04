<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montagu+Slab:opsz,wght@16..144,100..700&display=swap" rel="stylesheet">
</head>
<body class="bg-red-100">
    <main>
        <div id="app">
            <header-component></header-component>  
            @yield('content')
        </div>
    </main>

    @vite('resources/js/app.js')

    <style scoped>
        .carousel__pagination-button::after {
            width: 18px !important;
            height: 18px !important;
            border-radius: 50% !important;
            background-color: #F6FEFB !important;
        }
        .carousel__pagination-button--active::after {
            width: 21px !important;
            height: 21px !important;
            border-radius: 50% !important;
            background-color: #F2F7DE !important;
        }
        .pagination__product .carousel__pagination-button::after {
            width: 10px !important;
            height: 10px !important;
            border-radius: 50% !important;
            background-color: #F6FEFB !important;
            border: 1px solid #419263 !important;
        }
        .pagination__product .carousel__pagination-button--active::after {
            width: 12px !important;
            height: 12px !important;
            border-radius: 50% !important;
            background-color: #2FB25E !important;
            border: 1px solid #419263 !important;
        }
  </style>
</body>
</html>