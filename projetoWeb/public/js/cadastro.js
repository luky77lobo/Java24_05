function v() {

    let form = document.form['formCadastro'];
    let ret = true;

    let msgErro = document.getElementById("msgErro");
    msgErro.innerHTML();

    if (form.Nome.value.trim() == "") {
        msgErro.innerHTML = "Preenche o campo nome <br>";

    }

    ret = false;

if (form.email.value.indexOf(".") == -1 ||
    form.email.value.indexOf("@") == -1 ||
    form.email.value.indexOf(".") - form.email.value.indexOf("@") == 1 || form.email.value.trim() == "") {

    msgErro.innerHTML = msgErro.innerHTML + "Preenche o campo email <br>"


    form.email.focus();

    ret = false;
}

if(form.senha.value.indexOf == ""){
    msgErro.innerHTML = "Preenche o campo senha <br>";
    ret = false;

}
return ret;
}
