
<!doctype html>
<html lang="en">
  <head>
    <title>exo4</title>
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
        <input class="form-control" type="email" name = "email" placeholder="email">
        <br>
        <input class="form-control" type="text" name = "prenom" placeholder="prenom">
        <br>
        <input class="form-control" type="text" name = "objet" placeholder="objet">
        <br>
        <select class="form-control" name="selection" size="1">
            <option value="apres"> apres</option>
            <option value="avant">avant </option>



        </select>
        <br>
        <textarea class="form-control" name= "message" rows="4" cols="10"> </textarea>
        <br>

        <input class="form-control" type="submit" value="enregistrer">




    </div>
    </form>
    <?php 
    var_dump($_POST);
    ?>
</body>
</html>