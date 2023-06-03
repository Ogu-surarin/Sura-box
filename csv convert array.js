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

function SearchInfoUser () {
    const ListInfoUser = GetCsvList("●●●●");
    const IdForm = document.getElementById("UserID");
    const OutputPosistion = document.getElementsByClassName("inline_div"); // 23 item

    const search_index = ListInfoUser.findIndex((element) => {
        return element.indexOf(IdForm.value) >= 0;
    });

    if(search_index != -1){
        for(let i=0; i < OutputPosistion.length; i++){
            OutputPosistion[i].innerHTML = ListInfoUser[search_index][i];
        };
    }else{
        alert("該当するユーザーはいません");
    };
};
