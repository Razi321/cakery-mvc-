function bigger(x) {
    x.style.height = "45%";
    x.style.width = "45%";
}

function normal(x) {
    x.style.height = "38%";
    x.style.width = "38%";
}

function myFunction() {
    alert("Hello! I am an alert box!");
}

function controleMDP(mdp) {
    if (mdp.value.length < 8) {
        alert("password must at least contain 8 caracteres");

        return false;
    } else {
        return true;
    }
}

function controlecin(cin) {
    if (cin.value.length < 8) {
        alert("cin must at least contain 8 caracteres");
        return false;
    } else {
        return true;
    }
}

function controlenom(nom) {
    if (nom.value.length < 4) {
        alert("name too short");

        return false;
    } else {
        return true;
    }
}

function controlephone(phone) {
    if ((isNaN(phone.value) == true) || (phone.value.length !== 8)) {
        alert("phone number most be contain 8 numbers");

    } else {
        return true;
    }
}

function logintest(nom, cin, mdp1, phone, check1) {
    var test = true;
    if (!controlenom(nom)) {
        test = false;
    } else if (!controlecin(cin)) {
        test = false;
    } else if (!controleMDP(mdp1)) {
        test = false;
    } else if (!controlephone(phone)) {
        test = false;
    } else if (!check1.checked) {
        alert("first you have to read the terms and agree");
        test = false;
    }
    return test;
}

