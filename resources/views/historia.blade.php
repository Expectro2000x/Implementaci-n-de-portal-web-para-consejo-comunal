<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Historia') }}
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ed0303" class="w-6 h-6">
                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
            </svg>   
        </div>       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorum culpa explicabo dolores id ex, at harum dicta excepturi ipsam provident aperiam saepe tenetur. Nulla, nostrum. Voluptas quam quibusdam voluptatum?
                    <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sint animi illum? Natus numquam nemo magnam dolor. Et ipsum optio quod omnis. Qui optio, quas facilis eligendi voluptatum unde? Illum. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quibusdam delectus vitae ratione atque, reprehenderit eveniet assumenda, sunt illo voluptatum, vel ullam iusto sit commodi numquam. Aperiam fugiat minima at! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident veniam quia sapiente in voluptates nesciunt, quis suscipit iste quaerat cum assumenda libero sint atque illum minus, dolorum eligendi minima reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae modi iure consequatur exercitationem aut! Ipsam natus obcaecati a. Autem dolorem error velit ea tenetur voluptatem vero quos minima omnis non!
                    </span>
                </div>
            </div>
            <div class="flex justify-center">
                <img width="250" src="{{asset('/logo/Manastara logo.png')}}">  
            </div>
            <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorum culpa explicabo dolores id ex, at harum dicta excepturi ipsam provident aperiam saepe tenetur. Nulla, nostrum. Voluptas quam quibusdam voluptatum?
                    <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sint animi illum? Natus numquam nemo magnam dolor. Et ipsum optio quod omnis. Qui optio, quas facilis eligendi voluptatum unde? Illum. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quibusdam delectus vitae ratione atque, reprehenderit eveniet assumenda, sunt illo voluptatum, vel ullam iusto sit commodi numquam. Aperiam fugiat minima at! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident veniam quia sapiente in voluptates nesciunt, quis suscipit iste quaerat cum assumenda libero sint atque illum minus, dolorum eligendi minima reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae modi iure consequatur exercitationem aut! Ipsam natus obcaecati a. Autem dolorem error velit ea tenetur voluptatem vero quos minima omnis non!
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>