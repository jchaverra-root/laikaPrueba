<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laika-App') }} - Universo Peludo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--Bootstrap Js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none;
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: Causten Round Semi Bold Oblique;
        }
    </style>
</head>

<body class="">
    <a class="btn-wsp"
        href="https://wa.me/+573208348251?text=Hola%20me%20comunico%20desde%20laika.com.co%20Requiero%20el%20servicio%20de:%20"
        target="_blank"><i class="fab fa-whatsapp"></i></a>
    <div id="divEncabezado1" class="fixed-top pt-2">
        <div class="container d-xl-flex d-none pt-xl-1 px-0">
            <div class="container-fluid px-0 justify-content-between font14">
                <span class=""><i class="fa fa-shield" aria-hidden="true" style="fon"></i> Compras Seguras
                    en Linea</span>
                <span class=""><i class="fa fa-money" aria-hidden="true" style="fon"></i> Pago contra
                    entrega</span>
                <span class=""><i class="fa fa-truck" aria-hidden="true" style="fon"></i> Entregas el
                    mismo día</span>
            </div>
            <div class="container d-flex justify-content-end font14">
                <div>
                    <span class="">Llamanos +573009108496</span>
                    <span class="" style="padding-left: 5px">Escribenos
                        <a href="https://www.youtube.com/channel/UC_Syn3ptKsOheb1Yz2MzGgA"><img
                                src="{{ asset('sistema/img/youTube.png') }}" class="p-0"
                                alt="laika Youtube" style="max-height: 25px; max-width: 25px"></a>
                        <a href="https://www.facebook.com/Laikamascotascolombia/"><img
                                src="{{ asset('sistema/img/facebook.png') }}" class="p-0"
                                alt="laika Youtube" style="max-height: 25px; max-width: 25px"></a>
                        <a href="https://www.instagram.com/accounts/login/?next=/laikamascotas/"><img
                                src="{{ asset('sistema/img/instagram.png') }}" class="p-0"
                                alt="laika Youtube" style="max-height: 25px; max-width: 25px"></a>
                    </span>
                </div>
            </div>
        </div>
        <div class="container-fluid container-lg px-0">
            <nav class="navbar navbar-dark navbar-expand-xl p-0 py-3">
                <div class="container-fluid px-0">
                    <a class="navbar-brand p-0" style="cursor: pointer;">
                        <img src="{{ asset('sistema/img/navBrand.png') }}" class="p-0" alt="laika"
                            style="max-width: 50px; max-height: 50px;">
                    </a>
                    <button class="btn btn-outline-light d-xl-none" type="submit"
                        style="margin-right: 10px">Carrito</button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarBuscador"
                        aria-controls="navBarBuscador" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-lg-between" id="navBarBuscador">
                        <form class="d-flex col-xl-8 p-0 m-0 my-xl-0" role="search">
                            <input 
                            id="" 
                            class="form-control buscador" 
                            type="search"
                            placeholder="¿Que necesita tu mascota?" 
                            aria-label="Search">
                            <button class="btn p-0 rotate-end" type="submit" style="margin-right: 10pxb;"><i
                                    class="fa fa-search p-1" aria-hidden="true"></i>
                            </button>
                        </form>
                        <nav class="navbar-nav d-flex justify-content-between col-xl-4">
                            <li class="nav-item align-content-center my-xl-0 px-2">
                                <!-- Button trigger modal -->
                                <button class="btn font14 px-1" type="button" data-toggle="modal"
                                    data-target="#exampleModal" style="color: white;font-weight: bolder;">Agregar
                                    Direccion
                                </button><i class="fa fa-caret-down" aria-hidden="true"></i>
                            </li>
                            <li class="nav-item dropdown align-content-center my-xl-0 px-2 rounded-2">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle px-1" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-expanded="false"
                                        style="color: white;background-color: #472F62;font-weight: bolder;font-size: 14px">
                                        Crear Cuenta
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <div class="p-2">
                                            <div class="d-flex flex-column justify-content-center">
                                                <button class="btn d-flex justify-content-center" href="#" style="color: white;background-color: #472F62;font-weight: bolder;font-size: 12px">Iniciar sesión</button>
                                                <div class="font-weight: bolder" style="font-size: 12px">¿Eres nuevo cliente?</div>
                                                <button id="btnBlanco" class="btn d-flex justify-content-center" href="#">Crear Cuenta</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item align-content-center mr-0 my-xl-0 px-2">
                                <button class="btn d-none d-xl-flex" type="submit" style="border-radius: 50px;width: 40px;
                                    height: 40px;
                                    line-height: 40px;
                                    background-color: #9D7DC2;
                                    color: white;
                                    font-weight: bolder;"><i class="fa fa-shopping-bag m-auto"
                                        aria-hidden="true"></i></button>
                            </li>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-light p-0">
            <div class="container-lg container-fluid p-0">
                <nav class="navbar navbar-light navbar-expand-xl p-0 font14 ">
                    <div class="container-fluid p-0 ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link m-auto p-2 px-xl-2 py-xl-0 dropdown-toggle text-center" href="#"
                                        style="color: #603E85; font-weight: bolder" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-expanded="false"><img
                                            src="{{ asset('sistema/img/perro.png') }}" alt="laika"
                                            style="max-width: 30px; max-height: 30px;">Perros</a>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="">
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/dog/alimento/todos/todos/todo-para-mascota/1">Alimento</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/dog/snacks/todos/todos/todo-para-mascota/1">Snacks</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/dog/farmacia/todos/todos/todo-para-mascota/1">FarmaPet</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/dog/cuidado-e-higiene/todos/todos/todo-para-mascota/1">Cuidado e Higiene</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/dog/juguetes/todos/todos/todo-para-mascota/1">Juguetes</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/dog/accesorios/todos/todos/todo-para-mascota/1">Accesorios</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/dog/para-amos/todos/todos/todo-para-mascota/1">PetLovers</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link m-auto p-2 px-xl-2 py-xl-0 dropdown-toggle text-center" href="#"
                                        style="color: #603E85; font-weight: bolder" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-expanded="false"><img
                                            src="{{ asset('sistema/img/gato.png') }}" alt="laika"
                                            style="max-width: 30px; max-height: 30px;">Gatos</a>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="">
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1">Alimento</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/cat/arenas/todos/todos/todo-para-mascota/1">Snacks</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/cat/farmacia/todos/todos/todo-para-mascota/1">FarmaPet</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/cat/cuidado-e-higiene/todos/todos/todo-para-mascota/1">Cuidado e Higiene</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/cat/juguetes/todos/todos/todo-para-mascota/1">Juguetes</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/cat/accesorios/todos/todos/todo-para-mascota/1">Accesorios</a>
                                        <a class="dropdown-item" href="https://laika.com.co/category/bog/cat/para-amos/todos/todos/todo-para-mascota/1">PetLovers</a>
                                    </div>
                                </li>
                                <li class="nav-item d-flex align-items-stretch">
                                    <a class="nav-link m-auto p-2 px-xl-2 py-xl-0" href="#"
                                        style="color: #603E85; font-weight: bolder;">Servicios</a>
                                </li>
                                <li class="nav-item d-flex align-items-stretch">
                                    <a class="nav-link m-auto p-2 px-xl-2 py-xl-0" href="#"
                                        style="color: #603E85; font-weight: bolder;">Promociones</a>
                                </li>
                                <li class="nav-item d-flex align-items-stretch">
                                    <a class="nav-link m-auto p-2 px-xl-2 py-xl-0" href="#"
                                        style="color: #603E85; font-weight: bolder;">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://laika.com.co/laika_vetcare/vetcare/bog/1" style="max-height: 30px"><img
                                src="{{ asset('sistema/img/vetCare.png') }}" class="p-0" alt="laika"
                                style="max-width: 140px; max-height: 30px">
                        </a>
                        <button class="" type="submit" style="max-height: 30px"><img
                                src="{{ asset('sistema/img/member.png') }}" class="p-0" alt="laika"
                                style="max-width: 140px; max-height: 30px"></button>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div id="divSlider" class="container-fluid">
        <img src="{{ asset('sistema/img/vetCareBanner.png') }}" class="p-0 w-100" alt="laika Youtube"
            style="cursor: pointer;">
    </div>

    <div class="container p-0 my-4">
        <h1 style="font-size: 20px; font-weight: bolder;">Categorias</h1>
        <div class="container d-flex flex-wrap justify-content-around py-5" style="border-bottom: 2px solid grey">
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/alimento.png') }}" class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube" style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Alimento
            </h3>
            </a>
            </div>
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/arenas.png') }}" class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube" style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Arenas
            </h3>
            </a>
            </div>
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/snack.png') }}" class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube" style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Snack
            </h3>
            </a>
            </div>
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/farmapet.png') }}" class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube" style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Farmapet
            </h3>
            </a>
            </div>
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/cuidadoHigiene.png') }}"
            class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
            style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Cuidado e Higiene</h3>
            </a>
            </div>
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/juguetes.png') }}" class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube" style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Juguetes
            </h3>
            </a>
            </div>
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/accesorios.png') }}"
            class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
            style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; "> Accesorios</h3>
            </a>
            </div>
            <div style="" class="d-flex justify-content-center "><a id="aCategoria" href="https://laika.com.co/category/bog/cat/alimento/todos/todos/todo-para-mascota/1" class="d-flex flex-column"><img src="{{ asset('sistema/img/petLovers.png') }}" class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube" style="max-width: 85px; max-height: 85px;cursor: pointer;">
            <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Para PetLovers</h3>
            </a>
            </div>
        </div>
    </div>

    <div class="container p-0 my-4" style="border-bottom: 2px solid grey">
        <h1 class="pb-4" style="font-size: 20px; font-weight: bolder;">Encuentra todo para tus peludos en
            un solo lugar</h1>
        <div class="container col-lg-12 text-center">
            <div class="row d-flex justify-content-center" style="word-wrap: break-word;">
                <div class="col-lg-3 mb-3">
                    <img src="{{ asset('sistema/img/entregas.png') }}"
                        class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
                        style="max-width: 85px; max-height: 85px;">
                    <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Entregas el mismo día
                    </h3>
                    <h3 class="text-center" style="font-size: 16px">Entregamos todo lo que necesitas, cuando lo
                        necesitas</h3>
                </div>
                <div class="col-lg-3 mb-3">
                    <img src="{{ asset('sistema/img/pagos.png') }}" class="p-0 m-auto d-flex justify-content-center"
                        alt="laika Youtube" style="max-width: 85px; max-height: 85px;">
                    <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Pago online o contra
                        entrega</h3>
                    <h3 class="text-center" style="font-size: 16px;">Escoge tu método de pago.¡No te preocupes!
                        contamos con pasarelas de pagos certificadas y seguras</h3>
                </div>
                <div class="col-lg-3 mb-3">
                    <img src="{{ asset('sistema/img/todo.png') }}" class="p-0 m-auto d-flex justify-content-center"
                        alt="laika Youtube" style="max-width: 85px; max-height: 85px;">
                    <h3 class="text-center" style="font-size: 16px; font-weight: bolder; ">Todo lo que necesitas
                    </h3>
                    <h3 class="text-center" style="font-size: 16px;">Contamos con más de 4.000 productos y
                        servicios. Encuentra todo lo que necesitas para tu peludo</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-0 pb-4 my-4" style="border-bottom: 2px solid grey">
        <h1 class="pb-4" style="font-size: 20px; font-weight: bolder;">¡Más de 100 marcas disponibles!
        </h1>
        <div class="container d-flex flex-wrap justify-content-center" style="padding: 0px 100px">
            <div class="row row-cols-2 row-cols-md-4 g-0">
                <div class="card col borderBoxMarcas">
                    <img src="{{ asset('sistema/img/guaumor.png') }}"
                        class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
                        style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
                <div class="card col borderBoxMarcas">
                    <img src=" {{ asset('sistema/img/max.png') }}" class="p-0 m-auto d-flex justify-content-center"
                        alt="laika Youtube" style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
                <div class="card col borderBoxMarcas">
                    <img src=" {{ asset('sistema/img/hills.png') }}"
                        class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
                        style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
                <div class="card col borderBoxMarcas">
                    <img src=" {{ asset('sistema/img/one.png') }}" class="p-0 m-auto d-flex justify-content-center"
                        alt="laika Youtube" style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
                <div class="card col borderBoxMarcas">
                    <img src=" {{ asset('sistema/img/equilibrio.png') }}"
                        class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
                        style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
                <div class="card col borderBoxMarcas">
                    <img src=" {{ asset('sistema/img/salvaje.png') }}"
                        class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
                        style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
                <div class="card col borderBoxMarcas">
                    <img src=" {{ asset('sistema/img/wb.png') }}" class="p-0 m-auto d-flex justify-content-center"
                        alt="laika Youtube" style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
                <div class="card col borderBoxMarcas">
                    <img src=" {{ asset('sistema/img/eukanuba.png') }}"
                        class="p-0 m-auto d-flex justify-content-center" alt="laika Youtube"
                        style="max-width: 110px; max-height: 220px;cursor: pointer;">
                </div>
            </div>
        </div>
    </div>
    {{-- @@@@@@@@@@@@@ CARD PRODUCTO @@@@@@@@@@@@@ --}}
    <div class="container p-0 pb-4 my-4" style="border-bottom: 2px solid grey">
        <h1 class="pb-4" style="font-size: 20px; font-weight: bolder;">Favoritos Laika</h1>
        {{-- VUE --}}

        {{-- VUE --}}
        <div class="container d-flex">
            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col-md-4 p-md-2 d-flex justify-content-around">
                        <div class="card w-75 w-lg-100 my-1  justify-content-between" id="card">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('sistema/img/dietaH.png') }}" class="card-img-top d-flex"
                                    alt="..." style="max-width: 220px; max-height: 300px;cursor: pointer;">
                            </div>
                            <div class="card-body p-2 m-0 flex-column justify-content-between">
                                <h5 class="card-title">{{ $producto->titulo }}.</h5>
                                <p class=""><img src="{{ asset('sistema/img/estrellas.png') }}"
                                        class="card-img-top m-0 d-flex w-50" alt="..."
                                        style="cursor: pointer; height:25px;"></p>
                                <div class="flex-column justify-content-center m-0" style="position: relative!important;
                                    height: 100px;
                                    color: #ac0000;
                                    font-size: 20px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;">

                                    <p>${{ number_format($producto->precio1) }}</p>

                                    <div class="d-flex justify-content-between">${{ number_format($producto->precio2) }}
                                        <a href=""><img src="{{ asset('sistema/img/adquiereloYa.png') }}"
                                                class="w-100 w-md-50 w-xl-100" style="cursor: pointer;"></a>
                                    </div>

                                    <p class="m-0" style="font-size: 14px">Referencia NO
                                        Disponible</p>
                                </div>
                            </div>
                            <button type="button" class="btn bg-morado w-100" style="font-weight: bolder">Agregar
                                al Carrito</button>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center m-auto">
                    {!! $productos->links() !!}
                </div>
            </div>

        </div>
    </div>
    {{-- @@@@@@@@@@@@@ CARD PRODUCTO @@@@@@@@@@@@@ --}}
    <div class="container p-0 my-4">
        <img src="{{ asset('sistema/img/app.png') }}" class="p-0 w-100" alt="laika Youtube"
            style="cursor: pointer;">
    </div>
    <div class="container pb-2 d-none d-lg-flex">
        <div class="col-12 text-center text-md-left">
            <div class="row text-start text-lg-left justify-content-around" style="list-style-type: none;">
                <div class="col-lg-2 col-xl-2 mt-3 d-none d-lg-block">
                    <img src="{{ asset('sistema/img/laikaFt.png') }}" class="p-0" alt="laika Youtube"
                        style="max-width: 200px;cursor: pointer;">
                </div>
                <div class="col-lg-2 col-xl-2 mt-3">
                    <h5 class="text-uppercase mb-1" style="font-weight: bolder;font-size: 17px;color: #603e85;">
                        ACERCA DE LAIKA</h5>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Sobre Laika</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Servicios</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Trabaja con
                            nosotros</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Blog</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Terminos y
                            condiciones</a>
                    </li>
                </div>
                <div class="col-lg-2 col-xl-2 mt-3">
                    <h5 class="text-uppercase mb-1" style="font-weight: bolder;font-size: 17px;color: #603e85;">
                        LINKS DE INTERÉS</h5>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Preguntas
                            Frecuentes</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">¿Como comprar en
                            Laika?</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Politica de
                            Privacidad</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Contactanos</a>
                    </li>
                    <li>
                        <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Politica de
                            Entrega</a>
                    </li>
                </div>
                <div class="col-lg-2 col-xl-2 mt-3">
                    <h5 class="text-uppercase mb-1" style="font-weight: bolder;font-size: 17px;color: #603e85;">
                        INFORMACIÓN</h5>
                    <li>
                        <p href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Teléfono:
                            +573009108496</p>
                    </li>
                    <li>
                        <p href=""
                            style="font-weight: bolder;font-size: 14px;color: #603e85;">servicioclientes@laika.com.co</p>
                    </li>
                    <li>
                        <p href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Bogotá D.C.,
                            Colombia</p>
                    </li>
                </div>
                <div class="col-lg-3 col-xl-3 mt-3">
                    <h5 class="text-uppercase mb-1" style="font-weight: bolder;font-size: 17px;color: #603e85;">
                        SUSCRÍBETE</h5>
                    <li>
                        <span style="font-weight: bolder;font-size: 10px;color: #603e85;">Recibe noticias y
                            promociones al instante.</span>
                    </li>
                    <li>
                        <div class="input-group input-group-sm mb-1">
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Correo Electronico">
                            <button class="btn btn-outline" type="submit" style="margin-right: 10px">Buscar
                            </button>
                        </div>
                    </li>
                    <li class="list-group-item py-0">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        <span style="font-weight: bolder;font-size: 10px;color: #603e85;font-style: italic;">He
                            leído y acepto las políticas de privacidad.</span>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 m-0 d-lg-none">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="text-uppercase mb-1"
                                style="font-weight: bolder;font-size: 17px;color: #603e85;">
                                INFORMACIÓN</h5>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body" style="list-style: none">
                        <li>
                            <p href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Teléfono:
                                +573009108496</p>
                        </li>
                        <li>
                            <p href=""
                                style="font-weight: bolder;font-size: 14px;color: #603e85;">servicioclientes@laika.com.co</p>
                        </li>
                        <li>
                            <p href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Bogotá D.C.,
                                Colombia</p>
                        </li>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading2">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            <h5 class="text-uppercase mb-1"
                                style="font-weight: bolder;font-size: 17px;color: #603e85;">
                                ACERCA DE LAIKA</h5>
                        </button>
                    </h2>
                </div>

                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                    <div class="card-body" style="list-style: none">
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Sobre Laika</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Servicios</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Trabaja con
                                nosotros</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Blog</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Terminos y
                                condiciones</a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading3">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            <h5 class="text-uppercase mb-1"
                                style="font-weight: bolder;font-size: 17px;color: #603e85;">
                                LINKS DE INTERÉS</h5>
                        </button>
                    </h2>
                </div>

                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                    <div class="card-body" style="list-style: none">
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Preguntas
                                Frecuentes</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">¿Como comprar en
                                Laika?</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Politica de
                                Privacidad</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Contactanos</a>
                        </li>
                        <li>
                            <a href="" style="font-weight: bolder;font-size: 14px;color: #603e85;">Politica de
                                Entrega</a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading4">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                            <h5 class="text-uppercase mb-1"
                                style="font-weight: bolder;font-size: 17px;color: #603e85;">
                                SUSCRÍBETE</h5>
                        </button>
                    </h2>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                    <div class="card-body" style="list-style: none">
                        <li>
                            <span style="font-weight: bolder;font-size: 10px;color: #603e85;">Recibe noticias y
                                promociones al instante.</span>
                        </li>
                        <li>
                            <div class="input-group input-group-sm mb-1">
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm" placeholder="Correo Electronico">
                                <button class="btn btn-outline" type="submit" style="margin-right: 10px">Buscar
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item py-0">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            <span style="font-weight: bolder;font-size: 10px;color: #603e85;font-style: italic;">He
                                leído y acepto las políticas de privacidad.</span>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-block">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Direccion</h5>
                        <p class="m-0">Ingresa tu dirección para mostrarte los productos disponibles en tu área</p>
                    </div>
                
                    <form action="" class="py-0">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"></label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Selecciona Ciudad</option>
                                <option>Bogota</option>
                                <option>Cali</option>
                                <option>Medellin</option>
                                <option>Santa Marta</option>
                                <option>Yopal</option>
                                <option>Otra Ciudad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Selecciona Direccion</option>
                                <option>Calle</option>
                                <option>Carera</option>
                                <option>Avenida</option>
                                <option>Circular</option>
                                <option>Manzana</option>
                                <option>Via</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <div class="form-group px-0 col-3">
                                <input type="email" class="form-control px-0" id="" placeholder="">
                            </div>
                            #
                            <div class="form-group px-0 col-3">
                                <input type="email" class="form-control px-0" id="" placeholder="">
                            </div>
                            -
                            <div class="form-group px-0 col-4">
                                <input type="email" class="form-control px-0" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group px-0">
                            <input type="email" class="form-control px-0" id="" placeholder="Apto/ piso / casa">
                        </div>
                    </form>
                    <button type="button" class="btn btn-secondary w-100" data-dismiss="modal" disabled>Agregar Direccion</button>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="bg-gris">
    <div class="container col-12 text-center text-md-left">
        <div class="row text-center text-lg-left d-flex justify-content-around">
            <div class="col-lg-3 col-xl-3 mt-3">
                <img class="w-100" src="{{ asset('sistema/img/ft1.png') }}">
            </div>
            <div class="col-lg-2 col-xl-2 mt-3">
                <img class="w-100" src="{{ asset('sistema/img/ft2.png') }}">
            </div>
            <div class="col-lg-4 col-xl-4 mt-3" style="word-break: break-all;">
                <img class="w-100" src="{{ asset('sistema/img/ft3.png') }}">
            </div>
        </div>
    </div>
</footer>
<!--Bootstrap Js -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<!-- FONTAWESOME -->
<script src="https://kit.fontawesome.com/bf5933d809.js" crossorigin="anonymous"></script>

<script src="{{ asset('js/productos/listaProductos.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>
