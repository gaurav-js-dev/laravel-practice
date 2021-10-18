<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Minimal Blog</title>
    <meta name="author" content="name" />
    <meta name="description" content="description here" />
    <meta name="keywords" content="keywords,here" />
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
    <!--Replace with your tailwind.css once created-->
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- navbar goes here -->
    <nav class="bg-gray-100 sticky top-0 z-50">
        <div class=" max-w-6xl mx-auto px-4">
            <div class="flex justify-between">

                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <svg class="h-6 w-6 mr-1 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            <span class="font-bold">Laravel Blog</span>
                        </a>
                    </div>
                </div>

                <!-- secondary nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{url('/login')}}" class="py-5 px-3">Admin Dashboard</a>
                    <a href="{{url('/login')}}" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Admin Signup</a>
                </div>

                <!-- mobile button goes here -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Features</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Pricing</a>
        </div>
    </nav>

    <div class="bg-gray-900 pt-12 pb-6 flex-1 h-screen">
        <div class="container mx-auto">
            <div class="flex flex-wrap md:-mx-3">
                @foreach ($posts as $post)

                <div class="md:w-1/2 px-3 mb-6 w-full">
                    <div class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                        <div class="w-4/6 p-5">
                            <h2 class="text-white leading-normal text-lg">{{$post->title}}</h2>
                            <div flex-1 p-2>
                                <p class="text-white opacity-90 text-sm">{{substr($post->body, 0, 180);}}</p>
                                <button class="rounded bg-blue-500 hover:bg-blue-700 mt-2 px-1 text-white"> Read More</button>
                            </div>
                            <div class="flex flex-wrap justify-between items-center mt-6">
                                <div class="inline-flex items-center">
                                    <div class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                        <img src="https://i.stack.imgur.com/34AD2.jpg" />
                                    </div>

                                    <div class="flex-1 pl-2">
                                        <h2 class="text-white mb-1 text-xs"> {{$post->user->name}}</h2>
                                        <p class="text-white opacity-50 text-xs">{{$post->created_at->toFormattedDateString()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            {{$posts->links()}}
        </div>

    </div>

</body>

</html>