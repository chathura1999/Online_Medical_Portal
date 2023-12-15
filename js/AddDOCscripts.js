var Fname =document.forms['form']['Fname'];
var MobileN =document.forms['form']['MobileN'];

var EmailN =document.forms['form']['EmailN'];

var Fname_error =document.getElementById('Fname_error');
var MobileN_error =document.getElementById('MobileN_error');
var EmailN_error =document.getElementById('EmailN_error');


Fname.addEventListener('textInput',Fname_Verify);
MobileN.addEventListener('textInput',MobileN_Verify);
EmailN.addEventListener('textInput',EmailN_Verify);


function validated(){
    if(Fname.value.length < 9){
        Fname.style.border ="1px solid red";
        Fname_error.style.display="block";
        Fname.focus();
        return false;
}
if(MobileN.value.length < 10){
    MobileN.style.border ="1px solid red";
    MobileN_error.style.display="block";
    MobileN.focus();
    return false;
}
if(EmailN.value.length < 9){
    EmailN.style.border ="1px solid red";
    EmailN_error.style.display="block";
    EmailN.focus();
    return false;
}
}


function Fname_Verify(){
    if(Fname.value.length >=8){
        Fname.style.border ="1px solid silver";
        Fname_error.style.display="none";
       
        return true;
    }
}

function MobileN_Verify(){
    if(MobileN.value.length >10){
        MobileN.style.border ="1px solid silver";
        MobileN_error.style.display="none";
       
        return true;
    }
}
function EmailN_Verify(){
    if(EmailN.value.length >=8){
        EmailN.style.border ="1px solid silver";
        EmailN_error.style.display="none";
       
        return true;
    }
}
