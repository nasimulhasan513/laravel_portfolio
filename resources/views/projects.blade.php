<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="py-16 bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    Projects
                </h2>

            </div>
            <div class="my-5 text-center">
                <a href="/" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back to home
                </a>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach ($projects as $project)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ asset('images/' . $project['image']) }}"
                                alt="{{ $project['title'] }}">
                        </div>
                        <div class="flex-1 bg-gray-800 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="{{ $project['url'] }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-white">
                                        {{ $project['title'] }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-400">
                                        {{ $project['description'] }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-400">Technologies:</p>
                                    <div class="flex space-x-1 text-sm text-gray-300">
                                        @foreach ($project['technologies'] as $technology)
                                            <span>{{ $technology }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</body>
