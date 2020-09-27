<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPRING STEP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
        <h1 class="col-md-4"> TIENDA DE ZAPATOS SPRING STEP</h1>
        <br>
            <form action="ej3.php" method="POST">
                
                <div class="form-group col-md-4">
                        <label class="text-center" for="exampleFormControlSelect1">SELECCIONE SUS ZAPATOS</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="Zapatos">
                            <option> no seleccion</option>
                            <option>botas pantaneras</option>
                            <option>sandalias</option>
                            <option>pepitos</option>
                            <option>tres puntadas</option>
                            <option>zodiak</option>
                            <option>tenis</option>
                            <option>mocasines</option>
                            <option>chanclas</option>
                            <option>babuchas</option>
                            <option>alpargatas</option>
                        </select>
                        <div class="form-group mt-5">
                            <label for="inputZip">PARES DE ZAPATOS</label>
                            <input type="number" class="form-control" id="inputZip" placeholder ="cuantos pares" name = "pares">
                        </div>
                       
                </div>

                <button type="submit" class="btn btn-primary col-md-4" name="Totalice">Total</button>
              
            </form>
    </header>

    <main class=" col-md-4">

        <h2 class="mt-5">RESULTADOS</h2>

        <?php if(isset($_POST["Totalice"])):?>
        
        <?php

            $pares = $_POST["pares"];
            $valorPar = 30000;
            $Costototal = $pares*$valorPar;

            
            $producto= $_POST["Zapatos"];
            echo ($pares . ' ' . "pares de" . ' ' . $producto . " a----------------" . ' ' . $valorPar);

            echo ("<br>");
            echo ("<br>");

            echo ("Estos pares te salen a:" .' ' . $Costototal);
            
            echo ("<br>");
            echo ("<br>");

            if ($pares == 3)
            {
                $descuento = $Costototal*0.10;
                echo ("tienes un descuento del 10%");
            }
            elseif ($pares >= 4 & $pares <= 8)
            {
                $descuento = $Costototal*0.20;
                echo ("tienes un descuento del 20%");
            }
            elseif ($pares > 8)
            {
                $descuento = $Costototal*0.50;
                echo ("tienes un descuento del 50%");
            }
            else
            {
                $descuento = 0;
                echo ("No tienes ningun descuento");
            }

            $CostoFinal = $Costototal-$descuento;

            
            echo ("<br>");
            echo ("<br>");
            echo ("<br>");


            echo ("El costo total de tu compra es de:" . ' '  . $CostoFinal);
   
        
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