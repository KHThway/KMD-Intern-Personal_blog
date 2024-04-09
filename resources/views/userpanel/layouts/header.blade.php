<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myy Blog</title>
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">
    {{-- Head Line Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('resources/views/userpanel/layouts/partials/custom.css') }}">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --bgfirst-color: #20c997;
            --bgsecond-color: #dc3545;
            --bgthrid-color: #0dcaf0;
            --bgfourth-color: #fd7e14;
            --bgfifth-color: #e85951;
        }

        #blogCards {
            height: 300px;
        }

        #heading-line {
            width: 96%;
            height: 2px;
            background-color: black;
            margin: 30px auto;
        }



        #head-line-font {
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-weight: 900;
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="container-fluid flex justify-end py-2">
        <span>
            Follow me on :
            <a href="" class="text-lg mx-1"><i class="bi bi-facebook"></i></a>
            <a href="" class="text-lg mx-1"><i class="bi bi-instagram"></i></a>
            <a href="" class="text-lg mx-1"><i class="bi bi-twitter-x"></i></a>
            <a href="" class="text-lg mx-1"><i class="bi bi-github"></i></a>
        </span>
    </div>

    <header class="container-fluid p-2 bg-yellow-400">

        <nav x-data="{ open: false }" class="bg-yellow-400 border-0">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-14">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ url('/') }}">
                                <div class="block h-9 w-auto fill-current text-gray-800">
                                    Myy_<i class="bi bi-bootstrap-fill text-4xl"></i>
                                </div>
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link :href="route('userpanel.home')" :active="request()->routeIs('userpanel.home')">
                                {{ __('Home') }}
                            </x-nav-link>
                            <x-nav-link :href="route('userpanel.index')" :active="request()->routeIs('userpanel.index')">
                                {{ __('Recepies') }}
                            </x-nav-link>
                        </div>
                    </div>



                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-white">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('userpanel.home')" :active="request()->routeIs('userpanel.home')">
                        {{ __('Home') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('posts.index')" :active="request()->routeIs('userpanel.index')">
                        {{ __('Recepies') }}
                    </x-responsive-nav-link>
                </div>

            </div>
            </div>
        </nav>

    </header>
