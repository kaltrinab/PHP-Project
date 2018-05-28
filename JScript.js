// JavaScript source code

//Pjesa qe e ndryshon backgroundin varesisht nga ora.
    var currentTime = new Date().getHours()
   
    if (currentTime >=0 && currentTime<4) {
        document.write('<body style="background-color:#ededed;">');
    }
       
    else if (currentTime >= 4 && currentTime<12) {
        document.write('<body style="background-color:#d4d4d4;">');
    }
       
    else if (currentTime >=12 && currentTime<18) {
        document.write('<body style="background-color:#efefef;">');
    }
 
    else if (currentTime >= 18 && currentTime<24) {
        document.write('<body style="background-color:#ececec;">');
    }
        
//Funksioni per validim te password-ave
  /*  function validatePasswords() {

        var first = document.getElementById("first");
        var second = document.getElementById("repeat");
        if (first.value =="") {
            alert("You didn't type a password!\n");
            return false;
        }
        if (first.value != second.value) {
            alert("The passwords you entered aren't the same!\n" + "Re-enter your password!");
            return false;
        }
        else return true;
    }*/
//Funksioni per validim te numrit te telefonit

    function validatePhone() {
        var nr = document.getElementById("Phone");
        var a=nr.value.search(/^\d{3}\/\d{3}\/\d{3}$/);
        if (a != 0) {
            alert("The number you entered is not valid.\n" + "Valid form: 012/345/678!")

            return false;
        }
        else return true;
    }

//Validimi i tekstit
    function validateText() {
        var txt = document.getElementById("Name");
        var a = txt.value.search(/^[a-zA-Z]{2,}$/);
            try {
                if (a != 0) throw "Invalid Text!";
            }
            catch (err) {
                alert(err);
            }
        }
   
 
    function validateText1() {
        var txt = document.getElementById("Surname");
        var a = txt.value.search(/^[a-zA-Z]{2,}$/);
        if (a != 0) {
            alert("Invalid Text.\n")

            return false;
        }
        else return true;
    }