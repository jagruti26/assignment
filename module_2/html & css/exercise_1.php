<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], input[type=Email], textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-weight: bold;
  font-style: italic;
  margin-left: 100px;
}

label {
  padding: 12px 12px 12px 0px;
  display: inline-block;
  font-weight: bold;
}

input[type=submit] {
  background-color: grey;
  color: white;
  padding: 5px 5px;
  border: none;
  border-radius: 20px;
  width: 120px;
  cursor: pointer;
  text-align: : center;
  font-weight: bold;
  margin-top: 5px;
}

input[type=submit]:hover {
  background-color: black;
}

.container {
  border-radius: 10px;
  background-color: #9DC209;
  padding-top: 2px ;
  padding-bottom: 2px;
  padding-left: 50px;
  padding-right: 50px;
  width: 900px;
  height: 1125px;
}
h2{
  font-weight: bold;
  font-family: "serif";
}

div{
  border: 3px solid white;
  border-radius: 10px;
  background-color: #f0f0f0;
  padding: 10px; 
  margin-bottom: 3px;
}

[type=radio] + img {
  cursor: pointer;
  border: 1px solid black;
  margin: 3px;
}

</style>
</head>

<body>

<div class="container">
<form>

<h2>Step 1: Your details</h2>
  <div>
  <label>Name</label>
  <input type="text" name="name" placeholder="First and last name">
</div>
<div>
  <label>Email</label>
  <input type="Email" name="email" placeholder="example@domain.com">
</div>
<div>
  <label>Phone</label>
  <input type="text" name="phone" placeholder="Eg. +447500000000">
</div>

<h2>Step 2: Delivery address</h2>
<div>
  <label style="float: left;">Address</label>
  <textarea id="address" name="address" style="height: 150px;"></textarea>
</div>
<div>
  <label>Post code</label>
  <input type="text" name="postcode">
</div>
<div>
  <label>Country</label>
  <input type="text" name="Country">
</div>

<h2>Step 3: Card details</h2>
<div style="font-weight: bold;">
  <label>Card type</label>
  <br>
  <input type="radio" name="card" value="VISA"><img src="visa.png" style="height:12px; width: 25px;">VISA
  <input type="radio" name="card" value="AmEx"><img src="amex.png" style="height:12px; width: 25px;">AmEx
  <input type="radio" name="card" value="Mastercard"><img src="master.png" style="height:12px; width: 25px;">MasterCard
</div>
<div>
  <label>Card number</label>
  <input type="text" name="cardnumber">
</div>
<div>
  <label>Security code</label>
  <input type="text" name="securitycode">
</div>
<div>
  <label>Name on card</label>
  <input type="text" name="name" placeholder="Enter name as on the card">
</div>
<center>
  <input type="submit" name="submit" value="BUY IT!">
</center>

</form>
</div>

</body>
</html>


