<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

        {{-- JQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        @vite(['resources/css/app.css'])
        @vite(['resources/js/app.js'])
        @vite(['resources/js/language_selection.js'])
        @vite(['resources/js/projects_menu.js'])
        @vite(['resources/js/contacts_menu.js'])
        @vite(['resources/js/background_effect.js'])
    </head>
    <body class="antialiased">
        <div id="main-container" class="w-full bg-Default min-h-screen">
            {{-- Page background --}}
            <div class="page-background fixed w-full h-full flex justify-center items-center -z-10">
                {{-- <svg id="background-circle" height="100" width="100" class="absolute">
                    <circle r="45" fill="transparent" stroke="white" stroke-width="3" cx="50" cy="50" />
                </svg> --}}
            </div>

            {{-- Language picker & Responsive menu button --}}
            <div class="w-full fixed top-0 flex py-8 justify-around bg-Card z-20 lg:bg-opacity-0 lg:absolute">
                {{-- Responsive menu button --}}
                <div class="lg:hidden">
                    <button id="responsive-menu-open-button">
                        <img src="{{ asset('assets/images/icons/bars-staggered-solid.svg') }}" alt="bars-staggered-solid" class="w-5 object-contain invert"> 
                    </button>
                </div>

                {{-- Padding block for alignment --}}
                <div class="hidden lg:block"></div>

                {{-- Language picker --}}
                <div class="">
                    <p id="language-selector-current" class="bg-[transparent] text-gray-300 w-16 h-8s border-b-2 border-transparent hover:border-gray-300 flex flex-row justify-around cursor-pointer">
                        {{ strtoupper($locale) }}
                        <img src="{{ asset('assets/images/icons/'.$locale.'_flag.png') }}" alt="{{ $locale }}" class="w-5 object-contain"> 
                    </p>
    
                    <div id="language-selector-list" class="hidden mt-2" data-hidden="true">
                        @foreach ($supported_locales as $sup_locale)
                            @if ($sup_locale != $locale)
                                <p class="language-selector-option bg-[transparent] text-gray-300 w-16 h-8s border-b-2 border-transparent hover:border-gray-300 flex flex-row justify-around cursor-pointer" data-lang="{{ $sup_locale }}">
                                    {{ strtoupper($sup_locale) }}
                                    <img src="{{ asset('assets/images/icons/'.$sup_locale.'_flag.png') }}" alt="{{ $sup_locale }}" class="w-5 object-contain"> 
                                </p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            

            {{-- Banner --}}
            <div class="w-full flex justify-center">
                <div class="w-[969px] h-[333px] mt-40 mb-16 border-r-4 border-l-4 border-gray-500 flex justify-center align-middle flex-col gap-11">
                    <p class="text-8xl font-Montserrat text-gray-300 text-center">Carlos Giraldo</p>
                    <p class="text-2xl font-Montserrat text-gray-600 text-center">{{ ucfirst(__('fullstack web developer')) }}</p>
                </div>
            </div>

            {{-- Menu --}}
            <div id="menu" class="w-full hidden justify-center font-Montserrat text-4xl text-gray-300 py-16 sticky top-0 lg:flex">
                {{-- Item --}}
                <div id="menu-item-1" class="border-r-2 border-gray-300 px-8 py-2.5 cursor-pointer menu-item bg-Default z-20 transition-all ease-out duration-500">
                    <a href="#projects" class="highlightable transition-all ease-in-out duration-500">{{ mb_strtoupper(__('projects')) }}</a>
                </div>
                {{-- Item --}}
                <div id="menu-item-2" class="border-r-2 border-gray-300 px-8 py-2.5 cursor-pointer menu-item bg-Default z-10 transition-all ease-out duration-500">
                    <a href="#skills" class="highlightable transition-all ease-in-out duration-500">{{ mb_strtoupper(__('skills')) }}</a>
                </div>
                {{-- Item --}}
                <div id="menu-item-3" class="px-8 py-2.5 cursor-pointer menu-item bg-Default z-0 transition-all ease-out duration-500">
                    <a href="#contact" class="highlightable transition-all ease-in-out duration-500">{{ mb_strtoupper(__('contact')) }}</a>
                </div>
            </div>

            {{-- Responsive Menu --}}
            <div id="responsive-menu" class="hidden w-full max-w-full h-screen fixed font-Montserrat text-4xl text-gray-300 top-0 lg:hidden z-50 bg-Card flex-col transition-all ease-in-out duration-500">
                
                {{-- Close menu button --}}
                <div class="w-full h-20 p-6 flex flex-row-reverse">
                    <button id="responsive-menu-close-button">
                        <img src="{{ asset('assets/images/icons/x-solid.svg') }}" alt="{{ $sup_locale }}" class="w-5 object-contain invert"> 
                    </button>
                </div>

                {{-- Item --}}
                <div id="responsive-menu-item-1" class="border-b-2 border-gray-300 py-8 cursor-pointer responsive-menu-item z-20 transition-all ease-out duration-500 px-6">
                    <a href="#projects" class="highlightable transition-all ease-in-out duration-500">{{ mb_strtoupper(__('projects')) }}</a>
                </div>
                {{-- Item --}}
                <div id="responsive-menu-item-2" class="border-b-2 border-gray-300 py-8 cursor-pointer responsive-menu-item z-10 transition-all ease-out duration-500 px-6">
                    <a href="#skills" class="highlightable transition-all ease-in-out duration-500">{{ mb_strtoupper(__('skills')) }}</a>
                </div>
                {{-- Item --}}
                <div id="responsive-menu-item-3" class="py-8 cursor-pointer responsive-menu-item z-0 transition-all ease-out duration-500 px-6">
                    <a href="#contact" class="highlightable transition-all ease-in-out duration-500">{{ mb_strtoupper(__('contact')) }}</a>
                </div>
            </div>

            <div class="flex flex-col">

                {{-- Projects --}}
                <section id="projects" class="w-full flex flex-col gap-10 justify-center mt-80 mb-60 lg:pl-[20%] lg:pr-[10%] z-10" data-isShown="false">
                    <div class="section-title transition-all duration-300 opacity-0 pl-[5%] lg:pl-0">
                        <p class="font-Montserrat text-[2rem] text-gray-300 lg:text-4xl">{{ mb_strtoupper(__("some of the projects i've worked on")) }}</p>
                    </div>

                    <div id="project-cards-container" class="w-full flex flex-col gap-10 transition-all duration-300">
                        {{-- 
                                    REMEMBER TO CHANGE data-projectCardNo VALUE FOR EACH NEW CARD. SHOULD BE NUMERATED IN CARDINAL ORDER
                            --}}
                        {{-- Card container --}}
                        <div class="flex flex-col gap-0">
                            {{-- <div class="project-card-container w-full flex flex-row justify-between opacity-0 transition-all duration-300" data-isActive="false" data-projectCardNo='1'>
                                <div class="z-10 project-card w-full h-60 bg-Card hover:bg-CardHighlight rounded-3xl p-16 transition-all duration-300 cursor-pointer flex justify-start items-center" style="transition: width 500ms, background-color 300ms, color 300ms">
                                    <p class="text-center text-gray-300 text-5xl">CAHM Tienda de Muebles</p>
                                </div>
    
                                <a href="" target="_blank" class="z-0 close-card-button h-60 aspect-square bg-Card hover:bg-CardHighlight rounded-3xl p-16 transition-all duration-700 cursor-pointer flex justify-center items-center absolute opacity-0" style="transition: opacity 700ms, background-color 300ms">
                                    <i class="block h-20 aspect-square bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/icons/up-right-from-square-solid.svg') }}')"></i>
                                </a>
                            </div> --}}

                            {{-- <div id="project-showcase" class="project-showcase w-full h-0 opacity-0 transition-all duration-500 rounded-lg" style="background-image: url('{{ asset('assets/images/backgrounds/furniture_shop.png') }}')">

                            </div> --}}

                            <div class="project-card-container opacity-0 transition-all duration-1000 cursor-pointer" data-isActive="false" data-projectCardNo='1'>
                                <div class="project-card-clickable">
                                    <div class="project-card-border w-full h-[1px] bg-gradient-to-l from-white transition-all duration-300"></div>
                                    <div class="project-card-background w-full h-12 flex flex-row justify-end items-center lg:bg-gradient-to-l lg:from-Card py-10 px-5 transition-all duration-300 hover:bg-Card">
                                        <p class="text-center text-gray-300 text-4xl">CAHM Tienda de Muebles</p>
                                    </div>
                                    <div class="project-card-border w-full h-[1px] bg-gradient-to-l from-white transition-all duration-300"></div>
                                </div>

                                <div class="project-card-showcase w-full h-0 opacity-0 transition-all duration-1000 flex flex-row justify-end cursor-default max-h-[760px]" style="background-image: url('{{ asset('assets/images/backgrounds/furniture_shop.png') }}')">
                                    <div class="project-showcase-info transition-all duration-700 w-full h-full bg-Card-75 flex flex-col items-start justify-around gap-10 pl-[5%] pr-[5%] py-10 text-white text-xl font-Roboto-Mono opacity-0 lg:pl-[70%] lg:bg-gradient-to-l lg:from-Card lg:via-Card-50 lg:via-50%">
                                        <p>
                                            <u>{{ ucwords(__('tech stack')) }}: </u>
                                            <br>
                                            Laravel, Vanilla JS, LESS, GIT.
                                        </p>

                                        <p>
                                            <u>{{ ucwords(__('description')) }}: </u>
                                            <br>
                                            {{ ucfirst(__('e-commerce website project I participated in, along three other colleagues as a lead developer')) }}. {{ ucfirst(__('i took care of design and development of both front-end and back-end features, as well as project planning and team management')) }}
                                        </p>

                                        <div class="w-full flex flex-col gap-2">
                                            <u>{{ ucwords(__('relevant links')) }}:</u>
                                            <div class="w-full flex flex-col gap-2">
                                                <a href="https://github.com/Carlos-GLOZ/furniture-shop" class="flex flex-row gap-2 w-full items-center hover:underline bg-Card-75 p-4 border-y-[1px] border-white">
                                                    {{ ucfirst(__('Github page')) }}
                                                    <i class="block h-5 aspect-square bg-no-repeat bg-cover invert" style="background-image: url('{{ asset('assets/images/icons/up-right-from-square-solid.svg') }}')"></i>
                                                </a>
                                                <a href="" class="flex flex-row gap-2 w-full items-center hover:underline bg-Card-75 p-4 border-y-[1px] border-whitee">
                                                    {{ ucfirst(__('website')) }} 
                                                    <i class="block h-5 aspect-square bg-no-repeat bg-cover invert" style="background-image: url('{{ asset('assets/images/icons/up-right-from-square-solid.svg') }}')"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Skills --}}
                <section id="skills" class="w-full flex justify-center mt-96 mb-60 lg:pl-[19%] lg:pr-[10%]" data-isShown="false">
                    <div class="w-full flex flex-col gap-10">
                        <div class="section-title transition-all duration-300 opacity-0 pl-[5%] lg:pl-0">
                            <p class="font-Montserrat text-4xl text-gray-300">{{ mb_strtoupper(__("the tools i've used")) }}</p>
                        </div>

                        <div class="flex flex-wrap gap-[1px] justify-center">
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/python_logo.png') }}" alt="" class="w-20">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">Python</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/html_css_logo.png') }}" alt="" class="w-40">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">Html & CSS</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/php_logo.png') }}" alt="" class="w-28">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">PHP</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/git_logo.png') }}" alt="" class="w-20">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">GIT</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/js_logo.png') }}" alt="" class="w-20">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">JavaScript</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/laravel_logo.png') }}" alt="" class="w-20">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">Laravel</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/django_logo.png') }}" alt="" class="">
                                <p class="text-center text-gray-300 text-2xl font-semibold" transition-all duration-300>Django</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/flutter_logo.png') }}" alt="" class="w-20">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">Flutter</p>
                            </div>
                            
                            
                            <div class="card w-36 min-h-56 lg:min-h-0 bg-Card p-8 flex flex-col justify-around items-center gap-8 border-2 border-opacity-0 border-white hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 opacity-0 z-10 lg:w-72 lg:p-16">
                                <img src="{{ asset('assets/images/icons/mysql_logo.png') }}" alt="" class="">
                                <p class="text-center text-gray-300 text-2xl font-semibold transition-all duration-300">MySQL</p>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Contact --}}
                <section id="contact" class="w-full flex flex-col justify-center mt-96 mb-60 gap-6 lg:pl-[19%] lg:pr-[10%]" data-isShown="false">
                    <div class="section-title transition-all duration-300 opacity-0 pl-[5%] lg:pl-0">
                        <p class="font-Montserrat text-4xl text-gray-300">{{ mb_strtoupper(__("get in touch with me")) }}</p>
                    </div>
                    <div class="w-full flex flex-wrap gap-[1px] justify-center">
                        <a href="https://github.com/Carlos-GLOZ" target="blank" class="contact-stagger-item h-48 opacity-0 flex flex-row items-center w-full pl-10 border-2 border-opacity-0 border-white cursor-pointer bg-Card hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 2xl:w-[33%]">
                            <img src="{{ asset('assets/images/icons/github_logo.png') }}" alt="" class="h-2/3">
                            <p class="link-title text-5xl text-gray-300 transition-all duration-300 w-full text-center">GitHub</p>
                        </a>
                        <a href="https://www.linkedin.com/in/carlos-giraldo-lozano-319a36225/" target="blank" class="contact-stagger-item h-48 opacity-0 flex flex-row items-center w-full pl-10 border-2 border-opacity-0 border-white cursor-pointer bg-Card hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 2xl:w-[33%]">
                            <img src="{{ asset('assets/images/icons/linkedin_logo.png') }}" alt="" class="h-2/3">
                            <p class="link-title text-5xl text-gray-300 transition-all duration-300 w-full text-center">LinkedIn</p>
                        </a>
                        <a href="mailto:cgiraldolozano@gmail.com" target="blank" class="contact-stagger-item h-48 opacity-0 flex flex-row items-center w-full pl-10 border-2 border-opacity-0 border-white cursor-pointer bg-Card hover:border-opacity-100 hover:bg-CardHighlight transition-all duration-300 2xl:w-[33%]">
                            <img src="{{ asset('assets/images/icons/email_logo.png') }}" alt="" class="h-2/3">
                            <p class="link-title text-5xl text-gray-300 transition-all duration-300 w-full text-center">Email</p>
                        </a>
                    </div>
                </section>

            </div>
        </div>
    </body>
</html>
