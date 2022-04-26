

<?php
session_start();
// Incluir arquivo de configuração
require_once "config.php";
 
// Defina variáveis e inicialize com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";
 

    // Processando dados do formulário quando o formulário é enviado
 if($_SERVER["REQUEST_METHOD"] == "POST" ){
    
        // Verifique se o nome de usuário está vazio
        if(empty(trim($_POST["username"]))){
            $username_err = "Por favor, insira o nome de usuário.";
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Verifique se a senha está vazia
        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, insira sua senha.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validar credenciais
        if(empty($username_err) && empty($password_err)){
           
            $sql = "SELECT id, username, password FROM users WHERE username = :username";
            
            if($stmt = $pdo->prepare($sql)){
             
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                
                $param_username = trim($_POST["username"]);
             
                if($stmt->execute()){
                 
                    if($stmt->rowCount() == 1){
                     
                        if($row = $stmt->fetch()){
                            $id = $row["id"];
                            $username = $row["username"];
                            $hashed_password = $row["password"];
                            if(password_verify($password, $hashed_password)){
                                echo 'passou ok verify';
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                          
 
                                echo "<script> location.replace('novo_item.php'); </script>";
                                //header("location:novo_cardapio.php");
                            } else{
                                // A senha não é válida, exibe uma mensagem de erro genérica
                                $login_err = "Nome de usuário ou senha inválidos.";
                            }
                        }
                    } else{

                        $login_err = "Nome de usuário ou senha inválidos.";
                    }
                } else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                unset($stmt);
            }
        }
        
        // Fechar conexão
        unset($pdo);
    } else{
        $_SESSION['msg'] = "ERRO! Caracteres inválidos.";
        header("Location: login.php");
    }



?>
