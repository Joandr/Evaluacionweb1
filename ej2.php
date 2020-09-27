<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIMNACIO BODYTECH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <form class = "mt-5" action = "ej2.php" method = "POST">
            <h1 class = "text-center">INGRESO DATOS USUARIO BODYTECH</h1>
            <div class="form-row mt-5">
                <div class="col">
                <input type="text" class="form-control" placeholder="Nombre Usuario" name = "Nombre">
                </div>
                <div class="col">
                <input type="number" class="form-control" placeholder="Peso" name = "Peso">
                </div>
                <div class="col">
                <input type="decimal" class="form-control" placeholder="Altura" name = "Altura">
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-md-12 mt-5" name = "Calcular">Calcular</button>
        </form>
        
    </header>

    <main>

        <h2 class = "text-center mt-5">RESULTADOS</h2>

        <?php if(isset($_POST["Calcular"])):?>
        
        <?php 
        
            $NombreUsuario = $_POST["Nombre"];
            $Peso = $_POST["Peso"];
            $Altura = $_POST["Altura"];
            $CalculoIMC =  $Peso/($Altura*$Altura);
            
                echo ("E Usuario" . ' '. $NombreUsuario);
                echo ("<br>");
                echo ("<br>");
                echo ("Pesa" . ' ' . $Peso . ' ' . "kilos");
                echo ("<br>");
                echo ("<br>");
                echo ("Mide" . ' ' . $Altura . ' ' . "Mts");
                echo ("<br>");
                echo ("<br>");

                $CalculoIMC = $Peso/($Altura*$Altura);
                echo ("Su IMC es de :" . ' ' . $CalculoIMC);

                if($CalculoIMC < 18.50)
                {
                    echo ("<br>");
                    echo ("<br>");
                    echo ("Peso Insuficiente........");
                }
                elseif ($CalculoIMC >= 18.5 &&  $CalculoIMC < 24.9)
                {
                    echo ("<br>");
                    echo ("<br>");
                    echo ("Tienes un peso normal........");
                }
                elseif ($CalculoIMC >= 25 && $CalculoIMC < 26.9)
                {
                    echo ("<br>");
                    echo ("<br>");
                    echo ("Tienes Sobrepeso Grado 1........");
                }
                elseif ($CalculoIMC >= 27 && $CalculoIMC < 29.9)
                {
                    echo ("<br>");
                    echo ("<br>");
                    echo ("Tienes Sobrepeso Grado 2........");
                }
                elseif ($CalculoIMC >= 30 && $CalculoIMC < 34.9)
                {
                    echo ("<br>");
                    echo ("<br>");
                    echo ("Tienes Obesidad Grado 1........");
                }
                elseif ($CalculoIMC >= 35 && $CalculoIMC < 39.9)
                {
                     echo ("<br>"); 
                     echo ("<br>");
                     echo ("<br>");echo ("Tienes Obesidad Grado 2........");
                }
                elseif ($CalculoIMC >= 40 && $CalculoIMC < 49.9)
                {
                    echo ("<br>");
                    echo ("<br>");
                    echo ("Tienes Obesidad Grado 3 Morbida........");
                }
                else 
                {
                    echo ("<br>");
                    echo ("<br>");
                    echo ("Tienes Obesidad Grado 4 Extrema........");
                }

                   
        ?>



        <?php endif?>
    
    
    
    
    </main>

    <footer>
    
    
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>