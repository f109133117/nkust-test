<?php
    $money = $_POST["money"];
    $rate_str = $_POST["rate"];   
    list($rate,$rate_name) = explode(",",$rate_str);
?>

<html>
<body>

<form action="exchange2.php" method="post">
amont: NTD <input type="text" name="money" value=<?php echo $money;?>> dollars<br>
exchange rate:
<select name="rate">
    <option value="28.3,USD">USD</option>
    <option value="36.7,GBP">GBP</option>
    <option value="0.2655,JPY">JPY</option>
    <option value="33.02,EUR">EUR</option>
</select>
<input type="submit" value="calculate">

</form>

<?php   
 
   if ($money>0) {
       $result = $money / $rate;
       echo "NTD ".$money. " dollars";
       echo " exchange to ". $rate_name . " amount is: ". round($result,2). " dollars"; 
       
    }

  

?>
</body>
</html>