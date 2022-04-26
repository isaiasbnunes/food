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
      <a class="navbar-brand" href="index.html">
        <span>
          Cardápio
        </span>
      </a>
    </div>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
         
</br></br>
          
        </div>
     
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="list-itens.php">Itens </a>
                </li>
           
              </ul>
             
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            Novo item
          </h2>
         
        </div>
         
             <!-- Form    -->
                    <form  action="<?php echo htmlspecialchars("processar_novo_item.php"); ?>" method="post">
                    <input type="hidden" name="token" >
                    <div class="row mb-3">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Nome</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Queijo">
                      </div>
                    </div>
                    

                    <div class="row mb-3">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Valor</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" name="price" placeholder="6.50">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="categoria" class="col-sm-2 col-form-label"> </label>
                      <div class="col-sm-10">
                        
                        <select class="form-control" id="categoria" name="categoria" >

                        <?php
                                    
                          $categoria = $pdo->query("SELECT * FROM categoria  ;" );

                              while ($l_categoria = $categoria->fetch(PDO::FETCH_ASSOC)) {
                                
                                echo "<option value='{$l_categoria['id']}'>{$l_categoria['name']}</option>";
                              }

                        ?>

                        </select>

                      </div>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="active" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Ativo - Mostrar no cardápio
                      </label>
                    </div>
                 
</br>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form><!--  Form   -->



		

        
      
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
