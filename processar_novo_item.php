
<?php


require_once "config.php";


    $name = "";
    $price  = " ";
    $categoria  = " ";
    

 
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['token']) ){
    
    $name = $_POST["name"];
    $price  = $_POST["price"];
    $categoria  = $_POST["categoria"];
    $active  = $_POST["active"];
    $active =0;
if(isset($_POST['active'])){
    $active =1;
}

            $data = [
                'name'       => $name,
                'price'      => $price,
                'categoria'  => $categoria,
                'active'      => $active 
            ];
            $sql = "INSERT INTO item (name, price, categoria_id,active )
                    VALUES (:name, :price, :categoria, :active )";
            $stmt= $pdo->prepare($sql);
            
            
            if($stmt->execute($data)){
                
                echo "<script> location.replace('index.php'); </script>";
             //   header('Location:index.php');
               
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
            
    
    }
    // Fechar conexão
    unset($pdo);
    
    




?>