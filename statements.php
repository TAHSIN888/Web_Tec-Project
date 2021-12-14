

<!DOCTYPE html>
<html>
<head>
  <title>Banking</title>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>
  <style >
    
.transfer{

  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  width: 100%;


}
.title{

  padding: 5px;
  font-size: 30px;
font-family: Arial, Helvetica, sans-serif;
text-align: center;

}

  </style>
 
</head>
<body style="background:#96D678;background-size: 100%">
<br>
<div class="container">
  <div class="card  w-75 mx-auto">
  <div class="title">
    Transaction made against you account
  </div>
  <div class="card-body">
    <?php 
      $array = $con->query("select * from transaction where userId = '$userData[id]' order by date desc");
      if ($array ->num_rows > 0) 
      {
         while ($row = $array->fetch_assoc()) 
         {
            if ($row['action'] == 'withdraw') 
            {
              echo "<div class='transfer'>You withdraw Rs.$row[debit] from your account at $row[date]</div>";
            }
            if ($row['action'] == 'deposit') 
            {
              echo "<div class='transfer'>You deposit Rs.$row[credit] in your account at $row[date]</div>";
            }
            if ($row['action'] == 'deduction') 
            {
              echo "<div class='transfer'>Deduction have been made for  Rs.$row[debit] from your account at $row[date] in case of $row[other]</div>";
            }
            if ($row['action'] == 'transfer') 
            {
              echo "<div class='transfer'>Transfer have been made for  Rs.$row[debit] from your account at $row[date] in  account no.$row[other]</div>";
            }

         }
      } 
    ?>  
  </div>

</div>

</div>
</body>
</html>