<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Calendar</title>
    <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
       
    <?php
        $host="localhost";
        $username="root";
        $password="";
        $databasename="calendar";
        $link = @mysqli_connect($host,$username,$password,$databasename) or die("Cannot connect to database.");
        $query_getting_user = "SELECT * from monthlytesting";
        $result_query= @mysqli_query($link, $query_getting_user);
        print_r($result_query);
        
        @mysqli_close($link);

        echo "mot hai ba bon nam sau";
    
    ?>
  </body>
</html>

 <!-- <span class="dot text-center bg-primary text-white">1</span> -->