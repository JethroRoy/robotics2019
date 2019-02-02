function home() {
    if(document.getElementById("background-img").getAttribute("alt").equals("Home img") == false) {
        var home = document.createElement("img");
        home.setAttribute("src", '../img/vanier.jpg');
        home.setAttribute("class", "background");
        home.setAttribute("alt", "Home img");
        document.getElementById("background-img").appendChild(home);
    }
}

function vanier() {
    if(document.getElementById("background-img").getAttribute("alt").equals("Vanier img") == false) {
        var vanier = document.createElement("img");
        vanier.setAttribute("src", '../img/vanier-front.jpg');
        vanier.setAttribute("class", "background");
        vanier.setAttribute("alt", "Vanier img");
        document.getElementById("background-img").appendChild(vanier);
    }
}
