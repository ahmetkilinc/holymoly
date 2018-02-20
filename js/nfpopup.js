$('.buttonnf').on('click', function(e) {
	
      $('.popup').toggleClass("close"); 
      $('.buttonnf').toggleClass("buttonnf-closed");
      e.preventDefault();
    });