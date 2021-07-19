
$(document).ready(function() {
  $('#listar').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": {
      "url": "../../../pages/proc_pesq_cli.php",
      "type": "POST"
    }
  });
} );
