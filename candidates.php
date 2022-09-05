<?php
    include('header.php');
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>candidates</title>
</head>
<body>


<div class="pt-5">
    <?php
        include('rebours.php'); 
    ?>
</div>
<div class="row mr-auto text-center pt-5">
    <div class=" col-md-3 card mx-auto " style="width: 25rem;">
        <img src="images/miss1.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Candidate Numéro ...</h5>
        <p class="card-text">Mami nyanga de koumassi</p>
                
        <div>
            <p>100votes</p>
        </div>
       
        <!-- Button trigger modal -->
<button type="button" class="btn" data-toggle="modal" data-target="#paiement">
<i class="fas fa-vote-yea"></i> je vote pour elle
</button>

<!-- Modal -->
<div class="modal fade" id="paiement" tabindex="-1" role="dialog" aria-labelledby="Paiement" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NomDeLaCandidate">Votez pour la candidate No:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container text-center">
                    
                    <hr>
                    <p>MANMI NYANGA DE KOUMASSI</p>
                    <p>Déjà 650 votes</p>
                    <form class="form-control">
                        <input type=" number" class="form-control form-control-lg" id="prix" placeholder="Nombre de vote" name="" onkeyup="calcul(this.value)" value="">
                         * <input type="" class="form-control form-control-lg" name="" value="100"  readonly="readonly">
                         = <input type="" id="total" class="form-control form-control-lg" placeholder="Total"  value=""  readonly="readonly"><br>

                        <input class="btn-primary form-control form-control-lg" type ="submit" value="valider">
                    </form>
        
        </div>
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>


    </div>
            
    </div>

</div>
<div class="pt-5">
<?php
        include('footer.php'); 
 ?>
</div>
<script>
    function calcul(){
    var prix = Number(document.getElementById("prix").value);
    var total = Number(prix*100);
   document.getElementById("total").value = total;
}
</script>
 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>