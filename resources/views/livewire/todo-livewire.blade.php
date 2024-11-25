<main class="border-solid border-2 border-gray-500 w-1/2 p-6 rounded-xl bg-white bg-opacity-50 backdrop-blur-md">
    <h1 class="text-center text-xl font-semibold mb-5">To Do App</h1>
    <form action="" method=""
        class="bg-pink-400 p-2 rounded-md flex justify-center items-center flex-wrap gap-4">
        <input type="text" name="title" placeholder="Enter Todo Title" class="grow p-2 rounded-md border-0 text-md">
        <button type="submit" class="border-solid border-2 p-2 rounded-md text-white text-md-center">Add</button>
        @error('title')
            <p class="text-red-500 w-full">{{ $message }}</p>
        @enderror
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
