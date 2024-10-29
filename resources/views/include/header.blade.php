<div id="header" class="active">
    <header>
        @vite('resources/js/header.js')
        <nav class=" w-full top-0  bg-white">

            <div class="container mx-auto flex py-5 justify-between items-center">
                <div class="w-8 gap-5 pl-5 text-2xl font-bold">
                    <a href="">Portfolio</a>
                </div>
                <ul class="hidden md:flex space-x-10">
                    <li>
                        <a class="rounded-full p-2 hover:bg-gray-100 hover:text-gray-400" href="#about">About</a>
                    </li>
                    <li>
                        <a class="rounded-full p-2 hover:bg-gray-100 hover:text-gray-400" href="#projects">Projects</a>
                    </li>
                    <li>
                        <a class="rounded-full p-2 hover:bg-gray-100 hover:text-gray-400" href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- <img id="darkMode" class="hidden md:flex w-8 cursor-pointer"
                    src="https://th.bing.com/th/id/OIP.GkDfljb8kBs8ww5wY_DMdAHaHa?rs=1&pid=ImgDetMain" alt=""> -->
                <div id="menu-icon" class="mr-5 block md:hidden cursor-pointer">
                    <div class="w-6 h-1 bg-black mb-1"></div>
                    <div class="w-6 h-1 bg-black mb-1"></div>
                    <div class="w-6 h-1 bg-black"></div>
                </div>
            </div>
        </nav>
    </header>
</div>