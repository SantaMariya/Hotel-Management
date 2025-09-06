<html>
    <head>
        <title>Booking</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <div id="book">
    <div class="tit">
        <p>ENJOY YOUR STAY !!!</P>
</div>
<div class="booking">
<form action="connect.php" method="post">

<label for="name">Name</label><br>
<input type="text" size="40" placeholder="enter your name" name="n" required /><br><br>
<label for="name">Mobile No</label><br>
<input type="number" name="a" required /><br><br>
<label for="name">Address</label><br>
<input type="varchar" name="ad" required /><br><br>
<label for="name">Email</label><br>
<input type="Email" size="40" placeholder="enter your mail" name="e" required /><br><br>

<label for="name">Suits</label><br>
<select name="s">
<option value="Executive Room">Executive Room</option>
<option value="Executive Club Room">Executive Club Room</option>
<option value="Buisness Standard Room">Buisness Standard Room</option>
<option value="Buisness Club Room">Buisness Standard Room</option>
</select>
<br><br>
<label for="varchar">Rooms</label><br>
<input type="number" name="r" placeholder="enter the no of rooms required" /><br><br>
<label for="name">Check in</label><br>
<input type="date" name="ci" required /><br><br>
<label for="name">Check out</label><br>
<input type="date" name="co" required /><br><br>
<input type="submit" value="Submit" />

</form>
</div>
</body>
</html>
