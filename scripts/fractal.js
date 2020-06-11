var iter = 150;
var vx1 = -2;
var vy1 = -2;
var vx2 = 2;
var vy2 = 2;
var drawboxX = 0;
var drawboxY = 0;
var dragging = false;
var started = false;
var cRe;
var cIm;


function mapping(s,a1,a2,b1,b2){
  return (b1 + ((s-a1)*(b2-b1))/(a2-a1));
}

window.addEventListener("beforeunload", function(e){
  document.getElementById('imaginary').value = "";
  document.getElementById('real').value = "";
}, false);

function setup(){
  if(document.getElementById('real').value == "69"){
    window.open('../mandelbrot.php', '_blank');
  }
  if(document.getElementById('real').value != "" && Math.abs(parseFloat(document.getElementById('imaginary').value)) < 1 && Math.abs(parseFloat(document.getElementById('real').value)) < 1){
    vx1 = -2;
    vy1 = -2;
    vx2 = 2;
    vy2 = 2;
    colorMode(HSB, iter);
    strokeWeight(4);
    stroke(0);
    let c = createCanvas(700,700);
    started = true;
    drawStuff(parseFloat(document.getElementById('real').value),parseFloat(document.getElementById('imaginary').value));
    document.getElementById('imaginary').value = "";
    document.getElementById('real').value = "";
    //saveCanvas(c, 'myCanvas', 'jpg');
  }
  //drawStuff();
}

// function mousePressed() {
//   drawboxX = mouseX;
//   drawboxY = mouseY;
//   dragging = true;
//   console.log('clicked');
// }
//
// function mouseDragged() {
//   if (dragging) {
//     drawStuff();
//     rect(drawboxX, drawboxY, Math.abs(drawboxX-mouseX), Math.abs(drawboxX-mouseX));
//   }
//   console.log('specify');
// }
//
// function mouseReleased() {
//   dragging = false;
//   let temp1 = vx1;
//   let temp2 = vy1;
//   vx1 = mapping(drawboxX,0,700,vx1,vx2);
//   vx2 = mapping(mouseX,0,700,temp1,vx2);
//   vy1 = mapping(drawboxY,0,700,vy1,vy2);
//   vy2 = mapping(drawboxY + (mouseX-drawboxX),0,700,temp2,vy2);
//   drawStuff();
// }


function mousePressed() {
  if(mouseX >= 0  && mouseX <= 700 && mouseY >= 0  && mouseY <= 700){
    if(started){
      drawboxX = mouseX;
      drawboxY = mouseY;
      dragging = true;
      console.log('clicked');
    }
  }
}

function mouseDragged() {
  if(started && dragging){
    drawStuff(cRe,cIm);
    fill('#f004');
    rect(drawboxX, drawboxY, Math.abs(drawboxX-mouseX), Math.abs(drawboxX-mouseX));
  }
}

function mouseReleased() {
  if(started && dragging){
    dragging = false;
      dragging = false;
      let temp1 = vx1;
      let temp2 = vy1;
      vx1 = mapping(drawboxX,0,700,vx1,vx2);
      vx2 = mapping(mouseX,0,700,temp1,vx2);
      vy1 = mapping(drawboxY,0,700,vy1,vy2);
      vy2 = mapping(drawboxY + (mouseX-drawboxX),0,700,temp2,vy2);
      drawStuff(cRe,cIm);
  }
}


function drawStuff(a,b){
  cRe = a;
  cIm = b;
  var currentX = (mouseX-width/2)/100;
  var currentY = (mouseY-width/2)/100;
  background(0,0,0);
  strokeWeight(2);
  var a = new Complex(0,0);
  var initialRe = currentX;
  var initialIm = currentY;
  var prevRe = 1000;
  var prevIm = 1000;
  for(var x = 0; x < 701;x+= 1){
    for(var y = 0; y < 701;y+=1){
      a = new Complex(mapping(x,0,700,vx1,vx2),mapping(y,0,700,vy1,vy2));
      for(var i = 0; i < iter; i++){
        a = (a.mult(a));
        a.re += cRe;
        a.im += cIm;
        if(Math.abs(a.re) >100 && Math.abs(a.im) > 100){
          set(x, y, color(i, iter, iter));
          break;
        }
      }
    }
  }
  updatePixels();
}
