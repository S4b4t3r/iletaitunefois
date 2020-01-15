var hamburger = document.getElementById('hamburger');
var test = document.getElementById('test');

hamburger.onclick = function myFunction() {
    this.classList.toggle("change");
    test.classList.toggle("menu");
}

  var dropdownbutton = document.getElementById('dropdownactivitesbutton');
  var dropdown = document.getElementById('dropdownactivites');

  dropdownbutton.onclick = function(){
    dropdown.classList.toggle("displayflex"); 
  }