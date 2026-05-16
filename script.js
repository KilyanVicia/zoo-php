let el1, el2, mode = "sombre";

el1 = document.getElementById("clair");
el2 = document.getElementById("sombre");
el1.addEventListener('click', choixMenu);
el2.addEventListener('click', choixMenu);

function choixMenu(){
	if (mode == "sombre") {
        document.querySelector("header").style.backgroundColor = "rgb(252, 246, 227)"; 
        document.querySelector("h1").style.color = "black";
        document.getElementById("l1").style.color = "black";
        document.getElementById("l2").style.color = "black";
        mode = "clair";
    }
    else {
        document.querySelector("header").style.backgroundColor = "rgb(33,45,37)"; 
        document.querySelector("h1").style.color = "white";
        document.getElementById("l1").style.color = "white";
        document.getElementById("l2").style.color = "white";
        mode = "sombre";
    }
}