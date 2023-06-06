<!-- Changes Office when edit button is clicked -->
<script>
  $(document).ready(function () {
    $('.office-editbtn').on('click', function() {

      $('#office-edit').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#office_id').val(data[0]);
      $('#name').val(data[1]);
      $('#address1').val(data[2]);
      $('#address2').val(data[3]);
      $('#city').val(data[4]);
      $('#state').val(data[5]);
      $('#zip').val(data[6]);
      $('#phone').val(data[7]);
      $('#office_email').val(data[8]);
    });
  });
</script>
