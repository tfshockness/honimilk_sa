/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Function for the menu.
  $(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});
//End function menu


var menu = document.getElementById('body');

window.addEventListener('scroll', function(){
    var scroll = menu.scrollTop;
    var nav = document.getElementById('nav');
    if(scroll <= 853){
        //Hide
        nav.classList.add('hide');
        nav.classList.remove('show');
    }else{
        //display
        nav.classList.add('show');
        nav.classList.remove('hide');
    }

});

//Contact Function
    var content = document.getElementById('contact_content');
    var submit = document.getElementById('submit');
    
function contact_email() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    if (name == '' || email == '' || message == ''){
        var error = document.getElementById('error');
        error.innerHTML = "You <b>must</b> enter all informations!";
        console.log("caindo dentro da validacao!");
    }else {
        var ajax = new XMLHttpRequest();
        ajax.open('GET', 'resources/sections/contact_response.php?name=' + name + '&email=' + email + '&message=' + message + '&submit=' + submit);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 2) {
                content.innerHTML = 'Sending Email...';
            }
            if (ajax.readyState == 4 && ajax.status == 200) {
                content.innerHTML = ajax.responseText;
            }

        };
        ajax.send();
    }
};

function send_email(){
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'resources/sections/contact.php', true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            content.innerHTML = ajax.responseText;
        }
    };
    ajax.send();
};