function showalert() {
    if (document.getElementById("alert").classList.contains("hide")) {
        document.getElementById("alert").classList.replace("hide", "show")
    }
    else {
        document.getElementById("alert").classList.replace("show", "hide")
    }
}

function showtost() {
    if (document.getElementById("liveToast").classList.contains("hide")) {
        document.getElementById("liveToast").classList.replace("hide", "show")
    } else {
        document.getElementById("liveToast").classList.replace("show", "hide")
    }
}

function toasttime() {
    setInterval(myTimer, 1);

    function myTimer() {
        const d = new Date();
        document.getElementById("toasttime").innerHTML = d.toLocaleTimeString();
    }

}

function wishlist(){
    if (document.getElementById("heart").classList.contains("fa-heart-o")) {
        document.getElementById("heart").classList.replace("fa-heart-o", "fa-heart")
    } else {
        document.getElementById("heart").classList.replace("fa-heart", "fa-heart-o")
    }

    
}