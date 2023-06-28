$(document).ready(function() {

// Scroll para seções 
 let navBtn = $('.nav-item');

//  let bannerSection = $('#parallax');
//  let aboutSection = $('#about-area');
//  let iframeSection = $('#iframe-area');

let bannerSection = document.getElementById('parallax')
 let aboutSection =  document.getElementById('about-area')
 let iframeSection =  document.getElementById('iframe-area')

 let scrollTo ='';
 $(navBtn).click(function(){
     let btnId = $(this).attr('id');

     if(btnId == 'about-menu'){
         scrollTo=aboutSection;
   
     }else if (btnId == 'iframe-menu'){
         scrollTo = iframeSection;
     }else {
         scrollTo=bannerSection
     }
     $([document.documentElement, document.body]).animate({
         scrollTop: $(scrollTo).offset().top - 70
 }, 1500);

     
 });
});
