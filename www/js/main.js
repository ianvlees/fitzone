$(document).ready(function(){
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
    $(document).ready(function() {
        $('.fadeIn').fadeIn('slow');
    });
    $( ".naviconbox" ).click(function() {
      $(".navmobile > .navlist").slideToggle("easeOutQuint");
    });
    $( "navlist_item" ).click(function() {
      $(".navmobile > .navlist").slideToggle("easeOutQuint");
    });
    $( ".navbutton2" ).click(function() {
      $(".navigation").fadeToggle("easeOutQuint");
    });
    $( ".naviconbox" ).click(function() {
      $(".black").fadeToggle("ease");
    });
    $( ".navlogo" ).click(function() {
      window.location.href = 'index.html';
    }); 
    $( "#link1" ).click(function() {
      window.location.href = 'gallery.html';
    }); 
    $( ".home_button" ).click(function() {
      $(".home_content").fadeToggle("easeOutQuint");
      $(".home_overlay").fadeToggle("easeOutQuint");
    }); 
    $( "#foto1" ).hover(function() {
         $("#foto_tekst1").fadeToggle("ease");
    });
    $( "#foto2" ).hover(function() {
         $("#foto_tekst2").fadeToggle("ease");
    });
    $( "#foto3" ).hover(function() {
         $("#foto_tekst3").fadeToggle("ease");
    });
    $( "#foto4" ).hover(function() {
         $("#foto_tekst4").fadeToggle("ease");
    });
    $( "#arrow" ).click(function() {
      $("#group_more").slideToggle("easeOutQuint");
    });
    $( "#burlesque_button" ).click(function() {
      $("#burlesque_info").fadeToggle("ease");
    });
    $( "#hiit_button" ).click(function() {
      $("#hiit_info").fadeToggle("ease");
    });
    $( "#jazz_button" ).click(function() {
      $("#jazz_info").fadeToggle("ease");
    });
    $( "#hiphop_button" ).click(function() {
      $("#hiphop_info").fadeToggle("ease");
    });
    $( "#kids_button" ).click(function() {
      $("#kids_info").fadeToggle("ease");
    });
    $( "#cycling_button" ).click(function() {
      $("#cycling_info").fadeToggle("ease");
    });
    $( "#pilates_button" ).click(function() {
      $("#pilates_info").fadeToggle("ease");
    });
    $( "#abs_button" ).click(function() {
      $("#abs_info").fadeToggle("ease");
    });
    $( "#zumba_button" ).click(function() {
      $("#zumba_info").fadeToggle("ease");
    });
    $( "#ballet_button" ).click(function() {
      $("#ballet_info").fadeToggle("ease");
    });
    $( "#cross1" ).click(function() {
      $("#burlesque_info").fadeToggle("ease");
    });
    $( "#cross2" ).click(function() {
      $("#hiit_info").fadeToggle("ease");
    });
    $( "#cross3" ).click(function() {
      $("#jazz_info").fadeToggle("ease");
    });
    $( "#cross4" ).click(function() {
      $("#hiphop_info").fadeToggle("ease");
    });
    $( "#cross5" ).click(function() {
      $("#kids_info").fadeToggle("ease");
    });
    $( "#cross6" ).click(function() {
      $("#cycling_info").fadeToggle("ease");
    });
    $( "#cross7" ).click(function() {
      $("#pilates_info").fadeToggle("ease");
    });
    $( "#cross8" ).click(function() {
      $("#abs_info").fadeToggle("ease");
    });
    $( "#cross9" ).click(function() {
      $("#zumba_info").fadeToggle("ease");
    });
    $( "#cross10" ).click(function() {
      $("#ballet_info").fadeToggle("ease");
    });
    $(document).ready(function() {
    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    });

//Function to the css rule
function checkSize(){
    if ($(".navlist").css("display") == "block" ){
        // your code here
    }
    }
    function checkSize2(){
    if ($(".navlist").css("display") == "block" ){
        // your code here
    }
    }
    
});

                         


