<header>
    <div class="container py-4 flex justify-between items-center">
        <div>
            <img class="h-[40px] md:h-[80px]" src="{{ asset($company->logo) }}"
                alt="">
        </div>

        <div>
            <p>
                {{ nepalidate(now()) }}</p>
            <img class="h-2 md:h-4" src="https://www.jawaaf.com/frontend/images/redline.png" alt="">
        </div>
    </div>
</header>

<!-- Navbar Seection -->
<nav class="bg-[var(--primary)] text-white py-2">
    <div class="container hidden lg:flex justify-between items-center">
        <ul class="flex gap-6">
            <li>
                <a href="">गृहपृष्ठ</a>
            <li>

            <li>
                <a href="">समाचार</a>
            <li>

            <li>
                <a href="">मनोरञ्जन</a>
            </li>

            <li>
                <a href="">खेलकुद</a>
            </li>

            <li>
                <a href="">विचार</a>
            </li>

            <li>
                <a href="">शिक्षा</a>
            </li>

            <li>
                <a href="">स्वास्थ्य</a>
            </li>

            <li>
                <a href="">अर्थतन्त्र</a>
            </li>
        </ul>

        <div>
            <form action="" method="get" class="relative">
                <input class="rounded" type="text" name="search" placeholder="search anythings">
                <button class="absolute top-3 right-2 text-black" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

            </form>
        </div>
    </div>

    <div class="container flex justify-end lg:hidden">
        <button class="text-2xl" type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
            aria-controls="drawer-example">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

</header>


<div id="drawer-example"
    class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-label">

    <h5 class="text-2xl font-sembold py-5">
        Menu
    </h5>
    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <ul class="flex flex-col gap-6">
        <li>
            <a href="">गृहपृष्ठ</a>
        <li>

        <li>
            <a href="">समाचार</a>
        <li>

        <li>
            <a href="">मनोरञ्जन</a>
        </li>

        <li>
            <a href="">खेलकुद</a>
        </li>

        <li>
            <a href="">विचार</a>
        </li>

        <li>
            <a href="">शिक्षा</a>
        </li>

        <li>
            <a href="">स्वास्थ्य</a>
        </li>

        <li>
            <a href="">अर्थतन्त्र</a>
        </li>
    </ul>
</div>
