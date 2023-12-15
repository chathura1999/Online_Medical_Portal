function enableButton (){
	if (document.getElementById("check").checked){
		document.getElementById("buttonPay").disabled = false; 
	}
	else{
		document.getElementById("buttonPay").disabled = true;
	}
}