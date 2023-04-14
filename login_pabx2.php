<?php
//session_destroy();

//header('Location: login_pabx2.php');

?>
	<!-- <h2>valor da seção é :  <?echo $_SESSION['usuario']; ?></h2> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.1.1-dist/css/customizado.css">
    
    <link rel="stylesheet" href="fontawesome/css/all.css" >

    <style></style>
    
    <title></title>
</head>
<body>
   
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <!-- <div class="row"> <img src="imagens/CXQmsmF.png" class="logo"> </div> -->
                    <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="imagens/lamp.png" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="imagens/uNGdWHi.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                 <form action="verifica_usuario.php" method="POST">
                     <div class="row px-3"> <label class="mb-1">
                             <h6 class="mb-0 text-sm">Usuario :</h6>
                         </label><input class="mb-4" type="text" name="usuario" placeholder="Digite um usuario válido"> </div>
                     <div class="row px-3"> <label class="mb-1">
                             <h6 class="mb-0 text-sm">Senha : </h6>
                         </label> <input type="password" name="senha" placeholder="Digite o  senha"> </div>
                     <div class="row px-3 mb-4">
                       
                     </div>
                     <div class="row mb-3 px-3"> <button type="submit" class="btn btn-primary btn-block text-center"><i class="fas fa-unlock-alt"></i></i>&nbsp;&nbsp;Login</button> </div>
                 </form>
                        <?php
                        if (isset($_GET['status'])){  // dados recebidos de verifica_usuario_logado.php
                        switch ($_GET['status']) {
                            case "senhaInvalida": // dados recebidos de verifica_usuario_logado.php
                        ?>     
                        <div class="alert alert-danger" role="alert">
                       <strong>Senha Invalida.</strong> 
                        </div>             

                        <?php     
                            break;
                            case "usuarioInvalido":  // dados recebidos de verifica_usuario_logado.php
                        ?>   

                        <div class="alert alert-warning" role="alert">
                            <strong>Usuario não cadastrado. </strong>
                        </div>             
                            
                        <?php  
                            break;
                            }
                        }
                    ?>
                        
                </div>
            </div>
        </div>
    
    </div>
</div>

<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<!-- bootstrap-tablelas -->
<script type="text/javascript" src="bootstrap/js/sb-admin.min.js"></script>
<script type="text/javascript" src="bootstrap/js/sb-admin-datatables.min.js"></script>

<script type="text/javascript" src="bibliotecas/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="bibliotecas/datatables/dataTables.bootstrap4.js"></script>

</body>
<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-1">
    <!-- Section: Social media -->
    <section class="mb-1">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:<a class="text-dark" href="phtelecom.sytes.net/">phtelecom</a>
  </div>
  <!-- Copyright -->
</footer>
</html>