var $ = require('jquery');
var Handlebars = require("handlebars");

$(document).ready(function( ) {

  $.ajax ( {

    url:'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'GET',
    success: function (dataResponse) {

      printAlbum(dataResponse);


    },

    error: function(){

      alert(' Ops.. si è verificato un errore')

    }
  }
);


// stampo gli album con handlebars

function printAlbum (listalbum) {
  var source = $('#album-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < listalbum.length; i++) {
    var album = listalbum[i];
    var html = template(album);

    $('#album-container').append(html)

  }
}

});
