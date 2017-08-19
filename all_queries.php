  <?php
  session_start();
  include 'config_page.php';
  if(!(isset($_SESSION['username'])))
  {
    header('location:admin_page.php');
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title> All submitted queries</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap.min.css">
      <script src="jquery.min.js"></script>
      <script src="bootstrap.min.js"></script>
    </head>
   <body>
    <div class="container">
    <h1> All Submitted Queries</h1> 
      <p align='right'> <b>Welcome <?php echo $_SESSION['username']; ?> </b></p>
   <table class="table">
     <thead>
      <tr>
      <th>S.NO.</th>
      <th>NAME</th>
      <th>EMAIL</th>    
      <th>SUBJECT</th>
      <th>MESSAGE</th>
      </tr>
     </thead>
    <tbody>
      <tr>
       <td>

    <?php
     $query="select * from `submissions`";
     $run=mysql_query($query);
     $i=1;
    while($data=mysql_fetch_assoc($run))
   {
    echo "<tr>";
    echo  "<td class=success>" .$i. "</td class=success>";
    echo "<td class=info>" .$data['Name']. "</td class=info>";
    echo "<td class=active>" .$data['Email']. "</td class=active>";
    echo "<td class=warning>" .$data['Subject']. "</td class=warning>";
    echo "<td class=danger>" .$data['Message'].  "</td class=danger>";
    echo "</tr>";
    $i++;
   }
     ?>
      </td>
     </tr>
    </table>
   <form>
    <button type="submit" class="btn btn-primary btn-lg" value="logout" formaction="logout_page.php">LOGOUT</button>
   </form>
    </body>
  </html>

