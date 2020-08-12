function valutamath() {
    var dkk = document.getElementById("dkk").value;
    var valkurser = document.getElementById("valselect").value;

    document.getElementById("valuta").value = parseInt(dkk) / parseInt(valkurser) * 100;
}