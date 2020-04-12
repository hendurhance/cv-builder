/*
 *   Copyright (c) 2020 
 *   All rights reserved.
 */

// Navbar scroll
$(window).scroll(function(){
   $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});