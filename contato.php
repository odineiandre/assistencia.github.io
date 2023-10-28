<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Site Pessoal</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Contato</title>
</head>
<body>
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
                      <a class="nav-link" href="index.php">Início</a>
                      <a class="nav-link active" aria-current="page" href="contato.php">Contato</a>
                      <a class="nav-link" href="sobre.php">Sobre</a>
                      <a class="nav-link" href="serviços.php">Serviços</a>
                    </div>
                  </div>
                </div>
                </div>
                </nav>
                </div>
            </div>
        </header>
        <div id="home">
        <div class="container">
        <div class="row"> 
        <div class="col-md-6">
        
        <section> 
            <form method="POST" class="form-estilo">
                <hr>
                <h3 class="titulo" style="text-align: center;">
                    <strong>Entre em contato conosco</strong>
                </h3>
                <hr>
                <p><input type="email" name="email" class="form-control" placeholder="Digite seu Email" required/></p>
                <p><input type="name" name="nome" class="form-control" placeholder="Digite seu Nome" required/></p>
                <p><input type="password" name="senha" class="form-control"  placeholder="Digite o seu telefone (opcional)"/></p>
                <p><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Diga o seu problema" required></textarea></p>
                <p><buttom name="login" type="submit" class="btn btn-lg btn-success btn-block">Cadastrar</buttom></p> 
            </form>
        </section> 
        </div> 
        <div class="col-md-6">
          <img src="img/suporte.png" width="450" height="400">
        </div>
        </div>  
        </div> 
    </div> 
      <section class="caixa">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="align-self-center">
                <br>
                <br>
                <br>
                <h2>Precisando de atendimento?</h2>
                <p>
                Preenchendo os campos acima, nossa equipe receberá um email com sua solicitação de suporte, iremos responder o mais breve possível 
                para resolver o seu problema da melhor e mais rápida maneira.
                </p>
                
              </div>
            </div>
            <div class="col-md-6">
              <br>
              <br>
              <br>
              <img src="img/suporte.jpg" class="img-fluid">
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
      </div>
    </body>
</html>