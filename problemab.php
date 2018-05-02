<?php 
require_once ("cliente.php");

$vector = array();

$vector[] = new Cliente ("Julio", 0);
$vector[] = new Cliente ("Angel",1);
$vector[] = new Cliente ("Sonia",32);


$p1 = new Pedido ("2018-04-01", 100);
$vector[0]->altaPedido( new Pedido("2018-04-02","Pepe", 50) );
$vector[0]->altaPedido ($p1);

$vector[1]->altaPedido( new Pedido("2018-04-05", "María",150) );
$vector[1]->altaPedido( new Pedido("2018-04-04","Lidia", 250) );

$vector[2]->altaPedido( new Pedido("2018-04-06","Ana", 300) );
$vector[2]->altaPedido( new Pedido("2018-04-07","Olga",400) );

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>

  <body>

        <header>
            <img src= "logo1.jpg" alt="logo" width="100" height="50"position="right"> 
        </header> 

        <div>
            <div class="container" id="destacado">
                <div class="row">
                    <div class="col-md-3">
                        <form>
                            <button type="button" class="btn btn-sm btn-danger">Rellenar formulario</button>
                            <a  href="#" target="_blank"></a>
                        </form>
                    
                    </div>
                    <div>
                        <div class= "col-md-9">
                            <ol>
                                <?php

                                    for ($i=0; $i < count($vector); $i++) { 
                                    echo "<li>";
                                    echo $vector[$i]->getNombre()." - ";
                            
                                    echo $vector[$i]->getEdad();
                                    echo ($vector[$i]->getEdad() == 1) ? " año" : " años";
                                    echo " - ";
                            
                                    echo $vector[$i]->getImporteTotal()." €";
                                    echo "</li>";
                                }

                            ?> 
                       
                            </ol>
                           
                        </div>
                    </div>
                </div>   
            </div>  
        </div>  
        <div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>    
        </div>
        <div>
            <p id="red">Este es mi primer párrafo</p>
            <p>Este es mi segundo párrafo</p>
            <p>Este es mi tercer párrafo</p>
        </div>
    </body>

    <footer>
        <p><strong>Maricarmen</strong></p>
    </footer>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
<footer>

</footer>
</html>