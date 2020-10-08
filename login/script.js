document.getElementById('button').addEventListener("click", function(){
  console.log('works?');
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    }
  };
  var user = document.getElementById('username').value;
  var pass = document.getElementById('password').value;
  xmlhttp.open("GET","formprocess.php?user="+user+'&pass='+pass,true);
  xmlhttp.send();
});
