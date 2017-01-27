//JS

var link_web = document.getElementById('project_web');
var link_info = document.getElementById('project_info');
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