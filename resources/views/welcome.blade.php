<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    {{-- google icon --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&" />

    @vite('resources/css/app.css')
</head>

<body class="h-screen flex justify-center items-center">
    <main class="border-solid border-2 border-gray-500 w-1/2 p-6 rounded-xl bg-white bg-opacity-50 backdrop-blur-md">
        <h1 class="text-center text-xl font-semibold mb-5">To Do App</h1>
        <form action="" method="" class="bg-purple-400 p-2 rounded-md flex justify-center items-center gap-4">
            <input type="text" name="title" placeholder="Enter Todo Title"
                class="grow p-2 rounded-md border-0 text-md">
            <button type="submit"
                class="border-solid border-2 p-2 rounded-md text-white text-md-center hover:bg-white text-black">Add</button>
        </form>
        <div>
            <div class="border-b-2 border-solid border-black p-2 flex justify-between">
                <div>
                    <p>Cooking</p>
                    <p class="text-slate-400 lowercase">Created at <span class="italic">2024, Nov 17</span></p>
                </div>
                <div>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                    </a>
                </div>
            </div>
            <div class="border-b-2 border-solid border-black p-2 flex justify-between">
                <div>
                    <p>Cooking</p>
                    <p class="text-slate-400 lowercase">Created at <span class="italic">2024, Nov 17</span></p>
                </div>
                <div>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                    </a>
                </div>
            </div>
            <div class="border-b-2 border-solid border-black p-2 flex justify-between">
                <div>
                    <p>Cooking</p>
                    <p class="text-slate-400 lowercase">Created at <span class="italic">2024, Nov 17</span></p>
                </div>
                <div>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                    </a>
                </div>
            </div>
            <div class="border-b-2 border-solid border-black p-2 flex justify-between">
                <div>
                    <p>Cooking</p>
                    <p class="text-slate-400 lowercase">Created at <span class="italic">2024, Nov 17</span></p>
                </div>
                <div>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
