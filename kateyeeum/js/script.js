/* global e */

//JS

var link_web = document.getElementById('project_web');
var link_info = document.getElementById('project_info');
var link_about = document.getElementById('ajax_about');
var content = document.getElementById('content');


var xhr = new XMLHttpRequest();
link_web.addEventListener('click', function(e){
    e.preventDefault();
    xhr.open("GET","web.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 &&
                xhr.status === 200){
            content.innerHTML = xhr.responseText;
        } //readyState
    }; //onreadystatechange
    xhr.send();
}); //function(e)

var xhr = new XMLHttpRequest();
link_info.addEventListener('click', function(e){
    e.preventDefault();
    xhr.open("GET","info.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState ===4 &&
                xhr.status === 200){
            content.innerHTML = xhr.responseText;
        } // readyState
    }; //onreadystatechange
    xhr.send();
}); //function(e)

var xhr = new XMLHttpRequest();
link_about.addEventListener("click",function(e){
    e.preventDefault();
    xhr.open("GET","about.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 &&
                xhr.status ===200){
            content.innerHTML = xhr.responseText;
        } // readyState
    }; //onreadystatechange
    xhr.send();
}); //function , addEventListener


//        LIGHT BOX    - INFO        //

function getAjax(url, Newcontent){
    var ajax = new XMLHttpRequest();
    ajax.open('GET', url);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200){
            Newcontent.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
} //sample

function openDetail(){
    var modal_content = document.getElementById('modal_project');
    console.log(modal_content);
    getAjax('modal_info.php', modal_content);
    console.log('works');

}