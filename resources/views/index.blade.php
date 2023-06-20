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

  <body>
    <main>
      <header>
        <div class="Logo">
          <h3><span>K</span>amba Tukebele</h3>
        </div>
        <nav>
          <ul>
            <a href="#">
              <li><i class="fa-solid fa-house-user"></i>Home</li>
            </a>
            <a href="#">
              <li><i class="fa-solid fa-user"></i>About</li>
            </a>
            <a href="#">
              <li><i class="fa-solid fa-person-digging"></i>Works</li>
            </a>
            <a href="#">
              <li><i class="fa-solid fa-address-book"></i>Contact</li>
            </a>
          </ul>
        </nav>
      </header>
      <section>
        <div>
          <img src="{{ asset('assets/images/Charles.jpeg') }}" alt="">
        </div>
        <div>
          <h4>Kamba Tukebele</h4>
          <h6>FullStack Web Developer Laravel/React</h6>
        </div>
        <div>
          <div>
            <i class="fa-brands fa-github"></i>
          </div>
          <div>
            <i class="fa-brands fa-linkedin"></i>
          </div>
          <div>
            <i class="fa-brands fa-twitter"></i>
          </div>
          <div>
            <i class="fa-brands fa-youtube"></i>
          </div>
          <div>
            <i class="fa-brands fa-square-instagram"></i>
          </div>
        </div>
        <div>
          <i class="fa-solid fa-download"></i> Download CV
        </div>
      </section>
    </main>
  </body>

</html>