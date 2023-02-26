<!doctype html>
<html lang="en">
  <head>
    <title>exo7</title>
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


    
      $errors = array();
      if( isset($_POST["nom"])  And isset($_POST["prenom"])   And isset($_POST["statut"]) And isset($_POST["montant"]) And isset($_POST["duree"])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $statut = $_POST['statut'];
        $montant = $_POST['montant'];
        $duree = $_POST['duree'];
     
      if (empty($nom) || empty($prenom)) {
        $errors[] = "Le nom et le prénom sont vides.";
        if (!is_numeric($montant)) {
            $errors[] = "Le montant  doit être un  réel.";
            if (!is_int($duree) || $duree < 6 || $duree > 300) {
                $errors[] = "La durée en mois doit être un entier entre 6 et 300.";
              }

          }


      }


      print_r($errors);
      if ($statut=="Salarie"){
        $taux= 0.5;
        $montant = $montant + $montant*$taux;
      }
      if ($statut=="Fonctionnaire"){
        $taux= 0.4;
        $montant = $montant + $montant*$taux;
      }
      if ($statut=="Profession libérale"){
        $taux= 0.6;
        $montant = $montant + $montant*$taux;
      }
      echo '<br>';
      echo $montant;
      if ($_POST['choix']=="oui"){
        $montant = $montant + $montant*$taux;

      }
      echo '<br>';

      echo $montant;
      echo '<br>';
      echo '<table class="table">';
      echo '<tr>';
      echo "<td>Date Ech</td>";
      echo "<td>Mensualite mad</td>";
      echo "<td>interet mad</td>";
      echo "<td>amortissement mad</td>";
      echo "<td>cap restant mad</td>";




  
  
      echo '</tr>';
      $interet=$montant*$taux;
      $amortissement=$montant-$interet;
      $caprestant=$montant-$amortissement;
      for($i=1;$i < $duree+1;$i++){
        echo '<tr>';
        echo "<td>01/$i/2023</td>";
        echo "<td>$montant</td>";
        echo "<td>$interet</td>";
        echo "<td>$amortissement</td>";
        echo "<td>$caprestant</td>";


        echo '</tr>';


      }

   
     



      }
    
    
    
    
    ?>
  </body>
</html>