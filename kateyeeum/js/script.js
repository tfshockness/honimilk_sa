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


function openDetail(id){
    var modal_content = document.getElementById('modal_project');
    xhr.open("GET","modal_info.php?id="+id,true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 &&
           xhr.status === 200){
                modal_content.innerHTML = xhr.responseText;
           }//readyState
    } // onreadystatechange
    xhr.send();
};

function closeModal(){
    modal_content.classList.add('hide');
 };