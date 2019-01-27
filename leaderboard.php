<?php
$con=mysqli_connect("localhost","root","","buddy");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 $sql = "select * from leader order by score desc";
if($result = mysqli_query($con,$sql))
{
    $x = -1;
    while($row = mysqli_fetch_array($result))
    {
        $x = $x + 1;
        $score[$x] = $row['score'];
        $percent[$x] = $row['percent'];
        $name[$x] = $row['name'];
     }
}
mysqli_close($con);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="HandheldFriendly" content="true">
    <link rel="icon" href="pic5.png">
<title>LeaderBoard|BUDDY</title>
    <link rel="stylesheet" type="text/css" href="leaderstyle.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     </head>
<body>
 <div class="container-fluid" id="leaderboard">
  <header>
    <h1>Quiz Leaderboard</h1></header>
   <div class="main">
    <ol id="rb-grid" class="rb-grid clearfix">
      echo "<li>
        <p> <?php echo $name[0]; ?><span class="points"><?php echo $name[0]; ?></span></p>
        </li>"
    </ol>
    </div>
 </div>
</body>
</html>