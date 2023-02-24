let menuBar = document.getElementById("menuBar")
let trigger2 = true
function menu(){

    if(!trigger2){
        menuBar.classList.add("hidden")
        trigger2 = true
    }else{
        menuBar.classList.remove("hidden")
        trigger2 = false
    }
}
