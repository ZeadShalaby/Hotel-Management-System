  // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("navbar").style.padding = "5px 5px";
      document.getElementById("logo").style.fontSize = "20px";
    } else {
      document.getElementById("navbar").style.padding = "7px 5px";
      document.getElementById("logo").style.fontSize = "20px";
    }
  }