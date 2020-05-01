/*function myFunc(){
  const myHeading = document.querySelector('h1');
  if (myHeading.textContent == 'Home sweet home'){
    myHeading.textContent = 'Secret home...shhh'
  }
  else{
    myHeading.textContent = 'Home sweet home'
  }
}

document.querySelector('body').onclick = function(){
    alert('Ouch! Stop poking me!');
}

function r(min, max) {
  return Math.floor((Math.random() * (max - min) + min));
}

function myFunc(){
  document.querySelector('body').style.background = "#"+(r(0,255)).toString(16)+(r(0,255)).toString(16)+(r(0,255)).toString(16);
}

function setName(){
  let name = prompt('What is your name');
  document.querySelector('h1').textContent = name;
}*/

document.querySelector('h1').onclick = function(){
    var listItem = document.createElement('li');
    var listContent = prompt('What content do you want the list item to have?');
    listItem.textContent = listContent;
    (document.querySelector('ul')).appendChild(listItem);
}
