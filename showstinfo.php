<!doctype html>
<html lang="en">
  <head>
    <title>exo1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
        $code= array("ET123" => array("nom"=>"AB","prenom"=>"AC","moyenne"=>17),"ET676"=>array("nom"=>"BC","prenom"=>"BD","moyenne"=>12),"ET998"=>array("nom"=>"CD","prenom"=>"CE","moyenne"=>9),"ET764"=>array("nom"=>"DE","prenom"=>"DF","moyenne"=>16.5));

    if ($_GET['code']=="ET123"){
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    echo '<div class="col-sm-4">';
    echo  '<h3>keys</h3>';
     for( $i=0;$i<count(array_keys($code["ET123"]));$i++){
        echo array_keys($code["ET123"])[$i].'<br>';
        echo '<hr>';


    }
    
    echo '</div>';
    echo '<div class="col-sm-4">';
    echo '<h3>values</h3>';
     for( $i=0;$i<count(array_values($code["ET123"]));$i++){
        echo array_values($code["ET123"])[$i].'<br>';
        echo '<hr>';


    }

    echo '</div>';


    echo '</div>';

    echo '</div>';
  }
  if ($_GET['code']=="ET676"){
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    echo '<div class="col-sm-4">';
    echo  '<h3>keys</h3>';
     for( $i=0;$i<count(array_keys($code["ET676"]));$i++){
        echo array_keys($code["ET676"])[$i].'<br>';
        echo '<hr>';


    }
    
    echo '</div>';
    echo '<div class="col-sm-4">';
    echo '<h3>values</h3>';
     for( $i=0;$i<count(array_values($code["ET676"]));$i++){
        echo array_values($code["ET676"])[$i].'<br>';
        echo '<hr>';


    }

    echo '</div>';


    echo '</div>';

    echo '</div>';
  }
  if ($_GET['code']=="ET998"){
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    echo '<div class="col-sm-4">';
    echo  '<h3>keys</h3>';
     for( $i=0;$i<count(array_keys($code["ET998"]));$i++){
        echo array_keys($code["ET998"])[$i].'<br>';
        echo '<hr>';


    }
    
    echo '</div>';
    echo '<div class="col-sm-4">';
    echo '<h3>values</h3>';
     for( $i=0;$i<count(array_values($code["ET998"]));$i++){
        echo array_values($code["ET998"])[$i].'<br>';
        echo '<hr>';


    }

    echo '</div>';


    echo '</div>';

    echo '</div>';
  }
  if ($_GET['code']=="ET764"){
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    echo '<div class="col-sm-4">';
    echo  '<h3>keys</h3>';
     for( $i=0;$i<count(array_keys($code["ET764"]));$i++){
        echo array_keys($code["ET764"])[$i].'<br>';
        echo '<hr>';


    }
    
    echo '</div>';
    echo '<div class="col-sm-4">';
    echo '<h3>values</h3>';
     for( $i=0;$i<count(array_values($code["ET764"]));$i++){
        echo array_values($code["ET764"])[$i].'<br>';
        echo '<hr>';


    }

    echo '</div>';


    echo '</div>';

    echo '</div>';
  }
  

    ?>
    

  </body>
</html>