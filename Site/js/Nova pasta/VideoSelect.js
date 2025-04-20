let counter = 2;
let counter2 = 4;
var Image = document.getElementById("VideoPrint");
let Image2 = document.getElementById("VideoPrint2");

let seta1 = document.getElementById("seta1");
let seta2 = document.getElementById("seta2");

let seta01 = document.getElementById("seta01");
let seta02 = document.getElementById("seta02");

seta1.addEventListener("click", function() {
  Image.src = "images" + "/" + imgc + "/" + "video" + counter + ".png";

  counter++;
  if (counter >= 6) {
    counter = 1;
  }
 
});

seta01.addEventListener("click", function() {
  Image2.src = "images" + "/" + imgc + "/" + "video0" + counter + ".png";

  counter++;
  if (counter >= 6) {
    counter = 1;
  }
 
});

seta2.addEventListener("click", function() {
  Image.src = "images" + "/" + imgc + "/" + "video" + counter + ".png";
  
  counter--;
  if (counter < 1) {
    counter = 5;
  }
  
});

seta02.addEventListener("click", function() {
  Image2.src = "images" + "/" + imgc + "/" + "video0" + counter + ".png";

  counter--;
  if (counter < 1) {
    counter = 5;
  }
  
});


