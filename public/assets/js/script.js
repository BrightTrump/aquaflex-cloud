$(document).ready(function(){

  $('.scroll-top').hide();
  
  /*---------- Mobile-Navbar Toggler ----------*/
  let sideBar = document.querySelector('.mobile-menu');
  let searchBtn = document.querySelector("#search");
  let searchContainer = document.querySelector(".search-container");
  let menuBar = document.querySelector(".header #menu-btn");

  menuBar.onclick = () =>{
    searchContainer.classList.remove("active");
    sideBar.classList.toggle('active');
    menuBar.classList.toggle("fa-times");
    $(".nav-link .main-nav-link").removeClass("active");
    $(".nav-link .sub-nav-link").removeClass("active").slideUp()
    $(".nav-link .main-nav-link i").removeClass("fa-minus").addClass("fa-plus");
  }
  
  // On Load/Scroll
  $(window).on('load scroll',function(){
    sideBar.classList.remove('active');
    menuBar.classList.remove("fa-times");
    searchContainer.classList.remove("active");
    $(".nav-link .main-nav-link").removeClass("active");
    $(".nav-link .sub-nav-link").removeClass("active").slideUp()
    $(".nav-link .main-nav-link i").removeClass("fa-minus").addClass("fa-plus");	

    /*--------------- Sticky Header ---------------*/
    if($(window).scrollTop() > 68){
      $('.header').addClass('active');
    }else{
      $('.header').removeClass('active');
    }

    /*--------------- SEARCH TOGGLER ---------------*/
    searchBtn.onclick = () => {
      sideBar.classList.remove('active');
      searchContainer.classList.toggle("active");
    }

    /*--------------- Scroll-Top ---------------*/
    if ($(this).scrollTop() > 100) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }

  
  });

  /*--------------- Scroll-Top ---------------*/
  function loader(){
    document.querySelector(".pre-loader").classList.add('fade-out');
  }

  function fadeOut(){
    setInterval(loader, 1000)
  }

  window.onload = fadeOut;

});


