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
                    Work Experience
                </h2>
            </div>
            <div class="my-5 text-center">
                <a href="/" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back to home
                </a>
            </div>
            <div class="mt-10">
                <div class="md:grid md:grid-cols-2 md:gap-6">
                    @foreach ($experiences as $experience)
                        <div class="mt-5 md:mt-0 md:col-span-1">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $experience['company'] }}
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $experience['position'] }}</p>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $experience['start_date'] }} -
                                        {{ $experience['end_date'] ?? 'Present' }}</p>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $experience['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>

</div>

</body>
