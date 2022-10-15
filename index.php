<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-24</title>
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <section class="bg-warning the">
        <div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center my-4 py-2 ud"><?php echo $_POST["title"];?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="first">
        <div class="row nn">
            <div class="col-md-12 fw-bold fs-4 bg-dark navv">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                  <div class="container-fluid text-center">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                        <li class="nav-item ms-5">
                          <a class="nav-link active text-warning loose ms-5" aria-current="page" href="#">Loose Leaf Tea</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-warning" href="#">Gifts</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-warning" href="#">Tea Bags</a>
                        </li>
                      
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_POST["tools"];?>
                          </a>
                          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-warning" href="#">Tea Sets</a></li>
                            <li><a class="dropdown-item text-warning" href="#">Travel Sets</a></li>
                            <li><a class="dropdown-item text-warning" href="#">Brewing Tools</a></li>
                            <li><a class="dropdown-item text-warning" href="#">Tea Pots</a></li>
                            <li><a class="dropdown-item text-warning" href="#">All Teaware</a></li>
                          </ul>
                        </li>
                        
                      <li class="nav-item">
                        <a class="nav-link active text-warning ms-3" aria-current="page" href="#">Blog</a>
                      </li>
                    
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          About Us
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item text-warning" href="#">Our Story</a></li>
                          <li><a class="dropdown-item text-warning" href="#">Shipping</a></li>
                          <li><a class="dropdown-item text-warning" href="#">Wholesale Buying</a></li>
                          <li><a class="dropdown-item text-warning" href="#">Contact Us</a></li>
                        </ul>
                      </li>
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bg-dark border-dark text-warning fw-bold fs-4" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_POST["teaware"];?>
                        </button>
                        <ul class="dropdown-menu p-4 dropdown-menu-dark text-warning text-start" style="width: 300px;" aria-labelledby="dropdownMenuButton2">
                            <p>
                                Elevate your tea drinking experience with our exquisite teawares. From a measuring scoop to tea sets and everything in between, our collection will enhance your tea ritual.  
                              </p>
                        </ul>
                      </div>
                      <button type="button" class="btn btn-primary position-relative user bg-dark border-dark">
                        <i class="fa-regular fa-user text-warning"></i>
                       </button>
                       <button type="button" class="btn btn-primary position-relative cart ms-3 bg-dark border-dark">
                        <i class="fa-solid fa-cart-shopping text-warning"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill mb-5 bg-dark text-warning">
                          1
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </button>
                      <button type="button" class="btn btn-primary position-relative user ms-3 bg-dark border-dark">
                        <i class="fa-solid fa-magnifying-glass text-warning"></i>
                      </button>
                      </ul>  
                    </div>
                  </div>
                </nav> 
            </div>
        
            
              
                      
                    
                       
                      
                
                  
            
        </div>
       
    </section>
    <section>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/green-tea-5301025_1920.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-dark">
                          <h3 class="fs-3">Green Tea</h3>
                          <p class="fs-5">Finest Tea in the World</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/tea-2356770_1920.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-dark">
                          <h3>Herbel Tea</h3>
                          <p class="fs-5">Healthiest Tea in the World</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/tea-3190241_1920.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-dark">
                          <h3>TeaWare</h3>
                          <p class="fs-5">Jaw dropping Teaware in the World</p>
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
            </div>
        </div>
    </section>
    <section>
        <h1 class="text-center my-4"><?php echo $_POST["card_title"];?></h1>
    </section>
    <section class="owl-carousel d-flex flex-row cardd">
        
            <div class=" text-center bg-secondary">
                <div class="card border-5 card_one" style="width: 18rem;">
                    <img src="images/ginger-1918107_1920.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-warning bg-dark">
                      <h5 class="card-title"><?php echo $_POST["card_header"];?></h5>
                      <p class="card-text pt-1"><?php echo $_POST["card_paragraph"];?></p>
                      <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
                    </div>
                  </div>
            </div>
            <div class="text-center bg-secondary">
                <div class="card border-5 card_two" style="width: 18rem;">
                    <img src="images/istockphoto-1015308848-2048x2048.jpg" class="card-img-top" style="height: 214px;" alt="...">
                    <div class="card-body text-warning bg-dark">
                      <h5 class="card-title">Kashmiri Saffron Tea</h5>
                      <p class="card-text">Traditional Kashmiri kahwa tea with a modern herbal twist to make your senses joy.</p>
                      <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
                    </div>
                  </div>
            </div>
            <div class="text-center bg-secondary">
                <div class="card border-5 card_three" style="width: 18rem;">
                    <img src="images/slimming.jpg" class="card-img-top" style="height: 214px;"alt="...">
                    <div class="card-body text-warning bg-dark">
                      <h5 class="card-title"><?php echo $_POST["card_header"];?></h5>
                      <p class="card-text"><?php echo $_POST["card_paragraph"];?></p>
                      <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
                    </div>
                  </div>
            </div>
            <div class="text-center bg-secondary">
                <div class="card border-5 card_four" style="width: 18rem;">
                    <img src="images/black-tea-1649000_1920.jpg" class="card-img-top" style="height: 214px;" alt="...">
                    <div class="card-body text-warning bg-dark">
                      <h5 class="card-title">Black Tea</h5>
                      <p class="card-text">Bring in spring with this mellow first flush black tea with flowery flavours.</p>
                      <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
                    </div>
                  </div> 
            </div>
            <div class="text-center bg-secondary">
                <div class="card border-5 card_four" style="width: 18rem;">
                    <img src="images/green-tea-5301025_1920.jpg" class="card-img-top" style="height: 214px;" alt="...">
                    <div class="card-body text-warning bg-dark">
                      <h5 class="card-title">Green Tea</h5>
                      <p class="card-text">Bring in spring with this mellow first flush black tea with flowery flavours.</p>
                      <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
                    </div>
                  </div> 
            </div>
            <div class="text-center bg-secondary">
              <div class="card border-5 card_three" style="width: 18rem;">
                  <img src="images/slimming.jpg" class="card-img-top" style="height: 214px;"alt="...">
                  <div class="card-body text-warning bg-dark">
                    <h5 class="card-title">Slimming Tea</h5>
                    <p class="card-text">Gear up to lose some of those extra calories with our tea master's slimming blend.</p>
                    <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
                  </div>
                </div>
          </div>
          <div class="text-center bg-secondary">
            <div class="card border-5 card_three" style="width: 18rem;">
                <img src="images/slimming.jpg" class="card-img-top" style="height: 214px;"alt="...">
                <div class="card-body text-warning bg-dark">
                  <h5 class="card-title">Slimming Tea</h5>
                  <p class="card-text">Gear up to lose some of those extra calories with our tea master's slimming blend.</p>
                  <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
                </div>
              </div>
        </div>
        <div class="text-center bg-secondary">
          <div class="card border-5 card_three" style="width: 18rem;">
              <img src="images/slimming.jpg" class="card-img-top" style="height: 214px;"alt="...">
              <div class="card-body text-warning bg-dark">
                <h5 class="card-title">Slimming Tea</h5>
                <p class="card-text">Gear up to lose some of those extra calories with our tea master's slimming blend.</p>
                <a href="#" class="btn btn-primary bg-warning text-dark">Add to cart</a>
              </div>
            </div>
      </div>
            
        
    </section>
    <h1 class="text-center my-3 why"><?php echo $_POST["statement_title"];?></h1>
    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 text-light">
                    <h2>ALL NATURAL</h2>
                    <p><?php echo $_POST["statement"];?></p>
                </div>
                <div class="col-md-6">
                   <img class="img-fluid ms-5 p-4 pic" src="images/herbal-tea-1410565_1920.jpg" alt=""> 
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1 class="text-center"><?php echo $_POST["item"];?></h1>
    </section>
    <section class="one">
        <div class="row">
            <div class="col-md-3">
              <a href="images/coffee-pot-1274398_1920.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail" src="images/coffee-pot-1274398_1920.jpg" alt=""></a>
            </div>
            <div class="col-md-3">
              <a href="images/silver-tea-set-989820_1920.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail" src="images/silver-tea-set-989820_1920.jpg" alt=""></a>
            </div>
            <div class="col-md-3">
              <a href="images/tea-set-2064504_1920.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail" src="images/tea-set-2064504_1920.jpg" alt=""></a>
            </div>
            <div class="col-md-3">
              <a href="images/teaware-6705654_1920.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail imgone" style="height:215px ;width:320px;" src="images/teaware-6705654_1920.jpg" alt=""></a>
            </div>
        </div>
    </section>
    
    <section class="two">
        <div class="row">
            <div class="col-md-3">
              <a href="images/teapot-7415291_1920.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail imgtwo" style="height:215px ;width:320px;" src="images/teapot-7415291_1920.jpg" alt=""></a>
            </div>
            <div class="col-md-3">
              <a href="images/teapot2.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail" src="images/teapot2.jpg" alt=""></a>
            </div>
            <div class="col-md-3">
              <a href="images/teapot4.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail" src="images/teapot4.jpg" alt=""></a>
            </div>
            <div class="col-md-3">
              <a href="images/teapot8.jpg" data-lightbox="image-1"><img class="img-fluid img-thumbnail" src="images/teapot8.jpg" alt=""></a>
            </div>
        </div>
        <button class="clo mt-3 bg-dark text-info rounded fs-4 ms-3">Close</button>
    </section>
    <div class="container">
        
        <button class="more mb-5 bg-info text-dark rounded fs-4">More Items.....</button>
    </div>
    
      <h1 class="customer text-uppercase bg-warning text-center py-2 mt-5"><?php echo $_POST["review_title"];?></h1>
      <section>
      <div class="row">
        <div class="col-md-5">

        </div>
        <div class="col-md-5 pb-2">
          <i class="fa-solid fa-star ms-5 star text-warning"></i>
      <i class="fa-solid fa-star text-warning"></i>
      <i class="fa-solid fa-star text-warning"></i>
      <i class="fa-solid fa-star text-warning"></i>
      <i class="fa-solid fa-star-half-stroke text-warning"></i>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </section>
    <section class="rate bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul class="list-group text-end lis">
              <li class="list-group-item bg-secondary border-secondary text-light">1 Star</li>
              <li class="list-group-item bg-secondary border-secondary text-light">2 star</li>
              <li class="list-group-item bg-secondary border-secondary text-light">3 Star</li>
              <li class="list-group-item bg-secondary border-secondary text-light">4 Star</li>
              <li class="list-group-item bg-secondary border-secondary text-light"><?php echo $_POST["review"];?></li>
            </ul>
          </div>
          <div class="col-md-6 mb-2 mt-2 pro">
            <div class="progress mb-2" style="height: 30px; width: 500px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
            <div class="progress mb-2" style="height: 30px; width: 500px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
            <div class="progress mb-2" style="height: 30px; width: 500px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
            </div>
            <div class="progress mb-2" style="height: 30px; width: 500px;">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
            <div class="progress mb-2" style="height: 30px; width: 500px;">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-6 mt-3 text-center bg-success text-light rounded rt">
          <h2>Rate Us</h2>
        </div>
        <div class="col-md-6 mt-4 fw-bold rad">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">1 Star</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">2 Star</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">3 Star</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">4 Star</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">5 Star</label>
          </div>
          
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-6 my-4 map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17370.17484645299!2d90.4138670511216!3d23.76059015335816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8783ab9882f%3A0x50f429f46d937f3c!2z4Kaw4Ka-4Kau4Kaq4KeB4Kaw4Ka-LCDgpqLgpr7gppXgpr4!5e0!3m2!1sbn!2sbd!4v1665407992061!5m2!1sbn!2sbd" width="600" height="400"></iframe>
        </div>
        <div class="col-md-6 my-4 you">
          <iframe width="600" height="400" src="https://www.youtube.com/embed/GWFXzQkJCqE" allowfullscreen></iframe>
        </div>
      </div>
    </section>
    
    <section class="bg-secondary">
        <div class="row">
            <div class="col-md-2 mt-4 bg-secondary">
                <div class="last_one ms-4 text-light last">
                    <h2>SHOP</h2>
                    <button class="bg-secondary border-secondary text-light">Loose Leaf Tea</button><br>
                    <button class="bg-secondary border-secondary text-light">Teaware</button><br>
                    <button class="bg-secondary border-secondary text-light">Gifts</button><br>
                </div>
            </div>
            <div class="col-md-2 mt-4 bg-secondary">
                <div class="last_two text-light last">
                    <h2>ABOUT</h2>
                    <button class="bg-secondary border-secondary text-light">Our Story</button><br>
                    <button class="bg-secondary border-secondary text-light">Kettle Talk Blog</button><br>
                    <button class="bg-secondary border-secondary text-light">Wholesale</button><br>
                    <button class="bg-secondary border-secondary text-light">Gifting Enquiries</button><br>
                    
                </div>
            </div>
            <div class="col-md-2 mt-4 bg-secondary">
                <div class="last_three text-light last">
                    <h2>SUPPORT</h2>
                    <button class="bg-secondary border-secondary text-light">Track Your Order</button><br>
                    <button class="bg-secondary border-secondary text-light">FAQ</button><br>
                    <button class="bg-secondary border-secondary text-light">Shipping & Delivery</button><br>
                    <button class="bg-secondary border-secondary text-light">Terms of Use</button><br>
                    <button class="bg-secondary border-secondary text-light">Return Policy</button>
                    <button class="bg-secondary border-secondary text-light">Privacy Policy</button>
                </div>
            </div>
            <div class="col-md-2 mt-4 bg-secondary">
                <div class="last_four text-light last">
                    <h2>CONNECT</h2>
                    <button class="bg-secondary border-secondary text-light">Contact Us</button><br>
                    <button class="bg-secondary border-secondary text-light">+91 74777 89757</button><br>
                    <button class="bg-secondary border-secondary text-light">support@udyantea.com</button><br>
                    <i class="fa-brands fa-facebook fb fs-1 mt-3"></i>
                    <i class="fa-brands fa-twitter twit fs-1"></i>
                    <i class="fa-solid fa-circle-user tube fs-1"></i>
                </div> 
            </div>
            <div class="col-md-4 form">
              
                <form class="bg-warning text-center py-3" style="height: 400px;">
                    <h3 class="text-end me-3 xmark"><i class="fa-solid fa-xmark"></i></h3>
                    <h3 class="text-center fw-bolder">Let's Stay Connected</h3>
                    
                    <p class="text-center">Subscribe to our emails and get 10% off your first purchase</p>
                    <div class="row mb-3 ms-3 em">
                      <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Email</label>
                      <div class="col-sm-5 ms-2">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="row mb-3 ms-3 ps">
                      <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Password</label>
                      <div class="col-sm-5 ms-2">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary bg-dark text-warning mt-3 rounded-pill border-5 border-light p-3 sign"><?php echo $_POST["sign"];?></button>
                  </form>
            </div>
        </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-12 text-center text-warning bg-success py-3 re">
          <h4><?php echo $_POST["footer"];?></h4>
        </div>
      </div>
    </section>
    






    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
     integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/eb260fabc8.js" 
     crossorigin="anonymous"></script>
     <script src="js/lightbox.js"></script>
     <script src="js/owl.carousel.js"></script>
    </script>
    
      <script>
            $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    autoWidth:true,
  });
});
        </script>
        <script>
        $(document).ready(function(){
            $(".more").click(function(){
                $(".two").fadeIn(3000);
            });
            $(".customer").click(function(){
              $(".rate").toggle(3000);
            });
            $(".clo").click(function(){
              $(".two").hide();
            });
            $(".more").click(function(){
              $(".more").animate({
                left:'530px',
                opacity:0

              });
            });
            $(".clo").click(function(){
              $(".more").animate({
                right:'100px',
                opacity:100,
                height:"45px",
                width:"+300px"
                
              });
            });
            $(".xmark").click(function(){
              $(".form").hide(function(){
                alert("Successful");
              });
            });
            $(".ud").click(function(){
              $(".ud").css("color","white");
              $(".ud").css("background","black");
              $(".ud").css("border","5px solid white");
              $(".ud").css("border-radius","10px");
              $(".ud").css("box-shadow","2px 2px 3px 2px white");
            });
            $(".rt").click(function(){
              $(".rad").show();
              
            });
            $(".rt").click(function(){
              $(".rt").css("border","3px solid blue");
              
            });
            $(".pic").click(function(){
              $(".pic").animate({
                width:'toggle'
              });
            });
            $(".why").click(function(){
              $(".pic").show();
            });
        });
    </script>
    
 </body>
</body>
</html>