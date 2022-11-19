<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK | {{ $title }}</title>
    {{-- css --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
      crossorigin="anonymous">
   
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- endicom --}} 
    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- endaos --}}
    {{-- css --}}
    <link rel="stylesheet" href="css/about.css">
    {{-- endcss --}}
   
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top"
    style="background-color: #0099FF">
    <div class="container">
      <a class="navbar-brand" href="/">SMK Blog |</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/post">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
         
        </ul> 
 
        <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
                  @else
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>
        
      </div>
    </div>
  </nav>
    {{-- jumbotron start --}}
    <section class="jumbotron text-center">
        <img src="img/logo.svg" alt="" width="200px" class="rounded-circle img-thumbnail" />
        <h1 class="display-4">Alfath Izha </h1>
        <p class="lead">Saya adalah seorang siswa dari SMK Negeri 4 Pdalarang  </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,320L34.3,314.7C68.6,309,137,299,206,272C274.3,245,343,203,411,165.3C480,128,549,96,617,74.7C685.7,53,754,43,823,42.7C891.4,43,960,53,1029,96C1097.1,139,1166,213,1234,213.3C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
    {{-- end jumbrotron --}}

    {{-- about --}}
    <section>
        <div class="container" >
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center  text-center">
                <div class="col-md-4" data-aos="fade-down" data-aos-offset="300" data-aos-duration="1400">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, obcaecati iste. Voluptates optio quasi, laborum minima eaque maxime voluptatum sapiente!</p>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-offset="300" data-aos-duration="1400" data-aos-delay="250">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem laborum accusamus consequatur rerum sapiente vel dolore non consectetur minus?</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a4d2f1" fill-opacity="1" d="M0,256L48,261.3C96,267,192,277,288,256C384,235,480,181,576,176C672,171,768,213,864,192C960,171,1056,85,1152,69.3C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>    </section>

    {{-- endabout --}}

    {{-- img --}}
    <section id="code">
        <div i class="container">
            <div class="row text-center">
                <div class="col mb-5">
                    <h2>Bahasa Pemograman Yang Saya Pakai</h2>
                </div>
            </div>
            <di-v class="row justify-content-center ">
                <div class="col-md-4 mb-3 mx-auto">
                    <div class="card cd1 mx-auto" style="" data-aos="zoom-in" data-aos-duration="1600" data-aos-delay="200" data-aos-offset="350">
                        <h2 class="card-title text-center">Laravel</h2>
                        <img src="img/1200px-Laravel.svg (1).png" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                          <p class="card-text text-center"> <a href="https://laravel.com" class="text-decoration-none text-dark">Documentation</a></p>
                           
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3 mx-auto">
                    <div class="card cd2 mx-auto" style="" data-aos="zoom-in"data-aos-duration="1600" data-aos-delay="200" data-aos-offset="350">
                        <h2 class="card-title text-center">Bootstrap</h2>
                        <img src="img/Bootstrap_logo.svg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text text-center"> <a href="https://getbootstrap.com/" class="text-decoration-none text-dark ">Documentation</a></p>
                         
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3 mx-auto">
                    <div class="card cd3 mx-auto" style="" data-aos="zoom-in" data-aos-duration="1600" data-aos-delay="200" data-aos-offset="350">
                        <h2 class="card-title text-center">Javascript</h2>
                        <img src="img/javascript (1).png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text text-center"> <a href="https://devdocs.io/javascript/" class="text-decoration-none text-dark">Documentation</a></p>
                         
                        </div>
                      </div>
                </div>
            </di-v>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,320L34.3,314.7C68.6,309,137,299,206,272C274.3,245,343,203,411,165.3C480,128,549,96,617,74.7C685.7,53,754,43,823,42.7C891.4,43,960,53,1029,96C1097.1,139,1166,213,1234,213.3C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>

    </section>
    <section id="gallery">
      <div class="row justify-content-center">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Gallery</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?gaming" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?programmer" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?web" alt="" class="img-fluid gallery-img ">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?csgo" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?food" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?cat" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?laptop" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?book" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?css" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?php" alt="" class="img-fluid gallery-img">
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#0099ff" fill-opacity="1" d="M0,192L26.7,202.7C53.3,213,107,235,160,218.7C213.3,203,267,149,320,117.3C373.3,85,427,75,480,90.7C533.3,107,587,149,640,176C693.3,203,747,213,800,197.3C853.3,181,907,139,960,133.3C1013.3,128,1067,160,1120,149.3C1173.3,139,1227,85,1280,69.3C1333.3,53,1387,75,1413,85.3L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>
    {{-- endimg --}}
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      
      <script>
        const galleryImage = document.querySelectorAll('.gallery-img');

        galleryImage.forEach((img,i) =>{
          img.dataset.aos ='fade-right';
          img.dataset.aosDelay = i * 150;
          img.dataset.aosDurtation = 1000;
        });

        AOS.init({
         
        });
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
      <script>
        gsap.from('.jumbotron img',{ duration: 1, rotateY: 360,opacity:0});
        gsap.from('.navbar',{duration: 1.5, y: '-100%',opacity:0})
      </script>
  </body>
</html>





