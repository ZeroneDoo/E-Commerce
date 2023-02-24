let containDropdown = document.getElementsByClassName("dropdown")
var trigger = true
function dropdown(){
    if(!trigger){
        containDropdown[0].classList.add("hidden")
        containDropdown[1].classList.add("hidden")
        trigger = true
    }else{
        containDropdown[0].classList.remove("hidden")
        containDropdown[1].classList.remove("hidden")
        trigger = false
    }

}