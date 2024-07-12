<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manástara</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{asset('/logo/Manastara logo.png')}}" type="image/png">

    </head>
    <body class="antialiased">
        @include('layouts.navigation')
        <div class="flex justify-center bg-green-50">
            <img width="250" src="{{asset('/logo/Manastara logo.png')}}">
        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-green-50 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg flex items-center justify-center">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quos, qui voluptas ipsum laboriosam voluptate, id impedit laborum dolores natus nostrum nam veritatis dicta maxime beatae non suscipit dolor. Accusantium.
                    <br>Nihil aliquam quod necessitatibus perspiciatis quo. Unde consequatur voluptatibus maiores suscipit id sit totam explicabo. Ratione cumque placeat sunt accusamus suscipit, at recusandae sequi aliquid facere, quidem ipsam officia. Consequuntur!
                    Accusamus excepturi alias iure consectetur ad quibusdam <br>exercitationem perspiciatis illum. Sequi eligendi accusamus nostrum reprehenderit maxime harum quo magni blanditiis autem illo magnam eveniet, voluptate iste, nesciunt non dolorum. Aperiam
                    </p>
                </div>
                <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg flex items-center justify-center">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quos, qui voluptas ipsum laboriosam voluptate, id impedit laborum dolores natus nostrum nam veritatis dicta maxime beatae non suscipit dolor. Accusantium.
                    <br>Nihil aliquam quod necessitatibus perspiciatis quo. Unde consequatur voluptatibus maiores suscipit id sit totam explicabo. Ratione cumque placeat sunt accusamus suscipit, at recusandae sequi aliquid facere, quidem ipsam officia. Consequuntur!
                    Accusamus excepturi alias iure consectetur ad quibusdam <br>exercitationem perspiciatis illum. Sequi eligendi accusamus nostrum reprehenderit maxime harum quo magni blanditiis autem illo magnam eveniet, voluptate iste, nesciunt non dolorum. Aperiam
                    </p>
                </div>
                <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg flex items-center justify-center">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quos, qui voluptas ipsum laboriosam voluptate, id impedit laborum dolores natus nostrum nam veritatis dicta maxime beatae non suscipit dolor. Accusantium.
                    <br>Nihil aliquam quod necessitatibus perspiciatis quo. Unde consequatur voluptatibus maiores suscipit id sit totam explicabo. Ratione cumque placeat sunt accusamus suscipit, at recusandae sequi aliquid facere, quidem ipsam officia. Consequuntur!
                    Accusamus excepturi alias iure consectetur ad quibusdam <br>exercitationem perspiciatis illum. Sequi eligendi accusamus nostrum reprehenderit maxime harum quo magni blanditiis autem illo magnam eveniet, voluptate iste, nesciunt non dolorum. Aperiam
                    </p>
                </div>
            </div>
            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </div>
    </body>
</html>
