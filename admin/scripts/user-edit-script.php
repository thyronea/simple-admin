<script type="text/javascript">
  $(document).ready(function () {
    $('.editbtn').on('click', function() {

      $('#editmodal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#id').val(data[0]);
      $('#fname').val(data[1]);
      $('#lname').val(data[2]);
      $('#email').val(data[3]);
      $('#role').val(data[4]);
    });
  });
</script>
