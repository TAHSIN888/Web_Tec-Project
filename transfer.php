<html>
<head>
  <title>Banking</title>
  
  
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>

      <link rel="stylesheet" href="CSS/style5.css">

 <style >
   

   
 </style>

  
</head>
<body style="background:#96D678;background-size: 100%">
<br>
<div class="container">
  <div class="card  w-75 mx-auto">
  <div class="card">
    Funds Transfer
  </div>
  <div class="card-body">
      <form method="POST">
          <div class="alert alert-success w-50 mx-auto">
            <h5>New Transfer</h5>
            <input type="text" name="otherNo" class="form-control " placeholder="Enter Account number" required>
            <button type="submit" name="get" class="btn">Get Account Info</button>
          </div>
      </form>
      <?php if (isset($_POST['get'])) 
      {
        $array2 = $con->query("select * from otheraccounts where accountNo = '$_POST[otherNo]'");
        $array3 = $con->query("select * from userAccounts where accountNo = '$_POST[otherNo]'");
        {
          if ($array2->num_rows > 0) 
          { $row2 = $array2->fetch_assoc();
            echo "<div class='alert alert-success w-50 mx-auto'>
                  <form method='POST'>
                    Account No.
                    <input type='text' value='$row2[accountNo]' name='otherNo' class='form-control ' readonly required>
                    Account Holder Name.
                    <input type='text' class='form-control' value='$row2[holderName]' readonly required>
                    Account Holder Bank Name.
                    <input type='text' class='form-control' value='$row2[bankName]' readonly required>
                    Enter Amount for tranfer.
                    <input type='number' name='amount' class='form-control' min='1' max='']' required>
                    <button type='submit' name='transfer' class='btn btn-primary btn-bloc btn-sm my-1'>Tranfer</button>
                  </form>
                </div>";
          }
          elseif ($array3->num_rows > 0) 
          {
           $row2 = $array3->fetch_assoc();
            echo "<div class='transfer'>
                  <form method='POST'>
                    Account No.
                    <input type='text' value='$row2[accountNo]' name='otherNo' class='form-control ' readonly required>
                    <br>
                    Account Holder Name.
                    <input type='text' class='form-control' value='$row2[name]' readonly required>
                    <br>
                    Account Holder Bank Name.
                    <input type='text' class='form-control' value='".bankname."' readonly required>
                    <br>
                    Enter Amount for tranfer.
                    <input type='number' name='amount' class='form-control' min='1' max='$userData[balance]' required>
                    <br>
                    <button type='submit' name='transferSelf' class='btn'>Tranfer</button>
                  </form>
                </div>";
          }
          else
            echo "<div class='alert alert-success w-50 mx-auto'>Account No. $_POST[otherNo] Does not exist</div>";
        }
      } 
      ?>
    <br>
    
    <?php
    if (isset($_POST['transferSelf']))
    {
      $amount = $_POST['amount'];
      setBalance($amount,'debit',$userData['accountNo']);
      setBalance($amount,'credit',$_POST['otherNo']);
      makeTransaction('transfer',$amount,$_POST['otherNo']);
      echo "<script>alert('Transfer Successfull');window.location.href='transfer.php'</script>";
    } 
    ?>  
  </div>
  
</div>

</div>
</body>
</html>