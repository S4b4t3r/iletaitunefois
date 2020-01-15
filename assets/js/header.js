var hamburger = document.getElementById('hamburger');
var test = document.getElementById('test');

hamburger.onclick = function myFunction() {
    this.classList.toggle("change");
    test.classList.toggle("menu");
  }