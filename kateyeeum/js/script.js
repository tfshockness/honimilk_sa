//JS

var link_web = document.getElementById('project_web');
var content = document.getElementById('content');

var xhr = new XMLHttpRequest();
link_web.addEventListener("click",function(){
    xhr.open("GET","web.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 &&
                xhr.status === 200){
            content.innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});