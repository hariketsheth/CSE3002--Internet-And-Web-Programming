let a = 0;
document.getElementsByTagName("i")[0].addEventListener("click", function () {
  if (a == 0) {
    document.getElementsByTagName("audio")[0].play();
    a++;
    document.querySelector("i").style.opacity = "1";
  } else {
    document.querySelector("audio").pause();
    a--;
    document.querySelector("i").style.opacity = ".5";
  }
});

let b = 0;
document.getElementsByTagName("i")[1].addEventListener("click", function () {
    if (b == 0) {
      document.getElementsByTagName("audio")[1].play();
      b++;
      document.querySelector("i").style.opacity = "1";
    } else {
      document.querySelector("audio").pause();
      b--;
      document.querySelector("i").style.opacity = ".5";
    }
  });

let c = 0;
  document.getElementsByTagName("i")[2].addEventListener("click", function () {
    if (c == 0) {
      document.getElementsByTagName("audio")[2].play();
      c++;
      document.querySelector("i").style.opacity = "1";
    } else {
      document.querySelector("audio").pause();
      c--;
      document.querySelector("i").style.opacity = ".5";
    }
  });