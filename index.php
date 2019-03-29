<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Standard Bank</title>
  </head>
  <body >
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
            <img src="img/img1.jpg" class="img-responsive" alt="standard bank">
        </div>
      <div id="content" class="col-sm-6 col-md-6 col-lg-6 offset-sm-2">
        <h4>Olá,</h4>
        <h4>Pronto para encontrar a sua máquina ?</h4>
        <p>Por favor preencha os seus dados pessoais</p>
        <div class="container">
              <form class= "container-forms">
                  <div class="form-group">
                    <input type="name" class="form-control" id="name" placeholder="Nome Completo">
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="examplo@gmail.com">
                  </div>

                  <div class="form-group">
                    <input type="tel" class="form-control" id="pNumber" max="9" placeholder="Contacto">
                  </div>

                  <div class="form-group">
                    <input type="number" class="form-control" id="Montante" min="100000" placeholder="Montante disponivel">
                  </div>
                  <label class="form-check-label" for="exampleCheck1">Modalidade de Pagamento</label>
                  <div class="row">
                      <div class="col-md-7">
                          <label class="container-checkbox">Pagamento Directo
                          <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                      </div>
                      <div class="col-md-3">
                          <label class="container-checkbox">Leasing
                          <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                      </div>
                  </div>
                  
                  <div class="form-group form-check-inline">
                      <button type="submit" class="btn btn-primary">Pesquisar</button>
                  </div>
                  <div class="form-group form-check-inline">
                      <button type="submit" class="btn btn-danger">Limpar</button>
                  </div>
                
              </form>
        </div>
      </div>
      </div>


  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>