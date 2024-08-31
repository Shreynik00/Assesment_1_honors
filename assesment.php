<html>
<head>
    <title>
        form
    </title>
    <link rel="stylesheet" href ="/pico.min.css" />
</head>
<body>
    <h1> Welcome   </h1>
    <div  id="input">
    <form method ="post" action ="mainphp.php">
      <label> Enter your name</label>  <input type="text" placeholder="Enter your name" name="user" >
        <br>
        <label>Chose Your favourite Food</label>
        <input type="radio" value="Pav  Bhaji"  name="food">Pav Bhaji<br>
        <input type="radio" value="Pani Puri "  name="food">Pani Puri<br>
        <input type="radio" value="Noodles"  name="food">Noodles<br>
        <input type="radio" value="Pasta"  name="food">Pasta<br>
        <input type="submit">
        
    </form>
    
    <?php
    if(!empty($_POST))
    { ?>
 <h3><?php   echo "Good " . $greeting." ".$username.". Your Favourite Food is  ".$favourite; 
 ?></h3>
  <?php } ?>
</div>
</body>
</html>