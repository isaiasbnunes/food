<?php
  require_once "config.php";
  session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Cantina da Expansão</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
    
    </div>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          
          <div class="carousel-item active">
            <div class="img-box">
              <img src="images/slider-img1.jpg" alt="">
            </div>
          </div>
     
	 <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img4.jpeg" alt="">
            </div>
          </div>

          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img5.jpeg" alt="">
            </div>
          </div>
	  <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img2.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img6.jpeg" alt="">
            </div>
          </div>
	
	<div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img7.jpeg" alt="">
            </div>
       </div>	
	 <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img2.jpg" alt="">
            </div>
          </div>


	<div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img8.jpeg" alt="">
            </div>
          </div>
	 <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img3.jpg" alt="">
            </div>
          </div>

	<div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img9.jpeg" alt="">
            </div>
          </div>				

        </div>
     
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            Nosso Cardápio
          </h2>
         
        </div>
        <div class="img-box">
          
		  <ul class="list-group">
                            
                            <?php
                              
                              
                              $categoria = $pdo->query("SELECT * FROM categoria  where active = 1 ;" );

                              while ($l_categoria = $categoria->fetch(PDO::FETCH_ASSOC)) {
                                echo "<h1>{$l_categoria['name']}</h1>";
                               	
					$item = $pdo->query("SELECT * FROM item  
                       where (categoria_id =  {$l_categoria['id']})
                              and (active = 1)     ;" );
                                	while ($l_item = $item->fetch(PDO::FETCH_ASSOC)) {
						echo "<p>{$l_item['name']} -  ";
  						 echo  number_format($l_item['price'],2,',','.') . "</p>" ;
					}
                              }
                        ?>
                        </ul>
		
		

        </div>
      
      </div>
    </div>
  </section>

  <!-- end shop section -->



  


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved. Design by
      <a href="#">Isaías Braga</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
