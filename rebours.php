<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <style>
      
        @media screen and (max-width:700px){
            .card-body{
                font-size:15px;
            }
        }
        @media screen and (max-width:700px){
            .smalltext{
                font-size:12px;
            }
        }

    </style>

    <div class="">  
        <div class="container text-center">  
            <div class="col-md-12">  
                <h3 id="header" class="">Fermeture des votes dans :</h3>  
                <hr ALIGN="left" style="width:40%; margin:auto;">
            </div> 
            
            <div class="row justify-content-center pt-5"> 
 
                <div class=" card col tim" style="max-width: 6rem;background-color: #DDBD4C;">
                    <h3 class=" card-body days" id="day"></h3>
                    <div class="smalltext">Jours</div>
                </div>
                <div class="card col tim "style="max-width: 6rem;background-color: #DDBD4C;">
                    <h3 class=" card-body hours" id="hour"></h3>
                    <div class="smalltext">Heures</div>
                </div>
                <div class="card col tim "style="max-width: 6rem;background-color: #DDBD4C;">
                    <h3 class="card-body minutes" id="minute"></h3>
                    <div class="smalltext">Minutes</div>
                </div>
                <div class="card col tim "style="max-width: 6rem;background-color: #DDBD4C;">
                    <h3 class="card-body seconds" id="second"></h3>
                    <div class="smalltext">Secondes</div>
                </div>
            </div>
        </div>
    </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
       integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script>
        var deadline = new Date("june 30,2022 23:59:59").getTime();
        var x = setInterval(function() {
        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("day").innerHTML =days ;
        document.getElementById("hour").innerHTML =hours;
        document.getElementById("minute").innerHTML = minutes; 
        document.getElementById("second").innerHTML =seconds; 
            if (t < 0) {
                clearInterval(x);
                document.getElementById("header").innerHTML = "Votes terminés:";
                document.getElementById("day").innerHTML ='00';
                document.getElementById("hour").innerHTML ='00';
                document.getElementById("minute").innerHTML ='00' ; 
                document.getElementById("second").innerHTML = '00';
            }
        }, 1000);
        </script>
</body>
</html>