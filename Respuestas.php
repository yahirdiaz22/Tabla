<html>
    <title>
        Tablas de multiplicar
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <center>

    <body>
                
<?php    

       $puntos=0;
        
        $contador=$_GET["numero"];
        $rango=$_GET["rango"];
        $limite=$_GET["limite"];
        $Cantidad=0;
        echo '                
        <div class="container text-center">
        <div class="row text-center ">
        <div class=" col p-1 mb-2 bg-info text-dark"" </div>
        <p>Tabla</p>
        </div>
        <div class="col p-1 mb-2 bg-success text-white"">
        <p>Respuesta</p>
        </div>
        
        <div class="col p-1 mb-2 bg-info-subtle text-emphasis-info" ">
        <p>Respuesta correcta</p>
        </div>
        </div>
        </div>
        ';
        if($rango>$limite){
            $Cantidad=($rango-$limite)+1;
           
            for ($limite; $limite <=$rango ; $limite++) { 
                $resultados=$_GET["x".$limite];
                $multiplicacion= ($contador*$limite);
               
               
                if ($resultados==$multiplicacion) {
                    echo '
               
                    <div class="container text-center">
                    <div class="row">
                      <div class="col">
                       <div class="p-1 mb-2 bg-info text-dark"> '.$contador.'x'.$limite.' </div>

                      </div>
                      <div class="col">
                     <div class="p-1 mb-2 bg-success text-white">'.$resultados.'<i class="bi bi-check-circle"></i> </div>
                      
                      </div>
                      <div class="col">
                     <div class="p-1 mb-2 bg-info-subtle text-emphasis-info">'.$multiplicacion.'</div>

                        
                      </div>
                    </div>
                  </div>  ';
                    $puntos++;
                }
                else {
                    echo '
               
                    <div class="container text-center">
                    <div class="row">
                      <div class="col">
                      <div class="p-3 mb-2 bg-info text-dark"> '.$contador.'x'.$limite.' </div>

                      </div>
                      <div class="col">
                       <div class="p-3 mb-2  bg-danger text-white">'.$resultados.'<i class="bi bi-x-circle-fill"></i> </div>
                      </div>
                      <div class="col">
                   <div class="p-3 mb-2  bg-info-subtle text-emphasis-info">'.$multiplicacion.'</div>

                      </div>
                    </div>
                  </div>  ';
                   
                }
            }
            echo '<br> <h1>El puntaje es : '.$puntos.' de '.$Cantidad.'</h1>';

        }
        else if($limite>$rango){
            $Cantidad=($limite-$rango)+1;

            for ($rango; $rango <=$limite ; $rango++) { 
                $resultados=$_GET["x".$rango];
                $multiplicacion= ($contador*$rango);

                         if ($resultados==$multiplicacion) {
                          echo '
               
                          <div class="container text-center">
                          <div class="row">
                            <div class="col">
                             <div class="p-3 mb-2  bg-info text-dark"> '.$contador.'x'.$rango.' </div>
      
                            </div>
                            <div class="col">
                           <div class="p-3 mb-2  bg-success text-white">'.$resultados.'<i class="bi bi-check-circle"></i> </div>
                            
                            </div>
                            <div class="col">
                           <div class="p-3 mb-2 bg-info-subtle text-emphasis-info">'.$multiplicacion.'</div>
      
                              
                            </div>
                          </div>
                        </div>  ';  
                    
                    $puntos++;
                }
            
                    else {
                      echo '
               
                      <div class="container text-center">
                      <div class="row">
                        <div class="col">
                        <div class="p-3 mb-2 bg-info text-dark"> '.$contador.'x'.$rango .' </div>
  
                        </div>
                        <div class="col">
                         <div class="p-3 mb-2 bg-danger text-white">'.$resultados.'<i class="bi bi-x-circle-fill"></i> </div>
                        </div>
                        <div class="col">
                     <div class="p-3 mb-2 bg-info-subtle text-emphasis-info">'.$multiplicacion.'</div>
  
                        </div>
                      </div>
                    </div>  ';
                }
            }
            echo '<br> <h1>El puntaje es : '.$puntos.' de '.$Cantidad.'</h1>';
        }
        
?>
       
    </center>
</table>
    </body>
</html>