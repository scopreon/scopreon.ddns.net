var iter = 150;
var vx1 = -2;
var vx2 = 2;
var vy1 = -2;
var vy2 = 2;
var drawboxX = 0;
var drawboxY = 0;
var dragging = false;

function mapping(s,a1,a2,b1,b2){
  return (b1 + ((s-a1)*(b2-b1))/(a2-a1));
}

function setup(){
  let c = createCanvas(700,700);
  colorMode(HSB, iter);
  strokeWeight(4);
  stroke(0);
  //frameRate(10);
  drawStuff();


}

function mousePressed() {
  drawboxX = mouseX;
  drawboxY = mouseY;
  dragging = true;
  console.log('clicked');
}

function mouseDragged() {
  if (dragging) {
    drawStuff();
    fill('#f004');
    rect(drawboxX, drawboxY, Math.abs(drawboxX-mouseX), Math.abs(drawboxX-mouseX));
  }
  console.log('specify');
}

function mouseReleased() {
  dragging = false;
  let temp1 = vx1;
  let temp2 = vy1;
  vx1 = mapping(drawboxX,0,700,vx1,vx2);
  vx2 = mapping(mouseX,0,700,temp1,vx2);
  vy1 = mapping(drawboxY,0,700,vy1,vy2);
  vy2 = mapping(drawboxY + (mouseX-drawboxX),0,700,temp2,vy2);
  drawStuff();
}


function drawStuff(){
  //iter+=1;
  background(0,0,0);
  strokeWeight(2);
  //translate(width/2,height/2);
  var a = new Complex(0,0);
  for(var x = 0; x < 701;x+= 1){
    for(var y = 0; y < 701;y+=1){
      a = new Complex(0,0);
      for(var i = 0; i < iter; i++){
        a = (a.mult(a));
        a.re += mapping(x,0,700,vx1,vx2);
        a.im += mapping(y,0,700,vy1,vy2);
        if(Math.abs(a.re) >100 && Math.abs(a.im) > 100){
          set(x, y, color(i, iter, iter));
          break;
        }
      }
    }
  }
  updatePixels();
}
