<!doctype html>
<html lang="PT-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- link CSS -->
    <link rel="stylesheet" type="text/css" href="css/stylo.css" media="screen" />

    <title>TekBit - Login</title>
</head>
<body>

    <!--incluindo barra de navegação

    <?php ?>
-->

<div class='container-fluid'>
    <div class="row align-items-center">

        <div class="col-12" id="titulo">
           <h1>Bem Vindo a Tek Bit - Faça o Login</h1>
        </div>

    </div>
</div>


<div class="container-fluid">      
<div class="card" id="Tela-Login"  >
  
  <div class="card-body">
   
   



                    <form class="row g-3 needs-validation" novalidate>
            
                            <div class="form-group">
                            <label for="validationCustomUsername" class="form-label">Usuário</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Ótimo, já temos um nome!
                                </div>
                            </div>
                            </div>
 
                            <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="exampleInputPassword1" value="0000000" requerid>
                                <div class="valid-feedback">
                                    Parece Bom!
                                </div>
                            </div>
                            </div>

                            
                            <button class="btn btn-outline-primary btn-lg btn-block" type="submit">Logar</button>

                        
                    </form>

</div>
</div>
</div>
<script>
// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


</div>
  </div>

   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->


</body>
</html>
