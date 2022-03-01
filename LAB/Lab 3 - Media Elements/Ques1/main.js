let a = 0;
document.getElementsByTagName("i")[0].addEventListener("click", function () {
  if (a == 0) {
    document.getElementsByTagName("audio")[0].play();
    a++;
    document.getElementsByTagName("i")[0].style.opacity = "1";
  } else {
    document.getElementsByTagName("audio")[0].pause();
    a--;
    document.getElementsByTagName("i")[0].style.opacity = ".5";
  }
});

let b = 0;
document.getElementsByTagName("i")[1].addEventListener("click", function () {
  if (b == 0) {
    document.getElementsByTagName("audio")[1].play();
    b++;
    document.getElementsByTagName("i")[1].style.opacity = "1";
  } else {
    document.getElementsByTagName("audio")[1].pause();
    b--;
    document.getElementsByTagName("i")[1].style.opacity = ".5";
  }
});

let c = 0;
document.getElementsByTagName("i")[2].addEventListener("click", function () {
  if (c == 0) {
    document.getElementsByTagName("audio")[2].play();
    c++;
    document.getElementsByTagName("i")[2].style.opacity = "1";
  } else {
    document.getElementsByTagName("audio")[2].pause();
    c--;
    document.getElementsByTagName("i")[2].style.opacity = ".5";
  }
});
