<!-- Changes User when edit button is clicked -->
<script>
  $(document).ready(function () {
    $('.officedeletebtn').on('click', function() {

      $('#officedeletemodal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#delete_office_id').val(data[0]);

    });
  });
</script>
