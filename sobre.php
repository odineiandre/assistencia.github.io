<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Site Pessoal</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body style="background-color: white;">
    <header>
    
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary menu">
            <div>
            <a href="index.html"><img src="img/tech.png"></a>
            </div>
            <div class="container">
              <div class="ml-auto">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link"  href="index.php">Início</a>
                  <a class="nav-link" href="contato.php">Contato</a>
                  <a class="nav-link active" aria-current="page" href="sobre.php">Sobre</a>
                  <a class="nav-link " href="serviços.php">Serviços</a>
                </div>
              </div>
            </div>
            </div>
            </nav>
            </div>
        </div>
        <section class="bg-primary" style="color: white;">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="align-self-center">
                    <br>
                    <br>
                    <br>
                    <h1 style="color: mediumspringgreen;">Quem somos?</h1>
                    <p>
                      Somos uma empresa especializada em tenologia, que conta com os melhores especialstas de cada área para 
                      fornecer um excelente atendimento para seus clientes, atuamos na área de assistência técnica, possuímos loja física e virtual,
                      trabalhamos com design de logomarcas... Ficou interessado em algo? É só clicar no botão abaixo que você será redirecionado
                      a uma página onde poderá estar entrando em contato conosco.
                      <br>
                      <br>
                      <a href="contato.html" class="btn btn-success">Contato</a>
                    </div>
                  </div>
                      <div class="col-md-6 d-none d-md-block">
                        <br>
                        <br>
                        <img src="img/assistencia.jpeg" style="width: 500px;" height="300px">
                      </div>
              </div>
            </div>
          </section>
          <section class="caixa">
            <div class="container">
              <div class="row">
                <div class="col-md-6 d-flex">
                  <div class="align-self-center">
                    <br>
                    <br>
                    <br>
                    <h2>Localização</h2>
                    <p>
                    Nosso estabelecimento situa-se em Serra Alta, na rua Duque de Caxias, Centro, proximo a autoescola, 
                    possuímos atendimento presencial, assistência técnica e loja física, possuí interesse? Venha nos visitar!
                    </p>
                  </div>
                </div>
                <div class="col-md-6">          
  <?php
  include_once "mapa.php";
  ?>
                </div>
              </div>
            </div>
          </section>

          <div id="home">
            <br>
            <div class="container">
              <div class="row" >
                <div class="col-md-8">
                  <p>
                    <a class="corrodape p-2"  href="index.php";>Início</a>
                    <a class="corrodape p-2" href="contato.php";>Contato</a>
                    <a class="corrodape p-2" href="sobre.php";>Sobre</a>
                    <a class="corrodape p-2" href="serviços.php";>Serviços</a>
                  </p>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                  <a href="" class="btn btn-outline-light">
                    <i class="fab fa-facebook"></i>
                  </a>
                  <a href="" class="btn btn-outline-light ml-2">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="" class="btn btn-outline-light ml-2">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="" class="btn btn-outline-light ml-2">
                    <i class="fab fa-youtube"></i>
                  </a>
                </div>
              </div>
            </div>
      <br>
        </div>
        <?php
        include_once "whats.php";
        ?>
        
        </body>
    </html>