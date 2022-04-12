window.onscroll = function () {
    myFunction()
  };
  
  var header = document.querySelector("header");
  var hero = document.querySelector(".hero");
  var sticky = header.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
      hero.style.marginTop="70px"
    } else {
      header.classList.remove("sticky");
      hero.style.marginTop="0px"

    }
  }

  const btnHam = document.querySelector('.ham-btn');
  const btnTimes = document.querySelector('.times-btn');
  const navBar = document.getElementById('toggle-bar');
  
  
  btnHam.addEventListener('click', function(){
    if(btnHam.className !== ""){
      btnHam.style.display = "none";
      btnTimes.style.display = "block";
      navBar.classList.add("show-nav");
    }
  })
  
  btnTimes.addEventListener('click', function(){
    if (btnHam.className !== "") {
      this.style.display = "none";
      btnHam.style.display = "block";
      navBar.classList.remove("show-nav");
    }
  })
  
  
  var acc = document.getElementsByClassName("accordion");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }