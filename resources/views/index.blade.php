<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>Document</title>
  </head>

  <body class="bg-gray-100">
    <header class="w-full relative pt-2 sm:hidden">
      <div class="flex justify-between items-center w-[80%] m-auto">
        <div class="Logo">
          <h3 class="italic font-bold text-2xl"><span>K</span>amba Tukebele</h3>
        </div>
        <nav>
          <ul class="flex justify-center items-center">
            <a href="#"
              class="block ml-3 bg-gradient-to-r from-purple-500 to-pink-500 border w-24 py-2 rounded-md hover:bg-blue-900 text-white">
              <li class="flex justify-center items-center"><i class="fa-solid fa-house-user mr-1"></i>Home</li>
            </a>
            <a href="#" class="block ml-3 bg-white border w-24 py-2 rounded-md hover:bg-blue-900 hover:text-white">
              <li class="flex justify-center items-center"><i class="fa-solid fa-user mr-1"></i>About</li>
            </a>
            <a href="#" class="block ml-3 bg-white border w-24 py-2 rounded-md hover:bg-blue-900 hover:text-white">
              <li class="flex justify-center items-center"><i class="fa-solid fa-person-digging mr-1"></i>Works</li>
            </a>
            <a href="#" class="block ml-3 bg-white border w-24 py-2 rounded-md hover:bg-blue-900 hover:text-white">
              <li class="flex justify-center items-center"><i class="fa-solid fa-address-book mr-1"></i>Contact</li>
            </a>
          </ul>
        </nav>
      </div>
    </header>
    {{-- HIDDEN MENU --}}
    <header>

    </header>
    <section class="w-full absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%]">
      <div class="flex justify-between flex-col items-center w-[80%] m-auto">
        <div>
          <img class="w-[250px] rounded-[50%]" src="{{ asset('assets/images/Charles.jpeg') }}" alt="">
        </div>
        <div class="flex flex-col justify-center items-center">
          <h4 class="text-lg mt-5 font-semibold leading-10">Kamba Tukebele</h4>
          <h6 class="text-sm font-normal text-gray-400 mb-5">PHP/Laravel Back-End Developer</h6>
        </div>
        <div class="flex w-40 justify-between items-center ">
          <a href="#">
            <div class="bg-white rounded-[5px] border mr-2 w-8 flex justify-center items-center h-8">
              <i class="fa-brands fa-github text-2xl"></i>
            </div>
          </a>
          <a href="#">
            <div class="bg-white rounded-[5px] border mr-2 w-8 flex justify-center items-center h-8">
              <i class="fa-brands fa-linkedin text-2xl text-blue-900"></i>
            </div>
          </a>
          <a href="#">
            <div class="bg-white rounded-[5px] border mr-2 w-8 flex justify-center items-center h-8">
              <i class="fa-brands fa-twitter text-2xl text-blue-400"></i>
            </div>
          </a>
          <a href="#">
            <div class="bg-white rounded-[5px] border mr-2 w-8 flex justify-center items-center h-8">
              <i class="fa-brands fa-youtube text-2xl text-red-600"></i>
            </div>
          </a>
          <a href="#">
            <div class="bg-white rounded-[5px] border mr-2 w-8 flex justify-center items-center h-8">
              <i class="fa-brands fa-square-instagram text-2xl text-black"></i>
            </div>
          </a>
        </div>
        <div
          class="border mt-5 py-2 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 text-white w-40 flex justify-center items-center cursor-pointer">
          <i class="fa-solid fa-download mr-1"></i> Download CV
        </div>
      </div>
    </section>

  </body>

</html>