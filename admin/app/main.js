function _(el) {
    return document.getElementById(el);
    
}

function ajax_data(php_file,el, send_data){
    _(el).innerHTML="Loading..";

    var hr = new XMLHttpRequest();
    hr.open('POST',php_file, true);
    hr.setRequestHeader("Content-type","application/x-wwwwform-urlencoded");

    hr.onreadystatechange = function(){
        if (hr.readyState == 4 && hr.Status == 200){
            _(el).innerHTML = hr.responseText;
        }
    };
}

function progress_page() {
    ajax_data("./progress.php","body", null);
    
}