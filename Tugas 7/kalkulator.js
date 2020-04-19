var angka1;
var angka2;
var opr;
var hasil;
var opr_selector = false;
function ins(angka){
    var display = document.getElementById("dis").value;
	if (display == "0") {
		display = angka; 
	} else {
		display += angka;
	}
	document.getElementById("dis").value = display;
    
}
function opr_func(x){
    opr_selector = true;
    angka1 = parseFloat(document.getElementById("dis").value);
    opr = x;
    document.getElementById("dis").value = "0";
    
}
function cls(){
    document.getElementById("dis").value = "0";
    bil1 = 0;
	bil2 = 0;
	opr_selector = false;
}
function kalkulator(){
    if(opr_selector == true){
        var angka2 = parseFloat(document.getElementById("dis").value)
        switch(opr){
            case 1:
                hasil = angka1 * angka2;
                document.getElementById("dis").value= hasil;
                break;
            case 2:
                hasil = angka1 / angka2;
                document.getElementById("dis").value = hasil;
                break;
            case 3:
                hasil = angka1 + angka2;
                document.getElementById("dis").value = hasil;
                break;
            case 4:
                hasil = angka1 - angka2;
                document.getElementById("dis").value = hasil;
                break;
        }
        opr_selector = false
		hasil = 0;
		bil1 = 0;
        bil2 = 0;
    }
    
}
function koma() {
	var display = document.getElementById("dis").value;
	if (display.includes(".") == false) {
		display += ".";
	}
	document.getElementById("dis").value = display;	
}
function del(){
    var val = document.getElementById("dis").value;
    document.getElementById("dis").value = val.substr(0,val.length-1);
}