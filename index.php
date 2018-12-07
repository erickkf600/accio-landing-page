<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="icon.png">

    <title>ACCIO</title>
  </head>
  <body>
    <header class="header">
      <div class="btn backtop"><i class="fas fa-angle-up"></i></div>
      <img src="logo.png" class="img-fluid" id="logo" alt="accio" title="accio">
      <div>
        <div class="text">
          <h1 title="ACCIO">Bem Vindo a Accio Development</h1>
          <hr>
          <p>Buscamos sempre uma forma simples e eficaz para fácilitar a sua vida!</p>
        </div>
        <a href="#servicos" class="btn down" id="saiba-mais"><i class="fas fa-chevron-down demo-arrow"></i></a>
      </div>
    </header>
    <main><?php include "servicos.php"; include "portfolio.php"; include "sobre.php"; include "contato.php" ?></main>
    <footer><?php include "footer.php" ?></footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>