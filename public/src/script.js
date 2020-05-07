function ValidateEmail() 
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById('email').value))
    {
        return true;
    }
    else{
        return false;
    }
}
function ValidaName(e){
    e.preventDefault();
    document.getElementById('password').style.borderColor = 'green';
    document.getElementById('labelPassword').style.color = 'green';
    axios({
        url:rota,
        method: 'post',
        responseType: 'json',
        data: {
            name: document.getElementById('nome').value,
            password: document.getElementById('password').value,
            email: document.getElementById('email').value
        }
    }).then(function (response){
        if(response.data.name.success){
            document.getElementById('nome').style.borderColor = 'green';
            document.getElementById('labelNome').style.color = 'green';
            console.log(response);
        }
        else{
            document.getElementById('nome').style.borderColor = 'crimson';
            document.getElementById('labelNome').style.color = 'crimson';
            
        }
        if(response.data.email.success&&ValidateEmail()){
            document.getElementById('email').style.borderColor = 'green';
            document.getElementById('labelEmail').style.color = 'green';
            console.log(response);
        }
        else{
            document.getElementById('email').style.borderColor = 'crimson';
            document.getElementById('labelEmail').style.color = 'crimson'; 
        }
        if(response.data.name.success&&response.data.email.success&&ValidateEmail()){
            axios({
                url:rota2,
                method: 'post',
                responseType: 'json',
                data: {
                    name: document.getElementById('nome').value,
                    password: document.getElementById('password').value,
                    email: document.getElementById('email').value
                }
            }).then(function(response){
                console.log(response);
                window.location.href = response.data;
            })
        }
    })

}
if(document.getElementById('emailF') != null){
document.getElementById('emailF').onfocus = function(){
    document.getElementById('group').style.transition = 'all 0.3s ease-out';
    document.getElementById('black').style.opacity = '1';
    document.getElementById('group').style.transform = 'scale(2,2)';
}
document.getElementById('emailF').onblur = function(){
    document.getElementById('group').style.transition = 'all 0.3s ease-out';
    document.getElementById('black').style.opacity = '0';
    document.getElementById('group').style.transform = 'scale(1,1)';
}
}
function recovery(e){
    e.preventDefault();
    axios({
        url:rota3,
        method: 'post',
        responseType: 'json',
        data:{
            email: document.getElementById('email').value,
            __token: document.getElementById('email').value
        }
    }).then(function(response){
        if(response.data == 'enviado'){
            document.getElementById('alerta').children[0].attributes[0].value = "certo";
            document.getElementById('alerta').children[1].innerHTML = "Email enviado";
            document.getElementById('alerta').children[2].innerHTML = "O email foi enviado com sucesso";
            document.getElementById('alerta').style.opacity = "1";
            document.getElementById('alerta').style.visibility = "visible";
        }
        if(response.data == 'nEnviado'){
            document.getElementById('alerta').children[0].attributes[0].value = "errado";
            document.getElementById('alerta').children[1].innerHTML = "Email não enviado";
            document.getElementById('alerta').children[2].innerHTML = "O email ja possui pedido de recuperação";
            document.getElementById('alerta').style.opacity = "1";
            document.getElementById('alerta').style.visibility = "visible";
        }
        if(response.data == "falseE"){
            document.getElementById('alerta').children[0].attributes[0].value = "errado";
            document.getElementById('alerta').children[1].innerHTML = "Email não enviado";
            document.getElementById('alerta').children[2].innerHTML = "O email não possui cadastro";
            document.getElementById('alerta').style.opacity = "1";
            document.getElementById('alerta').style.visibility = "visible";
        }
        console.log(response);
    })
    document.getElementById('group').style.transition = 'all 0.3s ease-out';
    document.getElementById('black').style.opacity = '0';
    document.getElementById('group').style.transform = 'scale(1,1)';
    
}
function testPass(e){
    e.preventDefault();
    if(document.getElementById('password').value != document.getElementById('passwordR').value){
        document.getElementById('alerta').children[0].attributes[0].value = "errado";
        document.getElementById('alerta').children[1].innerHTML = "As senhas estão diferentes";
        document.getElementById('alerta').children[2].innerHTML = "Corrija as senhas informadas";
        document.getElementById('alerta').style.opacity = "1";
        document.getElementById('alerta').style.visibility = "visible";
        return false;
    }
    axios({
        url:rota4,
        method: 'post',
        responseType: 'json',
        data:{
            pass: document.getElementById('password').value,
            token: GET
        }
    }).then(function(response){
        if(response.data == 'certo'){
            document.getElementById('alerta').children[0].attributes[0].value = "certo";
            document.getElementById('alerta').children[1].innerHTML = "Senha alterada";
            document.getElementById('alerta').children[2].innerHTML = "Sua senha foi alterada com sucesso";
            document.getElementById('alerta').style.opacity = "1";
            document.getElementById('alerta').style.visibility = "visible";
        }
        if(response.data == 'errado'){
            document.getElementById('alerta').children[0].attributes[0].value = "errado";
            document.getElementById('alerta').children[1].innerHTML = "Sua senha não foi alterada";
            document.getElementById('alerta').children[2].innerHTML = "O token está indisponivel";
            document.getElementById('alerta').style.opacity = "1";
            document.getElementById('alerta').style.visibility = "visible";
        }
    }
    )
}
if(document.getElementById('close') != null){
document.getElementById("close").onclick = function(){
    document.getElementById("alerta").style.opacity = "0";
    document.getElementById("alerta").style.visibility = "hidden";
}
}
function validaLogin(e){
    e.preventDefault();
    axios({
        url:rota5,
        method: 'post',
        responseType: 'json',
        data: {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
            remember: document.getElementById("myCheck").checked,
        }
    }).then(function (response){
        if(response.data != 'errado'){
            window.location.href = response.data;
        }
        else{
            document.getElementById('alerta').children[0].attributes[0].value = "errado";
            document.getElementById('alerta').children[1].innerHTML = "Não foi possivel entrar";
            document.getElementById('alerta').children[2].innerHTML = "Senha ou Login incorretos";
            document.getElementById('alerta').style.opacity = "1";
            document.getElementById('alerta').style.visibility = "visible";
        }
        console.log(response);
    })
}