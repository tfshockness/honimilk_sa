/* global e */

//JS

var content = document.getElementById('content');
var each_project = document.getElementsByClassName('each_project');


var xhr = new XMLHttpRequest();
each_project.addEventListener('click', function(e){
    e.preventDefault();
    xhr.open("GET","detail_web.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 &&
                xhr.status === 200){
            content.innerHTML = xhr.responseText;
        } //readyState
    }; //onreadystatechange
    xhr.send();
}); //function(e)


//        WEB DETAILS       //

function openDetailWeb(id){
    xhr.open("GET","detail_web.php?id="+id,true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 &&
           xhr.status === 200){
                content.innerHTML = xhr.responseText;
           }//readyState
    } // onreadystatechange
    xhr.send();
};


//        OPEN WEB          //

function openWork(){
    xhr.open("GET","work.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 &&
           xhr.status === 200){
            content.innerHTML = xhr.responseText;
        }//readyState
    }//onreadystatechange
    xhr.send();
}


//        OPEN STUDY        //

function openStudy(){
    xhr.open("GET","study.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 &&
           xhr.status === 200){
            content.innerHTML = xhr.responseText;
        }//readyState
    }// onreadystatechange
    xhr.send();
}