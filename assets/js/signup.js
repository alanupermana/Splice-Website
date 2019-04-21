function manage(txt) {
    var bt = document.getElementById('btSubmit');
    if (txt.value != '') {
        bt.disabled = false;
    }else if(txt2.value != ''){
        bt.disabled = false;
    }else if(txt3.value != ''){
        bt.disabled = false;
    }else if(txt4.value != ''){
        bt.disabled = false;
    }else if(txt5.value != ''){
        bt.disabled = false;
    }
    else {
        bt.disabled = true;
    }
}
