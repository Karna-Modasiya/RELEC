let name = document.getElementById('Name');
let pass = document.getElementById('Password');
let repass = document.getElementById('Repassword');
let email = document.getElementById('Email');
let phone = document.getElementById('Phone');

function validatename(){
    let exp = /([a-zA-Z]){2,50}/;
    if(!exp.test(name.value))
    {
        name.classList.add("error");
    }
    else{
        // emessage[0].style.display = "none";
        name.classList.remove("error");
        return 1;
    }
}

function validateemail(){
    let exp = /^([a-zA-Z0-9\.\-\_]+)@([a-zA-Z0-9]+)\.([a-zA-Z\.]){2,8}$/;
    if(!exp.test(email.value))
    {
        email.classList.add("error");
    }
    else{
        email.classList.remove("error");
        return 1;
    }
}

function validatephone(){
    let exp = /^\d{10}$/;
    if(!exp.test(phone.value))
    {
        phone.classList.add("error");
    }
    else{
        phone.classList.remove("error");
        return 1;
    }
}

function validatepass(){
    let exp1 = /^(?=.*[a-z])/;
    let exp2 = /^(?=.*[A-Z])/;
    let exp3 = /^(?=.*[0-9])/;
    let exp4 = /^(?=.*[!@#\$%\^&\*])/;
    if(!exp1.test(pass.value) || !exp2.test(pass.value) || !exp3.test(pass.value) || !exp4.test(pass.value) || String(pass.value).length < 4)
    {
        pass.classList.add("error");
    }
    else{
        pass.classList.remove("error");
        return 1;
    }
}

function validaterepass(){
    if(repass.value!=pass.value || pass.value == "")
    {
        repass.classList.add("error");
    }
    else{
        repass.classList.remove("error");
        return 1;
    }
}

function submitform()
{
    var a = validatename();
    var b = validateemail();
    var c = validatephone();
    var d = validatepass();
    var e = validaterepass();
    if(a==1 && b==1 && c==1 && d==1 && e==1)
    {
        document.getElementById("signup").submit();
    }
}
