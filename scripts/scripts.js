function setName(){
  if(document.cookie.indexOf('name=') == -1){
    let name = prompt(`It looks like you haven't visited this website in a while
    What is your name?`)
    document.cookie="name=" + name;
  }
  else{
    document.getElementById('welcomeBack').innerHTML = 'Welcome back ' + document.cookie.replace('name=','').replace(';','');
  }

}

window.onload = setName;
