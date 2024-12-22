<?php
$counter_file = "visitor_count.txt";
if (!file_exists($counter_file)) {
file_put_contents($counter_file, 0);
}
$current_count = (int)file_get_contents($counter_file);
$current_count++;
file_put_contents($counter_file, $current_count);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitor Counter</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f0f8ff;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
}
.container {
text-align: center;
background-color: #ffffff;
padding: 30px;
border-radius: 8px;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}
h1 {
color: #333;
font-size: 2.5rem;
margin-bottom: 10px;
}
p {
font-size: 1.5rem;
color: #555;
}
.counter {
font-size: 3rem;
font-weight: bold;
color: #2e8b57;
}
</style>
</head>
<body>
<div class="container">
<h1>Welcome to AGM Rural College of Engineering!</h1>
<p>You are visitor number:</p>
<div class="counter"><?php echo $current_count; ?></div>
</div>
</body>
</html>
