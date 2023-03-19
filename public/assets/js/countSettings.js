let inputCount = document.getElementsByName("inputCount");
let btnTambah = document.getElementsByName("btnTambah");
let btnKurang = document.getElementsByName("btnKurang");

for(let i = 0; i < inputCount.length; i++)
{
    btnTambah[i].addEventListener("click",()=>{
        let intValue = parseInt(inputCount[i].value);
        return inputCount[i].value = intValue + 1;
    })

    btnKurang[i].addEventListener("click", ()=>{
        let intValue = parseInt(inputCount[i].value);
        if(intValue > 0)
        {
            return inputCount[i].value = intValue - 1;
        }
    })
}