<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h2>Book Lists</h2>

<h3>Hii</h3>
<br/>All available books: 


<br/>
<br/>
<br/>
<br>
  <fieldset>
  <fieldset>			
<legend align="left"><b> Buy Book</b></legend>
<br>
<tr>
<form method="post" action="../databasecreation/buyerrequest.php"   enctype="multipart/form-data">
<td><label for="BookName">Book Name: </label></td> 
<td><input type="text" name="BookName" required><br></td>
</tr>
<br>
<hr>
<tr>
<td><label for="BuyerName">Buyer Name:</label></td>
<td><input type="text" name="BuyerName" required></td>
</tr>
<br>
<hr>
<tr>
<td><label for="BuyerPhoneNumber">Buyer Phone no:</label></td>
<td><input type="text" name="BuyerPhoneNumber" required></td>
</tr>
<br>
<hr>
<tr>
<td><label for="SellerName">Seller Name</label></td>
<td><input type="text" name="SellerName" required></td>
</tr>

<input type="submit">
<br/>

<br/>
<a href="buyerhome.php">Go to buyer home page</a>
<br/>
<br/>

<br/>
<a href="logout.php">logout</a>

</body>
</html>