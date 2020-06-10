var currentSelection;
function Cell(col,row,piece,colour,num){
  //1 = white, 0 = black
  this.i = col;
  this.j = row;
  this.colour = colour;
  this.piece = piece;
  this.x = width/dim * col;
  this.y = width/dim * row;
  this.option = false;
  this.selected = false;
  this.attack = false;
  this.imgNum = num;
  this.moved = false;
}
Cell.prototype.contains = function(mouseX,mouseY){
  if (mouseX > this.x + width/dim * 1/12 && mouseX < (this.x + width/dim * 1/12) + width/dim * 5/6){
    if (mouseY > this.y + width/dim * 1/12 && mouseY < (this.y + width/dim * 1/12) + width/dim * 5/6){
      console.log('worked!');
      currentSelection = this;
      return true;
    }
  }
}

Cell.prototype.options = function(king){
  let colour = 1;
  if(this.colour == 0){colour = -1;}
  switch(this.piece){
    case('pawn'):
    let t = 3
    if(this.colour == 0 && this.j > 1||(this.colour == 1 && this.j < 6)){t = 2;}
      for(var i = -1;i < 2;i++){
        for(var j = 1;j < t;j++){
          try{
            if(i != 0){
              if((grid[this.i + i * colour][this.j + j * colour * -1].colour != !this.colour && !king) || (i !=0 && j == 2)){
                break;
              }
            }
            if(((grid[this.i + i * colour][this.j + j * colour * -1].colour == !this.colour) || king == true) && i != 0){
              grid[this.i + i * colour][this.j + j * colour * -1].option = true;
              break;
            }
            if(grid[this.i + i * colour][this.j + j * colour * -1].colour != null || king){
              break;
            }
            grid[this.i + i * colour][this.j + j * colour * -1].option = true;
          }
          catch(Exception){}
        }
      }
      break;
    case('rook'):
      for(var z = -1;z < 2; z+=2){
        for(var i = 1; i < 8; i++){
          try{
            if(grid[this.i + i * z][this.j].colour == !this.colour){grid[this.i + i * z][this.j].option = true;break;}
            if(grid[this.i + i * z][this.j].colour == this.colour){break;}
            if(grid[this.i + i * z][this.j].colour == null){grid[this.i + i * z][this.j].option = true;}
          }
          catch(Exception){}
        }
        for(var j = 1; j < 8; j++){
          try{
            if(grid[this.i][this.j+j * z].colour == !this.colour){grid[this.i][this.j+j * z].option = true;break;}
            if(grid[this.i][this.j+j * z].colour == this.colour){break;}
            if(grid[this.i][this.j+j * z].colour == null){grid[this.i][this.j+j * z].option = true;}
          }
          catch(Exception){}
        }
      }
      break;
    case('knight'):
      for(var i = 0; i < 8; i++){
        for(var j = 0; j < 8; j++){
          try{
            if(((Math.abs(this.i - i) == 2 && Math.abs(this.j - j) == 1)||(Math.abs(this.i - i) == 1 && Math.abs(this.j - j) == 2))&&this.colour!=grid[i][j].colour){
              grid[i][j].option = true;
            }
          }
          catch(Exception){}
        }
      }
      break;
    case('bishop'):
      for(var i = -1; i < 2;i+=2){
        for(var j = -1; j < 2;j+=2){
          for(var k = 1; k < 8; k++){
            try{
              if(grid[this.i + k * i][this.j + k * j].colour == !this.colour){grid[this.i + k * i][this.j + k * j].option = true;break;}
              if(grid[this.i + k * i][this.j + k * j].colour == this.colour){break;}
              if(grid[this.i + k * i][this.j + k * j].colour == null){grid[this.i + k * i][this.j + k * j].option = true;}
            }
            catch(Exception){}
          }
        }
      }
      break;
    case('king'):
      if(!king){
        for(var i = 0; i < 8; i++){
          for(var j = 0; j < 8; j++){
            if(this.colour == !grid[i][j].colour){
              grid[i][j].options(true);
              console.log('piece');
            }
          }
        }
      }
      for(var i = -1; i < 2; i++){
        for(var j = -1; j < 2; j++){
          try{
            if((grid[this.i + i][this.j + j].colour != this.colour && !grid[this.i + i][this.j + j].attack) || king){
              grid[this.i + i][this.j + j].option = true;
            }
          }
          catch(Exception){}
        }
      }
      break;
    case('queen'):
      this.piece = 'rook';
      this.options();
      this.piece = 'bishop';
      this.options();
      this.piece = 'queen';
      break;
  }
  if(king){
    for(var i = 0; i < 8; i++){
      for(var j = 0; j < 8; j++){
        if(grid[i][j].option){
          grid[i][j].option = false;
          grid[i][j].attack = true;
        }
      }
    }
  }
  return true;
}
