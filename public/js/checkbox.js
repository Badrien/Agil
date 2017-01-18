$(document).ready(function () {
            $('input[id="annoncesbox"]').click(function () {
                var result = $('input[id="annoncesbox"]:checked');
                if ((result.length > 0 ) && (result.length < 2)) {
                    var resultString = result.length + " annonce sélectionnée<br/>";
                    $('.result').html(resultString);
                }
                else if (result.length > 1) {
                  var resultString = result.length + " annonces sélectionnées<br/>";
                  $('.result').html(resultString);
                }
                else {
                    $('.result').html("Aucune annonce sélectionnée");
                }
              });
            });
