<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <style>
        div{
            /* border:1px solid; */
            /* margin:1px; */
        }
        </style>
</head>
<body>

<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Atividade</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              Página inicial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="CalculadoraSimples.php">
              Calculadora Simples
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="CalculadoraIdade.php">
              Calculadora Idade
            </a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" href="ConversorTemperatura.php">
              Conversor de Temperatura
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="VerificacaoDeParidade.php">
              Verificação de Paridade
            </a>
        </li>
        
       
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    

 <div class="container">   
 <h1>Calculadora Simples</h1>
 
                
                <?php 

                  $numero1 = 10;
                  $numero2 = 2;
                  $operacao = "multiplicacao";
                  $resultado = "resultado";

                 if($operacao == "soma")
                    
                 {
                    $resultado = $numero1 + $numero2;  
                    echo  "resultado = $resultado";
                 }
                 else if($operacao == "subtracao")
                    
                 {
                    $resultado = $numero1 - $numero2; 
                    echo "resultado = $resultado";
                 }
                 else if($operacao == "multiplicacao")
                
                 {
                    $resultado = $numero1 * $numero2;
                    echo "resultado = $resultado";
                 }
                 else
                   
                      
                   
                    {
                      $resultado = $numero1 / $numero2;
                    echo "Resultado da operação é : .$resultado";
                    }
                
                 
                 ?>

               


 </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>