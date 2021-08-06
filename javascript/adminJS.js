function addLabel(){
    var i = document.getElementsByClassName("texts").length;

    var text = "text" + (i+1).toString();
    var file = "file" + (i+1).toString();


    var formular = document.getElementById("formular");


    var added = '<br><label class="texts"><b>Introduceti textul</b></label>' +
        '<input type="text" placeholder="Introduceti textul" name="' + text +'">' +

        '<label><b>Introduceti imaginea</b></label><br>' +
        '<input type="file" name="' + file + '">';

    formular.appendChild(added);

    /*
    formular.innerHTML = formular.innerHTML + '<br><label class="texts"><b>Introduceti textul</b></label>' +
        '<input type="text" placeholder="Introduceti textul" name="' + text +'">' +

        '<label><b>Introduceti imaginea</b></label><br>' +
        '<input type="file" name="' + file + '">';

     */
}


function show_password(){
    var x = document.getElementById("mypass");
    if(x.type === "password"){
        x.type = "text";
    }
    else{
        x.type = "password";
    }
}

function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }

    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}

function classNames(){
    var identities = document.getElementsByClassName("texts").length;

    createCookie("identities",identities.toString(),"1");

}