var iter = 30;
function setup(){
  if(document.getElementById('real').value != ""){
    let c = createCanvas(700,700);
    drawStuff(parseInt(document.getElementById('real').value),parseInt(document.getElementById('imaginary').value));
    document.getElementById('imaginary').value = "";
    document.getElementById('real').value = "";
    saveCanvas(c, 'myCanvas', 'jpg');
  }
}
function drawStuff(a,b){
  var cRe = a;
  var cIm = b;
  var currentX = (mouseX-width/2)/100;
  var currentY = (mouseY-width/2)/100;
  background(0,0,0);
  strokeWeight(2);
  translate(width/2,height/2);
  var a = new Complex(0,0);
  var initialRe = currentX;
  var initialIm = currentY;
  var prevRe = 1000;
  var prevIm = 1000;
  for(var x = -5; x < 6;x+= 0.01){
    for(var y = -5; y < 6;y+=0.01){
      a = new Complex(x,y);
      for(var i = 0; i < iter; i++){
        a = (a.mult(a));
        a.re += cRe;
        a.im += cIm;
        // line(initialRe * 100,initialIm * 100,a.re * 100,a.im * 100)
        // var initialRe = a.re;
        // var initialIm = a.im;
        if(Math.abs(a.re) > 5 && Math.abs(a.im) > 5){
          stroke(min((i+1)*255/(iter),255),0,0);
          point(x * 100,y * 100);
          break;
        }
        if(Math.sqrt((0-a.re)**2 + (0-a.im)**2) < 0.1){
          stroke(0,min((i+1)*255/(iter),255),0);
          point(x * 100,y * 100);
          break;
        }
      }
      // if(Math.abs(a.re) * 100 < width/2 && Math.abs(a.im) * 100 < width/2){
      //   point(x,y);
      // }
    }
  }
}
