<!doctype html>
<html lang="en">
  <head>
    <title>exo5</title>
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
    <h3>Calculatrice</h3>
    <form method="post"  >
    <div class="form-group">
    <input class="form-control" type="number" name="op1" placeholder="entrer la premiere operande">
    <select class="form-control" name="op" >                       
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        </select> 
    <input class="form-control" type="number" name="op2" placeholder="entrer la deuxieme operande">
    <input class="form-control" type="submit" name="b" value="calculer">
    </div>
    </form>
    <?php 

        if (isset($_POST['op1']) And  isset($_POST['op']) And isset($_POST['op2'])){
            $o1=$_POST['op1'];
            $op=$_POST['op'];
            $o2=$_POST['op2'];
    echo("le resultat de l'operation est ".$o1.$op.$o2." = ");
    if ($op=="+") {
        echo $o1+$o2;
    } elseif ($op=="-") {
        echo $o1-$o2;
    } elseif ($op=="*") {
        echo $o1*$o2;
    } else {
        echo $o1/$o2;
    }
    }
    ?>
  </body>
</html>
