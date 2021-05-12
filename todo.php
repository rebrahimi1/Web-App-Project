<?php
session_start();

if(!isset($_SESSION["email"]))
{
  ?>
  <script type="text/javascript">
    window.location="login.php";
  </script>
  <?php

}
include "config.php";
?>



<?php
include "header.php";
?>
<div class="banner-area">
  <h2>UNIVERSITY MANAGEMENT SYSTEM</h2>
</div>
<div class="content-area">
  <p>Current Date and Time is <span id='datetime'></span>.</p>
  <script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
  </script>

  <header style="min-height: 150px; position: relative">
    <h1 style="color:white">To Do List</h1>
	<br><br>
    <center>
    <table>
      <tr>
        <td style="color:white; padding-left:10px; padding-right: 10px;">Task:</td>
        <td style="padding-left:10px; padding-right: 10px;"><input type="text" id="myInput" placeholder="Add an item..." name="myInput" class="form-control" style="width: 250px;" /></td>
        <td style="color:white;padding-left:10px; padding-right: 10px;">Date:</td>
        <td style="padding-left:10px; padding-right: 10px;"><input type="date" id="Date" name="Date" class="form-control" style="width: 250px;" /></td>
        <td style="padding-left:10px; padding-right: 10px;"><span id="add_button" class="btn btn-success" style="margin-left: 10px; margin-right:10px;" onclick="save_data()">Add</span></td>
      </tr>

    </table>
    </center>
  </header>

  <div style="width: 100%; min-height:100px; margin-top: 10px;" id="load_data">
    
  </div>
</div>


<script type="text/javascript">
  function load_data()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("load_data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "load_data.php", true);
    xmlhttp.send();
  }

  function save_data()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        load_data();
      }
    };
    xmlhttp.open("GET", "save_data.php?tasks="+document.getElementById("myInput").value+"&date="+document.getElementById("Date").value, true);
    xmlhttp.send();
  }

  function delete_record(id)
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        load_data();
      }
    };
    xmlhttp.open("GET", "delete_data.php?id="+id, true);
    xmlhttp.send();
  }

  load_data();
  

</script>
</body>
</html>