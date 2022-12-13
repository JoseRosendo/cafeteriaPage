<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- font icons -->
        <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
        <!-- Bootstrap + Pigga main styles -->
	    <link rel="stylesheet" href="assets/css/pigga.css">
        @livewireStyles
    </head>
    {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
    @endif --}}
    <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
        <!-- First Navigation -->
        <nav class="navbar nav-first navbar-dark bg-dark">
            <div class="container">
                <!--Logo-->
                <a class="navbar-brand" href="#">
                    @foreach ($configuraciones as $i)
                    <img src="/storage/{{$i->icono}}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                    @endforeach
                </a>
                <!--Opciones-->
                <nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
                    <div class="container">
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto"> 
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Menú</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testmonial">Reservaciones</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
        <!-- End of First Navigation --> 
        <!-- Page Header -->
        <header class="header">
            <div class="overlay">
                @foreach ($configuraciones as $l)
                    <img src="/storage/{{$l->logo}}" alt="" class="logo">
                @endforeach
                <h1 class="subtitle">Bienvenidos a la cafetería</h1>
                <h1 class="title">"WAY QUE RICO!!"</h1> 
                <a class="btn btn-primary mt-3" href="#book-table">Reserva una mesa</a> 
            </div>      
        </header>
        <!--Nosotros-->
        @include('carouselNosotros')
        <!--Menu-->
        @include('menu_paginaweb')

        <section id="book-table" class="pattern-style-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h3 class="section-title mb-3 pb-3 text-center">Reservaciones</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Contacto">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="seats" placeholder="Asientos">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </div>
                </div>
            </div>
        </section>
        {{-- HORARIO --}}
        <section id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div id="default-carousel1" class="relative" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-64 overflow-hidden rounded-lg md:h-64">
                                <!-- Item 1 -->
                                @foreach ($galeria_dos as $gd)
                                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="/storage/{{$gd->imagen}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                    <div class="w-full">
                                      <span class="absolute font-bold px-4 py-1 text-2xl w-full bg-primary text-dark capitalize">{{$gd->descripcion}}</span>
                                    </div>
                                  </div>
                                @endforeach
                                
                            </div>
                            <!-- Slider indicators -->
                            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>                  
                    </div>                
                    <div class="col-md-6">
                        <h6 class="section-subtitle">Abierto</h6>
                        <h3 class="section-title">HORARIOS</h3>
                        @foreach ($horarios as $horario)
                        <p class="mb-1 font-weight-bold capitalize">{{$horario->dia}} : <span class="font-weight-normal pl-2 normal-case">{{$horario->hora_apertura}} - {{$horario->hora_descanso}} y {{$horario->hora_reapertura}} - {{$horario->hora_cierre}}</span></p>
                        @endforeach
                        <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Reserva una mesa</a>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Prefooter Section  -->
        <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
            <div class="container">
                <div class="row justify-content-between align-items-center text-center">
                    <div class="col-md-3 text-md-left mb-3 mb-md-0">
                        @foreach ($configuraciones as $i)
                        <img src="/storage/{{$i->icono}}" width="100" alt="" class="mb-0">
                        @endforeach
                    </div>
                    <div class="col-md-9 text-md-right">
                        <p class="mb-0 small">Ubicación</p>
                        <iframe class="float-right rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.90628077761878!2d-89.01710364714502!3d20.932406827435603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56a5354b844a51%3A0x9e7f4d97cecb2e5a!2sItzmal%20Magic%20Town!5e0!3m2!1ses-419!2smx!4v1670442220505!5m2!1ses-419!2smx" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Footer -->
        <footer class="border border-dark border-left-0 border-right-0 border-bottom-0 p-4 bg-dark">
            <div class="container">
                <div class="row align-items-center text-center text-md-left">
                    <div class="col">
                        <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, <a href="" target="_blank">C.P</a>  J.R </p> 
                    </div>
                    <div class="d-none d-md-block">
                        <h6 class="small mb-0">
                            <a href="https://www.facebook.com/profile.php?id=100086682774985" class="px-2"><i class="fa-brands fa-facebook fa-xl"></i></a>
                            <a href="https://wa.me/529994383956" class="px-2"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
                        </h6>
                    </div>
                </div>
            </div> 
        </footer>

        <!-- core  -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
        <!-- bootstrap affix -->
        <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
        <!-- Pigga js -->
        <script src="assets/js/pigga.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
        @livewireScripts
    </body>
</html>
