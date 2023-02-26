<!doctype html>
<html lang="en">
  <head>
    <title>exo6</title>
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
    <h3>Formulaire</h3>

    <form  method="post">
    <div class="form-group">

        <input class="form-control" type="text" name = "nom" placeholder="nom">
        <br>
        <input class="form-control" type="date" name = "date" placeholder="date">
        <br>
        <input class="form-control" type="text" name = "prenom" placeholder="prenom">
        <br>
        <input   type="checkbox" name = "formalisme[]" >formalisme
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme1
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme2
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme3
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme4
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme5
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme6
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme7
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme8
        <br>
        <input type="checkbox" name = "formalisme[]" >formalisme9

        <br>

        <select class="form-control" name="selection" size="1">
            <option value="Mme"> Mme</option>
            <option value="Mr">Mr </option>
            <option value="Mlle">Mlle </option>




        </select>
        <br>
        <input class="form-control" type="password" name = "motdepasse" placeholder="mot-de-passe">
        <br>

        <input class="form-control" type="password" name = "motdepasse1" placeholder="mot-de-passe">

      
        <br>

        <input class="form-control" type="submit" name="enregistrer" value="enregistrer">





    </div >

    </form>
    <?php 
        $errors = array();

       if( isset($_POST["nom"]) And isset($_POST["date"]) And isset($_POST["prenom"])   And isset($_POST["selection"]) And isset($_POST["motdepasse"]) And isset($_POST["motdepasse1"])){
        $date=$_POST["date"];
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];

        $choix=$_POST["selection"];
        $pass=$_POST["motdepasse"];
        $pass2=$_POST["motdepasse1"];

        







        if(empty($nom ) || empty($date ) || empty($choix ) || empty($prenom ) || empty($pass ) || empty($pass2 )  ){
            $errors[] = "Le champs  est vide.";
            if($pass!=$pass2){
                $errors[] = " Les mots de passe ne sont pas identiques.";
    
    
            }
            if(empty($_POST['formalisme']
            )) 
            {
              echo("au moins un doit etre coche .");
            } 

        }





 
        else{
            var_dump($_POST);
            echo '<h3>tableau des info</h3>';
        echo '<div class="container mt-5">';
        echo '<div class="row">';
        echo '<div class="col-sm-4">';
        echo 'date';
        echo '<hr>';

        echo 'nom';
        echo '<hr>';

        echo 'prenom';
        echo '<hr>';

        echo 'selection';
        echo '<hr>';

        echo 'motdepasse';
        echo '<hr>';

        echo 'motdepasse1';






        echo '</div>';
        echo '<div class="col-sm-4">';
        echo $date;
        echo '<hr>';
        echo $nom;
        echo '<hr>';

        echo $prenom;
        echo '<hr>';

        echo $choix;
        echo '<hr>';

        echo $pass;
        echo '<hr>';

        echo $pass2;
        echo '</div>';
        echo '</div>';
        echo '</div>';


        }

        print_r($errors);

     }

    ?>

  </body>
</html>