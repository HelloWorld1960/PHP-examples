$(document).ready(function(){
  /*El widget autocomplete() proporciona sugerencias mientras se escribe en el input.*/
  /*source: ["sugerencia1","sugerencia2","sugerencia3","sugerencia4" ]*/
  $('#buscar').autocomplete({
    source:'sugerencias.php'
  });
});
