$(document).ready(function() {

  // funzione al click su Cerca
  $(document).on('click', 'button', function() {

    var selectedPlayer = $('.text').val();
    var player = $('.text').val(selectedPlayer)

    if (selectedPlayer.length == 0 || selectedPlayer.length < 6 || selectedPlayer.length > 6) {
      $('.error').fadeIn(1500);
      $('.error').fadeOut(1500);
    } else {
      $('.container').removeClass('active');

      $("#" + selectedPlayer).parent().parent().addClass('active');
    }

    $('.text').val('');

  });

  //funzione al click sul nome
  $('.randomPlayer').click(function() {

    var selectedPlayer = $(this).text();

    $('.container').removeClass('active');

    $("#" + selectedPlayer).parent().parent().addClass('active');

  });

});