<!doctype html>
<html lang="en">
  <head>
    <title>exo8</title>
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
    <form  method="post" action="register-exo8.php">
    <div class="form-group">

            <input class="form-control" type="text"  name="nom" placeholder="nom"><br><br>
            <input class="form-control" type="text"  name="prenom" placeholder="prenom"><br><br>
            <input class="form-control" type="date"  name="naissance" placeholder="naissance"><br><br>
            <input class="form-control" type="number"  name="salaire" placeholder="salaire"><br><br>
            <input class="form-control" type="number"  name="montant total" placeholder="montant total"><br><br>
            <select class="form-control"  name="statut" placeholder="list">
              <option value="Salarie">Salarie</option>
              <option value="Fonctionnaire">Fonctionnaire</option>
              <option value="Profession libérale">Profession libérale</option>
            </select><br><br>
            <input class="form-control" type="number"  name="montant"  placeholder="montant"><br><br>
            <input class="form-control" type="number"  name="duree" max="300"  placeholder="duree"><br><br>
            <input  type="checkbox"  name="choix[]" checked>oui<br><br>
            <input  type="checkbox"  name="choix[]" >non<br><br>

            <input class="form-control" type="submit" name="valider" value="Valider">
    </div>
    </form>
  </body>
</html>
