<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACIONES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
        
        <form class = "mt-5" action = "ej1.php" method = "POST">
            <h1 class = "text-center">OPERADORES</h1>
            <div class="form-row mt-5">
                <div class="col">
                    <input type="decimal" class="form-control" placeholder="Ingrese Valor1" name = "Valor1">
                </div>
                <select class="form-control" id="exampleFormControlSelect1" name = "Operaciones">
                    <option value = "+">+</option>
                    <option value = "-">-</option>
                    <option value = "*">*</option>
                    <option value = "/">/</option>
                </select>
                <div class="col">
                    <input type="decimal" class="form-control" placeholder="Ingrese Valor2" name = "Valor2">
                </div>
            </div>
            <div class = "text-center">
            <button type="submit" class="text-center btn btn-primary col-md-2 mt-5" name = "Resultado">Resultados</button>
            </div>
        </form>
    
    
    </header>

    <main>

        <h2 class="text-center mt-5">RESULTADOS</h2>

        <?php if(isset($_POST["Resultado"])):?>
        <?php 
        
            $Operador = $_POST["Valor1"];
            $Operador2 = $_POST["Valor2"];
            $operacionesFinal = $_POST["Operaciones"];

            if($operacionesFinal == "+")
            {
                $Resultados = $Operador+$Operador2;
                echo ("El Resultado de la Suma es" . ' ' . $Resultados);
            }
            elseif ($operacionesFinal == "-")
            {
                $Resultados = $Operador-$Operador2;
                echo ("El Resultado de la Resta es" . ' ' . $Resultados);
            }
            elseif ($operacionesFinal == "*")
            {
                $Resultados = $Operador*$Operador2;
                echo ("El Resultado de la Multiplicacion es" . ' ' . $Resultados);
            }
            else
            {
                $Resultados = $Operador/$Operador2;
                echo ("El Resultado de la Division es" . ' ' . $Resultados);
            }

        ?>
        <?php endif?>
    
    </main>

    <footer>
    
    