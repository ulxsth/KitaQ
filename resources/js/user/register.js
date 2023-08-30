var num = 0;
function checkRdo(obj, cnt){
    if(num == cnt){
        obj.checked = false;
        num = 0;
    } else {
        num = cnt;
    }
}