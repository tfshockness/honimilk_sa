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
//Create the logic for put active class on the menu. (NEED TO DO IT)
var body = document.getElementById('body');
var skills = document.getElementById('li_skills');
var qualifications = document.getElementById('li_qualifications');
var career = document.getElementById('li_career');
var portifolio = document.getElementById('li_portifolio');
var contact = document.getElementById('li_contact');

window.addEventListener('scroll', function(){
    var scroll = body.scrollTop;
    var nav = document.getElementById('nav');
    if(scroll <= 825){
        //Hide
        nav.classList.add('hide');
        nav.classList.remove('show');
    }else{
        //display
        nav.classList.add('show');
        nav.classList.remove('hide');
    }
    if(scroll >= 1118 ){
        skills.classList.add('skills_active');
        qualifications.classList.remove('qualifications_active');
        career.classList.remove('career_active');
        portifolio.classList.remove('portifolio_active');
        contact.classList.remove('contact_active');
    }
    if(scroll >= 1580){
        qualifications.classList.add('qualifications_active');
        skills.classList.remove('skills_active');
        career.classList.remove('career_active');
        portifolio.classList.remove('portifolio_active');
        contact.classList.remove('contact_active');
        
    }
    if(scroll >= 2857){
        career.classList.add('career_active');
        qualifications.classList.remove('qualifications_active');
        skills.classList.remove('skills_active');
        portifolio.classList.remove('portifolio_active');
        contact.classList.remove('contact_active');
    }
        if(scroll >= 3420){
        career.classList.remove('career_active');
        qualifications.classList.remove('qualifications_active');
        skills.classList.remove('skills_active');
        portifolio.classList.add('portifolio_active');
        contact.classList.remove('contact_active');
    }
        if(scroll >= 3960){
        career.classList.remove('career_active');
        qualifications.classList.remove('qualifications_active');
        skills.classList.remove('skills_active');
        portifolio.classList.remove('portifolio_active');
        contact.classList.add('contact_active');
    }
});

//End function menu
//Top Fixed Function
window.addEventListener('scroll', function(){
   var top_btn = document.getElementById('top');
   var scroll = body.scrollTop;
   
   if(scroll > 800){
       top_btn.classList.remove('hide');
       top_btn.classList.add('show');
   }else{
       top_btn.classList.remove('show');
       top_btn.classList.add('hide');
   }
});


//Contact Function
    var content = document.getElementById('contact_content');
    var submit = document.getElementById('submit');
    
function contact_email() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    if (name === '' || email === '' || message === ''){
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