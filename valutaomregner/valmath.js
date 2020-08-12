function valutamath() {
    var dkk = document.getElementById('dkk').value;
    var valkurser = document.getElementById('valselect').value;
    var udregning = parseInt(dkk) / parseInt(valkurser) * 100;
    document.getElementById('valuta').value = udregning.toFixed(2);
}

function valutatodkk() {
    var dkk = document.getElementById('dkk').value;
    var valkurser = document.getElementById('valselect').value;
    var udregning = parseInt(dkk) * parseInt(valkurser) / 100;
    document.getElementById('valuta').value = udregning.toFixed(2) +" "+ "DKK" ;
}