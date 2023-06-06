<!-- Changes User when edit button is clicked -->
<script>
  $(document).ready(function () {
    $('.userdeletebtn').on('click', function() {

      $('#userdeletemodal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#delete_id').val(data[0]);

    });
  });
</script>
