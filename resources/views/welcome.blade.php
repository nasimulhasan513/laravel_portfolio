<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="py-16 bg-gray-900 min-h-screen">
        <div class="container m-auto px-6">

            <div class="lg:flex justify-between items-center">
                <div class="lg:w-6/12 lg:p-0 p-7">
                    <h1 class="sm:text-5xl text-4xl text-white font-medium leading-tight mb-5 capitalize">Hi, I'm
                        {{ $name }} </h1>
                    <p class="text-xl text-zinc-200">
                        {{ $bio }}
                    </p>

                    <div class="py-5 flex gap-x-4">
                        <a class="text-white border px-5 py-2 border-white rounded-lg border-t-2 border-l-2"
                            href="/projects">Projects</a>
                        <a class="text-white border px-5 py-2 border-white rounded-lg border-t-2 border-l-2"
                            href="/experience">Work Experience</a>
                    </div>
                </div>
                <div class="lg:w-4/12 rounded-full scale-100 rounded-lg ">
                    <img class="rounded-full" alt="sahil logo" width="350" height="350"
                        src="https://th.bing.com/th/id/OIP.McI7FZ7q0kH0Z98rx5X4XwHaHa?pid=ImgDet&w=512&h=512&rs=1" />
                </div>
            </div>

        </div>
    </div>

    </div>
</body>

</html>
