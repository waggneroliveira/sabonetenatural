<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-red-100">
    
    <div id="app">
        <header-component></header-component>

        <banner-carousel-component></banner-carousel-component>
        
        @yield('content')
    </div>

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
  </style>
</body>
</html>