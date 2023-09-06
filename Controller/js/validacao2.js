    $(document).ready(function() {
    $("#codPatrimonioAlt").keyup(function() {
        $("#codPatrimonioAlt").val(this.value.match(/[0-9]*/));
    });
  });