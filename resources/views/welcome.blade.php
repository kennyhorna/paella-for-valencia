<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Paella for Valencia</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- resources/views/paella-event.blade.php -->
    <div class="min-h-screen bg-pink-200 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="px-6 py-8">
                <h1 class="text-4xl font-bold text-center tracking-wider border-t-2 border-b-2 border-black py-4">
                    PAELLA FOR VALENCIA
                </h1>
            </div>

            <!-- Main Content -->
            <div class="px-6 py-4 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div>
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold mb-4">20€ PER PERSON, includes:</h2>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="text-xl mr-2">*</span>
                                16€ Donation to the food bank in Valencia
                            </li>
                            <li class="flex items-start">
                                <span class="text-xl mr-2">*</span>
                                1x Plate of Paella (vegan available)
                            </li>
                            <li class="flex items-start">
                                <span class="text-xl mr-2">*</span>
                                1x Dessert
                            </li>
                        </ul>
                    </div>

                    <a href="https://forms.gle/TE8VgmNECdPuMYyFA"
                       class="block w-full bg-black text-white text-center py-3 px-4 rounded-full font-bold hover:bg-gray-800 transition-colors duration-200">
                        REGISTER HERE TO SAVE YOUR SPOT - THEY ARE LIMITED!
                    </a>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold mb-2">WHAT</h3>
                        <p>Charity lunch sponsored by CENTRO GALLEGO</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">WHEN</h3>
                        <p>17th Nov at 13:00h</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">WHERE</h3>
                        <p>Stresemannstraße 375,<br>22176 Hamburg</p>
                    </div>
                </div>
            </div>

            <!-- Why Section -->
            <div class="px-6 py-8 bg-pink-100">
                <h3 class="text-xl font-bold mb-4">WHY</h3>
                <p class="mb-6">
                    The floods caused by the DANA storm have affected over 800,000 citizens, destroying many people's homes and businesses in Valencia, Spain. There are currently 200 dead people and 1,900 missing, and many people have been left with nothing. By joining, you will not only enjoy Valencia's most famous dish, but will contribute to providing basic needs to those that have lost everything and need it most.
                </p>

                <!-- Paella Quote -->
                <div class="text-center italic mt-4">
                    "Valencia gave Paella to the world, now it's the world's turn to give back to them"
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
