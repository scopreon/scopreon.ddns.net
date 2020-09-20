function test(){
  $(function() {
      $('.caption').parent().toggleClass('open');

      $('.dropdown > .list > .item').on('click', function() {
          $('.dropdown > .list > .item').removeClass('selected');
          $(this).addClass('selected');
          document.getElementById('messagesList').innerHTML=``;
          get_message($(this).text());
      });
  });
}


// .parent().parent().children('.caption').text($(this).text())
