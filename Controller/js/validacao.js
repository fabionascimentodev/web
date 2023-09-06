$(document).ready(function() {
    $("#telefone").keyup(function() {
        $("#telefone").val(this.value.match(/[0-9]*/));
    });
  });

  $(document).ready(function() {
    $("#matricula").keyup(function() {
        $("#matricula").val(this.value.match(/[0-9]*/));
    });
  });

    $(document).ready(function() {
    $("#codPatrimonio").keyup(function() {
        $("#codPatrimonio").val(this.value.match(/[0-9]*/));
    });
  });
  
  
 