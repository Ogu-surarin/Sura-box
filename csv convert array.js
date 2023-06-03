const GetCsvList = (FilePath) => {
    const req = new XMLHttpRequest();
    req.open("GET", FilePath, false);
    req.send();

    const arr = req.responseText.split("\n");
    const ResArr = [];
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == ""){
            break;
        }
        ResArr[i] = arr[i].split(",");
    }
    return ResArr;
}

function SearchInfoJK () {
    const list_info_JK = GetCsvList("●●●●");
    const IdForm = document.getElementById("Re_User_ID");
    const output_posistion = document.getElementsByClassName("inline_div"); // 23 item

    const search_index = list_info_JK.findIndex((element) => {
        return element.indexOf(IdForm.value) >= 0;
    });

    if(search_index != -1){
        for(let i=0; i < output_posistion.length; i++){
            output_posistion[i].innerHTML = list_info_JK[search_index][i];
        };
    }else{
        alert("該当するユーザーはいません");
    };
};
