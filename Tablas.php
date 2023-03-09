<!DOCTYPE html>
<html>
<center>

    <head>
        <tittle> Procesando el formulario </tittle>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head> 
<body>       
    
        <form action = "Respuestas.php" method="get">
            <?php
            
            $numero=$_GET["numero"];
            $rango=$_GET["rango"];
            $limite=$_GET["limite"];

            echo ' <input class="form-control "type = "hidden"  id= "numero" name="numero" value="'.$numero.'">';
            echo ' <input class="form-control "type = "hidden"  id= "rango" name="rango" value="'.$rango.'">';
            echo ' <input class="form-control "type = "hidden"  id= "limite" name="limite" value="'.$limite.'">';
              echo "<br>";

              
              
if ($rango > $limite) {
    
    for ($limite; $limite <= $rango; $limite++) { 
        
        echo '<label>'.$numero.' X '.$limite.' </label> <br>
        <input type="text" id="X"'.$limite.'"
        name="x'.$limite.'"
        value=""><br>';
    }

     }
     else if ($rango< $limite) 
     {for ($rango; $rango <= $limite; $rango++) { 
        echo '<label>'.$numero.' X '.$rango.' </label> <br>
        <input type="text" id="X"'.$rango.'"
        name="x'.$rango.'"
        value=""><br>';
    }
     }
            
            
        ?><br><br> 
            
            
            <div class="mb-3"></div>

            <input type="submit" value="Generar"  class="btn btn-outline-primary">

           
        </form>
        <center>
    </div>
</body>
</html>