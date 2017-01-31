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


    
$(document).ready(function(){
    console.log('jquery working');
$('.click_project').click(function(e){
    var phpTag = "$infoProject['description']";
    $('body').css('overflow-y','hidden');  //hide scrollbar
    $('<div class="overlay"></div>')
            .css({
                'background-color' : '#000',
                'position' : 'fixed',
                'top' : 0,
                'left' : 0,
                'width' : '100%',
                'height' : '100%',
                'opacity' : 0
            })//css
            
            .animate({'opacity':0.5},'slow')
            .appendTo('body');
    $('<div class="lightbox"><p class="info_description">'+'\<?='+phpTag+'?\>'+'<p></div>')
            .hide()
            .appendTo('body');
    $('<img>')
            .attr('src',$(this).attr('href'))
            .load(function(){
                positionLightboxImage();
            })//load(function)
            .click(function(){
                removeLightbox();
            })//click(function)
            .appendTo('.lightbox');
            return false;
});//click(function)

function positionLightboxImage(){
    $('.lightbox')
            .center()
            .fadeIn();
}; // positionLightboxImage

function removeLightbox(){
    $('.overlay, .lightbox')
            .fadeOut('slow', function(){
                $(this).remove();
                $('body').css('overflow-y',auto);
            });//fadeout(function)
};// removeLightbox

jQuery.fn.center = function(){
  this.css('position','absolute');
  this.css('top',($(window).height() - this.height()) / 2 + $(window).scrollTop());
  this.css('left',($(window).width() - this.width()) / 2 + $(window).scrollLeft());
  return this;
};//function
    
    
})