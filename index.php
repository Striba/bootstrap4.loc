<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, Ladies!</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
          <a href="#" class="navbar-brand">
              <img src="http://getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a href="#" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">LogIn</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link disabled">About us</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input type="text" class="form-control mr-sm-2" placeholder="Search" 
                         aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
              </form>
          </div>
      </nav>
      

    <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride='carousel'>
            <ol class="carousel-indicators">
                <li class="active" data-target='#carouselExampleIndicators' data-slide-to='0'></li>
                <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
                <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/demon1_835.jpg" alt="demon1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/demon2_835.jpg" alt="demon2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/demon3_835.jpg" alt="demon3" class="d-block w-100">
                </div>
            </div>
            <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide='prev'>
                <span class="carousel-control-prev-icon" aria-hidden='true'></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide='next'>
                <span class="carousel-control-next-icon" aria-hidden='true'></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
      <div class="container-fluid">
          <div class="container">
              <div class="row text-center justify-content-center"><!-- отцентрирован по ширине -->
                  <div class="col-xs-12 col-sm-4 col-lg-3"><img class="w-100" src="img/examp7.png">
                      <h3>What is Lorem Ipsum?</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div><!-- Класс для колонки -->
                  <div class="col-xs-12 col-sm-4 col-lg-3"><img class="w-100" src="img/examp7.png">
                  <h3>What is Lorem Ipsum?</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div><!-- 6 размер, будет больше чем у остальных -->
                  <!-- <div class="w-100"></div> --><!-- перенесет следующие 2 элемента на следующую строку -->
                  <div class="col-xs-12 col-sm-4 col-lg-3"><img class="w-100" src="img/examp7.png">
                  <h3>What is Lorem Ipsum?</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-lg-3"><img class="w-100" src="img/examp7.png">
                  <h3>What is Lorem Ipsum?</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-lg-3"><img class="w-100" src="img/examp7.png">
                  <h3>What is Lorem Ipsum?</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-lg-3"><img class="w-100" src="img/examp7.png">
                  <h3>What is Lorem Ipsum?</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p>Hello Ladies!</p>
                     
                      <div class="container-fluid">
                          <form>
                            <div class="form-row">
                                <div class="col">  
                              <div class="form-group">
                                  <label for="exampleInputEmail">Email adress</label>
                                  <input type="email" class="form-control" 
                                  id="exampleInputEmail" 
                                  aria-describdby="emailHelp"
                                  placeholder="Email">
                                  <small id="emailHelp" class="form-text text-muted">Enter your Email</small>
                              </div>
                                </div>
                                <div class="col">
                              <div class="form-group">
                                  <label for="exampleInputPass">Password</label>
                                  <input type="password" class="form-control" 
                                  id="exampleInputPass" 
                                  placeholder="Password">
                                  <small id="passHelp" class="form-text text-muted">Password should contain min 10 symbols</small>
                              </div>
                                <div>
                                    <div class="col">    
                              <div class="form-check">
                                  <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input">
                                      Stay saved
                                  </label>
                              </div>
                                    </div>     
                            </div>    
                          </form>  
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Send</button>
                  </div>
              </div>
          </div>
      </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script src="script.js"></script>
  </body>
</html>