class Message{
  constructor(sender,message,time) {
    this.sender = sender;
    this.message = message;
    this.time = time;
  }
}
function get_users(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("info").innerHTML = this.responseText;
      var myTableArray = [];
      $(this.responseText).each(function() {
          var arrayOfThisRow = [];
          var tableData = $(this).find('td');
          if (tableData.length > 0) {
              tableData.each(function() { arrayOfThisRow.push($(this).text()); });
              myTableArray.push(arrayOfThisRow);
          }
      });
      var users = [];
      for(var i = 0; i < myTableArray[0].length; i+=1){
        users[i] = myTableArray[0][i];
      }
      var uniqueNames = [];
      for (var i = 0; i < users.length; i++) {
        if(uniqueNames.includes(users[i]) == false){
          console.log(i);
          uniqueNames.push(users[i]);
        }
      }
      console.log(users);
      console.log(uniqueNames);
      var sel = document.getElementById('users');
      for(var i = 0; i < uniqueNames.length;i++){
        var opt = document.createElement('option');
        opt.appendChild( document.createTextNode(uniqueNames[i]) );
        opt.value = uniqueNames[i];
        sel.appendChild(opt);
      }
      //document.getElementById("info").innerHTML = uniqueNames;

    }
  };
  xmlhttp.open("GET","list_users.php",true);
  xmlhttp.send();
}

function get_message(str){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("info").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET","list_messages_of_users.php?q="+str,true);
  xmlhttp.send();
}

get_users();

// function test(){
//   var myTableArray = [];
//   $("table#table_of_users tr").each(function() {
//       var arrayOfThisRow = [];
//       var tableData = $(this).find('td');
//       if (tableData.length > 0) {
//           tableData.each(function() { arrayOfThisRow.push($(this).text()); });
//           myTableArray.push(arrayOfThisRow);
//       }
//   });
//
//   alert(myTableArray);
// }
