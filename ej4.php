<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMINA POSTOBON</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>

        <form action = "ej4.php" method = "POST">
            <h3>NOMINA POSTOBON</h3>
            <div class="row">
                <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Nombre Trabajador" name = "trabajador">
                <div>
                <input type="number" class="form-control" placeholder="horas Semanales" name = "horas">
                </div>   
            </div>
            <button type="submit" class="btn btn-primary col-md-12 mt-5" name = "resultado">resultado</button>
        </form>
    
    </header>

    <main>
        
        <h4 class = "mt-5">RESULTADOS NOMINA</h4>
        
        <?php if(isset($_POST["resultado"])):?>
        
        <?php


            $NombreTrabajador = $_POST["trabajador"];
            $HorasLabor = $_POST["horas"];
            $ValorHoraSemanal = 20000;
            $HorasExtras = 25000;
            $TotalHorasExtra = $HorasLabor-40;
            
           

            echo ("El trabajador" . ' '. $NombreTrabajador);
            echo ("<br>");
            echo ("<br>");
            echo ("Esta semana Trabajo" . ' ' . $HorasLabor . ' ' . "horas");
            echo ("<br>");
            echo ("<br>");

            if($HorasLabor <= 40)
            {
                $ValorSemana = $ValorHoraSemanal*$HorasLabor;
                echo ("Su salario semanal es de " . ' ' . $ValorSemana);
                echo ("<br>");
                echo ("<br>");
                echo ("Se le paga hora a " . ' ' . $ValorHoraSemanal);
                
            }
            elseif ($HorasLabor > 40)
            {
                $ValorsemanaExtra = $TotalHorasExtra*$HorasExtras;
                echo ("Total horas adicionales" . ' ' .$TotalHorasExtra);
                echo ("<br>");
                echo ("<br>");
                echo ("Valor total horas adicionales es igual " . ' ' . $ValorsemanaExtra);
            }
            else
            {
                $ValorsemanaExtra = 0;
                $ValorSemana = 0;
            }

            $ValorTotalSemana = $ValorSemana+$ValorsemanaExtra;
            
            echo ("<br>");
            echo ("<br>");
            echo ("VALOR TOTAL SEMANA" . '  ' . $ValorTotalSemana); 
           

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