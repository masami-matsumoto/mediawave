function formSwitch() {
    hoge = document.getElementsByName('maker')
    if (hoge[0].checked) {
        // 好きな食べ物が選択されたら下記を実行します
        document.getElementById('serviceList').style.display = "";
        document.getElementById('taskList').style.display = "none";
        var inputItem = document.getElementById("taskList").getElementsByTagName("input");
        for(var i=0; i<inputItem.length; i++){
        inputItem[i].checked = "";
        }
    } else if (hoge[1].checked) {
        // 好きな場所が選択されたら下記を実行します
        document.getElementById('serviceList').style.display = "none";
        var inputItem = document.getElementById("serviceList").getElementsByTagName("input");
        for(var i=0; i<inputItem.length; i++){
        inputItem[i].checked = "";
        }
        document.getElementById('taskList').style.display = "";
    } else {
        document.getElementById('serviceList').style.display = "none";
        var inputItem = document.getElementById("serviceList").getElementsByTagName("input");
        for(var i=0; i<selectItem.length; i++){
        inputItem[i].value = "";
        }
        document.getElementById('taskList').style.display = "none";
        var inputItem = document.getElementById("taskList").getElementsByTagName("input");
        for(var i=0; i<inputItem.length; i++){
            inputItem[i].checked = "";
        }
    }
}
window.addEventListener('load', formSwitch());