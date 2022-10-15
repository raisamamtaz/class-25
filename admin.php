<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 head">
                <h1>Admin Panel</h1>
            </div>
            <div class="col-md-6 admin">
               
                <div class="mb-3 col-sm-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed title fs-3 fw-bold mt-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Title
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-info"> 
                                <code><form action="index.php" method="post">
                                    
                                    <input class="in" type="text" placeholder="Title" name="title">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Tools" name="tools">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Teaware" name="teaware">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Card Title" name="card_title">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Card Header" name="card_header">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Card Paragraph" name="card_paragraph">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Statement Title" name="statement_title">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Statement" name="statement">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Review Title" name="review_title">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Review" name="review">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Item" name="item">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Footer" name="footer">
                                    <input class="put" type="submit">
                                    <input class="in" type="text" placeholder="Sign In" name="sign">
                                    <input class="put" type="submit">
                            </form></code></div>
                          </div>
                        </div>
                    </div>
                    
                    
                </div>
            
          
                
                     
        

    </div>
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
 <script>
    $(document).ready(function(){
        $(".head").click(function(){
            $(".admin").toggle(2000);
        });
    });
 </script>  
</body>
</html>