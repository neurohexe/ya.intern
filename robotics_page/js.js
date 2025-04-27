function buttonClicked() {
    console.log("ТЫК!");
    if (1 == 1) {
        btn.removeEventListener("click", buttonClicked);
        document.getElementById("text").innerHTML = "Hey!";
    }
}

var btn = document.getElementById("go-button");
btn.addEventListener("click", buttonClicked);