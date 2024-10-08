<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The ENIAC</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class=" min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid items-center">
                        <livewire:welcome.navigation />
                    </header>

                    <main class="mt-6">
                        <div class="grid grid-cols-5 gap-4">
                            <div class="grid col-span-3 pb-5">
                                <div class="inline pb-2">
                                    <p class="text-8xl inline">WE ARE <br/> <span>THE ENIAC</span></p>
                                    <span class="inline-flex relative bottom-2 items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-gray-800 text-gray-800">portfolio</span>
                                    <span class="inline-flex relative items-center gap-x-1.5 py-0.5 px-0.5 rounded-full text-xs font-medium border border-gray-800 text-gray-800"><svg fill="#000000" width="1.5rem" height="1.5rem" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg"><path d="M196,64V168a4,4,0,0,1-8,0V73.65625L66.82812,194.82812a3.99957,3.99957,0,0,1-5.65625-5.65625L182.34375,68H88a4,4,0,0,1,0-8H192A4.0002,4.0002,0,0,1,196,64Z"/></svg></span>
                                </div>
                                <img src="https://images.pexels.com/photos/258109/pexels-photo-258109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="sample-img">
                            </div>
                            <div class="grid grid-rows-2 col-span-2 pt-36">
                                <div class="grid">
                                    <h1 class="text-4xl">CHÚNG TỚ LÀ AI?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima natus iure corporis cumque porro illo soluta quasi. A ducimus sapiente libero, praesentium tempore deserunt officia consequuntur excepturi pariatur deleniti voluptate. Blanditiis non culpa tenetur molestiae accusantium natus incidunt sunt dicta! Velit quaerat amet sequi, itaque est fugiat officia commodi natus?</p>
                                </div>

                                <div class="grid">
                                    <h1 class="text-4xl">SỨ MỆNH CỦA CLB</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati neque ad soluta ipsum doloribus fuga voluptatum, quidem nihil doloremque, est quibusdam voluptate quo ipsam ipsa odit fugit facere. Minus adipisci voluptate nobis cumque voluptates corrupti? Quidem itaque vero, quos magni officiis assumenda et voluptatum adipisci quasi quaerat corporis mollitia, debitis sit aliquam laboriosam error ut deserunt quam maiores. Rem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-16">
                            <div class="grid col-span-5 py-3">
                                <h1 class="text-4xl">KỶ NIỆM 10 NĂM ĐỔI TÊN TRƯỜNG</h1>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores natus cumque amet omnis vero eos esse ab quaerat. Obcaecati quisquam corrupti veritatis fuga beatae doloribus quasi doloremque consectetur velit esse!</p>
                            </div>


                            <div class="grid col-span-7 border-l-2 p-l-2 border-black pl-10">
                                <img src="{{ asset('images/test.png') }}" alt="">
                            </div>
                        </div>

                        <h1 class="text-4xl mt-16">TRENDING POST</h1>
                        <h2 class="text-3xl font-bold">MULTIMEDIA VNG</h2>
                        <div class="grid gap-6 lg:grid-cols-5 lg:gap-5">
                            <div class="grid col-span-3">
                                <div class="flex flex-col shadow-sm rounded-xl">
                                    <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Card Image">
                                    <div class="p-4 md:p-5">
                                        <h3 class="text-lg font-bold text-gray-800">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, eius!
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="grid gap-2 col-span-2 grid-rows-3">
                                <div class="grid row-span-1">
                                    <div class="rounded-xl shadow-sm sm:flex">
                                        <div class="shrink-0 relative w-full rounded-t-xl overflow-hidden sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-48">
                                            <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Card Image">
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="p-4 flex flex-col h-full sm:px-6 sm:py-1">
                                                <h3 class="text-lg font-bold text-gray-800">
                                                    Card title
                                                </h3>
                                                <p class="mt-1 text-gray-500">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam placeat id veniam illum impedit provident.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid row-span-1 gap-6">
                                    <div class="rounded-xl shadow-sm sm:flex">
                                        <div class="shrink-0 relative w-full rounded-t-xl overflow-hidden sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-48">
                                            <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Card Image">
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="p-4 flex flex-col h-full sm:px-6 sm:py-1">
                                                <h3 class="text-lg font-bold text-gray-800">
                                                    Card title
                                                </h3>
                                                <p class="mt-1 text-gray-500">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam placeat id veniam illum impedit provident.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="grid row-span-1">
                                    <div class="rounded-xl shadow-sm sm:flex">
                                        <div class="shrink-0 relative w-full rounded-t-xl overflow-hidden sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-48">
                                            <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Card Image">
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="p-4 flex flex-col h-full sm:px-6 sm:py-1">
                                                <h3 class="text-lg font-bold text-gray-800">
                                                    Card title
                                                </h3>
                                                <p class="mt-1 text-gray-500">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam placeat id veniam illum impedit provident.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-span-2"></div>
                        </div>
                    </main>

                    
                </div>
            </div>

            <livewire:layout.footer />
        </div>
    </body>
</html>
