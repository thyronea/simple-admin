<?php
$groupID = $_SESSION["group_id"]; // this code will only show users from the same groupID
$query = "SELECT count(*) FROM users WHERE groupID='$groupID' ";
$query_run = mysqli_query($con, $query);
$user__count = mysqli_fetch_array($query_run);
?>

<?php
$groupID = $_SESSION["group_id"]; // this code will only show users from the same groupID
$query = "SELECT count(*) FROM office WHERE groupID='$groupID' ";
$query_run = mysqli_query($con, $query);
$office__count = mysqli_fetch_array($query_run);
?>

<?php
$groupID = $_SESSION["group_id"]; // this code will only show users from the same groupID
$query = "SELECT count(*) FROM login WHERE groupID='$groupID' ";
$query_run = mysqli_query($con, $query);
$login__count = mysqli_fetch_array($query_run);
?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['', '', { role: 'style' } ],
         ['Office:', <?=$office__count['count(*)']; ?>, '#b87333'],
         ['Users:', <?=$user__count['count(*)']; ?>, 'silver'],
         ['Logins:', <?=$login__count['count(*)']; ?>, 'gold']
      ]);

        var options = {
         legend: { position: "none" },
         bar: {groupWidth: "90%"}
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
</script>


<div id="columnchart_material" style="width: 275px; height: 250px;"></div>
