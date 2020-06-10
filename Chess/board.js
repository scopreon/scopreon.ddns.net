var size = 600;
var dim = 8;
var grid;
var layout = ['rook','knight','bishop','queen','king','bishop','knight','rook'];
var turn = 1;
var selectedCell;
var currentTurn = 0;
var imgs = [];
var start = true;

function setup(){
  num = 0;
  var canvas = createCanvas(size,size);
  canvas.parent('chessBoard');
  grid = create2DArray(dim,dim);
  for(var i = 0; i < dim; i++){
    for(var j = 0; j < dim; j++){
      let piece = '';
      let colour = null;
      if (j < 2){
        colour = 0;
        if (j < 1){
          piece = layout[i];
        }
        else{piece = 'pawn';}
      }
      if (j > 5){
        colour = 1;
        if (j > 6){
          piece = layout[i];
        }
        else{piece = 'pawn';}
      }

      grid[i][j] = new Cell(i,j,piece,colour,num);
      if(colour != null){
        imgs[num] = loadImage('Chess/Pieces/'.concat(piece,colour,'.png'));
        num++;
      }
    }
  }
  //updateBoard();
}

function draw(){
  updateBoard();
}

function create2DArray(cols,rows){
  var arr = new Array(cols);
  for(var i = 0; i < rows; i++){
    arr[i] = new Array(rows);
  }
  return arr;
}

function mousePressed(){
  var check = 0;
  for(var i = 0; i < dim; i++){
    for(var j = 0; j < dim; j++){
      if(grid[i][j].contains(mouseX,mouseY)){
        if(!grid[i][j].selected && !grid[i][j].option){
          currentTurn = 0;
          clearBoard();
        }
        if(!currentTurn && grid[i][j].colour == turn){
          grid[i][j].selected = true;
          if(grid[i][j].options()){
            currentTurn = 1;
          }
        }
        else{
          if(grid[i][j].option){
            for(var k = 0;k < 8;k++){
              for(var l = 0;l < 8;l++){
                if(grid[k][l].selected){
                  grid[i][j].piece = grid[k][l].piece;
                  grid[i][j].colour = grid[k][l].colour;
                  grid[i][j].imgNum = grid[k][l].imgNum;
                  grid[i][j].moved = true;
                  grid[k][l] = new Cell(k,l,'',null);
                  currentTurn = 0;
                  turn = !turn;
                  clearBoard();
                }
              }
            }
          }
          else{
            console.log('here');
            currentTurn = 0;
          }
        }
      }
    }
  }
  //updateBoard();
}

function clearBoard(){
  for(var i = 0; i < dim; i++){
    for(var j = 0; j < dim; j++){
      grid[i][j].option = false;
      grid[i][j].selected = false;
      grid[i][j].attack = false;
    }
  }
}

function updateBoard(){
  clear();
  background(0,0,0);
  var colour = false;
  for(var i = 0; i < dim; i++){
    colour = !colour;
    for(var j = 0; j < dim; j++){
      if (colour){fill(255);}
      else{fill(160);}
      if(grid[i][j].selected){fill(255,0,0);}
      if(grid[i][j].option){fill(0,255,0);}
      if(!grid[i][j].moved){fill(0,0,255);}
      colour = !colour;
      rect(grid[i][j].x + width/dim * 1/12,grid[i][j].y + width/dim * 1/12,width/dim * 5/6,width/dim * 5/6,10);
      //textSize(10);
      if(grid[i][j].colour!=null){
        image(imgs[grid[i][j].imgNum],grid[i][j].x + width/dim * 1/12,grid[i][j].y + width/dim * 1/12,width/dim * 5/6,width/dim * 5/6);
      }
      //if (grid[i][j].colour){fill(255);}
      //else{fill(150);}
      //text(grid[i][j].piece, grid[i][j].x + width/dim * 1/12, grid[i][j].y + width/dim * 1/12);
    }
  }
}
