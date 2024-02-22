<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="h-full">
        <nav class="flex items-center justify-between absolute w-full z-40">
            <div class="flex items-center text-white">
                <figure class="w-20">
                    <img src="./images/info logo.png" alt="Informatics College Logo">
                </figure>
                <div class="text flex flex-col tracking-widest">
                    <h1 class="font-semibold text-2xl lowercase">Informatics</h1>
                    <p class="font-semibold text-base text-right uppercase">College</p>
                </div>
            </div>
            <div>
                <a href="#" class="inline-block text-sm mr-4 px-4 py-3 leading-none rounded-full border text-white border-white hover:border-transparent hover:text-black hover:bg-white">Vote now.</a>
            </div>
        </nav>

        <section class="hero__section flex items-center justify-center flex-col h-screen relative">
            <figure class="w-full md:w-7/12 mx-auto z-30">
                <img src="./images/Mr. & Ms. (1).png" alt="Mr. & Ms. Icon Event" class="w-full" />
            </figure>
            <div class="hero__text text-center text-white mt-4 z-40 absolute inset-x-0 bottom-0">
                <p class="text-2xl title-search">Search for</p>
                <h2 class="capitalize text-5xl title-yellow" id="title-yellow">Mr. & Ms.</h2>
                <h1 class="uppercase text-7xl title-white">Icon</h1>
                <input type="text" placeholder="Enter your search" class="rounded-md bg-white px-1 py-1.5 my-8  text-sm font-normal text-black text-center shadow-sm hover:bg-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
            </div>
        </section>
    </header>

</body>

</html>