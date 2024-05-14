<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 <!-- Bootstrap CSS -->
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

 <link rel="stylesheet"  type="text/css" href="stycss/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-captalize" href="#">new project</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto  mb-50 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-captalize" href="#">about us</a>
              </li>

              <!-- services starrt -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-captalize" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-captalize" href="#">gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-captalize" href="#">contact us</a>
              </li>
              
            </ul>
    
          </div>
        </div>
      </nav>

      <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slider/1.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slider/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slider/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </header>
      <!-- about us start -->
      <section>
          <div class="main-about my-5">
              <div class="text-center">
                  <h1 class="display-3">About Us</h1>
                  <hr class="w-15 mx-5"/>
              </div>
          </div>
          <div class="container">
            <div class="row my-5">
              <div class="col-lg-3 col-md-6 col-6 col-xxl-6 d-flex justify-content-around align-items-center flex-row">
                <figure class="align-items-center">
                 <img src="img/slider/4.jpg" alt="image" class="img-fluid about_img">
                  <h1>MY journey</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                     Laudantium cum cumque deserunt nisi quos hic ducimus
                      debitis  Laudantium cum cumque deserunt nisi quos hic 
                    in assumenda molestiae modi dolore quae impedit placeat 
                    maxime, iusto facilis. Architecto, animi.</p>
                    <button type="button" class="btn btn-outline-info">Check More</button>
                </figure>

              </div>
            </div>
          </div>
      </section>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    
</body>
</html>