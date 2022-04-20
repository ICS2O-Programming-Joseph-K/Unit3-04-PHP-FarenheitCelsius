<!DOCTYPE html>
<html>
  <head>
    
    <!-- Metadata for this site -->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to Celsius">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon for this site -->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav_index/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- tab title -->
    <title>Fahrenheit to Celsius</title>
    
  </head>
  <body>
    
    <!-- receives and gives data -->
    <link rel="stylesheet" href="./css/style.css">
    
    <?php echo "<h1>Fahrenheit to Celsius</h1>" ?>

    <!-- Text fields for user input, collects data -->
  <form action="./welcome.php" method="post" target="result">
      <label for="Fahrenheit">Fahrenheit:</label>
      <input type="text" id="Fahrenheit" placeholder="Enter Fahrenheit" name="Fahrenheit"><br><br>
   
      <input type="submit" value="Calculate Celsius">
			<br><br>	
    </form>

    <!-- result frame centered -->
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>
    
  </body>
</html>