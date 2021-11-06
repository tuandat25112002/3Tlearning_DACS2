window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.fontSize = "15px";
    document.getElementById("navbar").style.padding = "10px 10px";
     document.getElementById("navbar").style.opacity = "1";
     document.getElementById("navbar").style.backgroundColor = "#4A93DD";
  } else {
    document.getElementById("navbar").style.fontSize = "18px";
     document.getElementById("navbar").style.padding = "30px 30px";
      document.getElementById("navbar").style.opacity = "1";
      document.getElementById("navbar").style.backgroundColor = "rgba(9,9,121,1)";
  }
}

