<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/dcss.css">
</head>
<head>

</head>
<body>
<div>
<h1>Order Page</h1>
</div>
<div>
<tr><th><a href="dguy.php">Delivery Guy Home Page</a></th>
<tr><th><a href="../control/logout.php">logout</a></th></div>
<h3>Hii</h3>
<br>
<label>Find Detail of OrderID: </label>

  <input type="text" id="orderid" onkeyup="showmyuser()">
  

<p id="mytext"></p>
<br/>Pending Orders:


</table>

<div>			
      <legend align="left"><b>Order Processing Section</b></legend>
        <br>

        <form method="post" action="../databasecreation/orderstatusinput.php"   enctype="multipart/form-data">
        <label for="orderId">Oder ID: </label>
        <input type="text" id= "orderId" name="oderId" required><br>

        <br>
        Status: <select name="status" >
                <option value="Done"  selected >Done</option>
                <option value="Pending">Pending</option><br/>
                </div>
              
        <input type="submit" onclick="func()">
        <hr>
        </fieldset>
        </fieldset>
        </form>
        </div>

</body>
</html>