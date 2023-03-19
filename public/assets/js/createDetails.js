function tambahDetail() {
    let containDetails = document.getElementById("contain_details")
    let formDetails = document.getElementsByName("form_details")

    // if(formDetails.length > 1)

    for(let i = 0; i < 6; i++){
        containDetails.innerHTML = `<div class="mt-3" name="form_details">
        <hr class="my-3">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center justify-between gap-3">
                <input type="text" name="judul_detail" placeholder="Judul Detail" class="input-box-primary w-full">
                

                <input type="text" name="isi_detail" placeholder="Isi Detail" class="input-box-primary w-full">
                
            </div>

            <p  class="flex items-center justify-center cursor-pointer text-purple-700 w-6 h-6 hover:text-white hover:bg-purple-700 transition-colors rounded-full border-2 border-purple-700 active:bg-purple-800">x</p>
        </div>
    </div>` 
    }
}
