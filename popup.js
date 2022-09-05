function calcul(){
    var prix = Number(document.getElementById("prix").value);
    var total = Number(prix*100);
   document.getElementById("total").value = total;
}