let dropdown = document.getElementsByClassName("dropdown")
let trigger = document.getElementById("trigger")
let btnTrigger = document.getElementsByClassName("btnTrigger")

for(i = 0; i < btnTrigger.length; i++){
    btnTrigger[i].addEventListener("click", ()=>{
        if(!trigger.checked){
            trigger.checked = true
            dropdown[1].classList.add("hidden")
            dropdown[0].classList.add("hidden")
        }else{
            trigger.checked = false
            dropdown[1].classList.remove("hidden")
            dropdown[0].classList.remove("hidden")
        }
    })
}
