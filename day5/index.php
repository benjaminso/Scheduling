<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Calendar_PHP</title>
    <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <?php
            //reading database
//             $host="localhost";
//             $username="root";
//             $password="";
//             $databasename="calendar";
//             $link = @mysqli_connect($host,$username,$password,$databasename) or die("Cannot connect to database.");
//             $query_info = "SELECT * from monthlytesting";
//             $date=[];
//             $event=[];
//             $priority=[];
//             if($result_query= @mysqli_query($link, $query_info)){ 
//                 $counter=0;
//                 while($row=@mysqli_fetch_row($result_query)){
//                     //print_r($row);
//                     $date[$counter]= $row[1];
//                     $event[$counter]= $row[2];
//                     $priority[$counter]= $row[3];
//                     $counter++;
//                 }
//             }else{
//                 echo "ERROR!CANNOT QUERY DATABASE";
//             }
//             @mysqli_close($link);
// //$jsDate
//             function listingEvent(){
//                 print_r($GLOBALS['date']);
//             }
            //echo listingEvent();
        ?>
        <div class="container">
            <div class="border_container">
                <div class="row">
                    <div class="col-md-4">
                        <div id="month">
                            <!-- set date month and year -->
                        </div>
                    </div>

                        <div class="col-md-4">
                            <input id="currentMonth" type="submit" name="Current Month" value="CurrentMonth" /> 
                        </div>
                        <div class="col-md-4 text-right">
                                <input id="prevMonth" type="submit" name="Prev Month" value="PrevMonth" /> 
                                <input id="nextMonth" type="submit" name="Next Month" value="NextMonth" /> 
                        </div>
                </div>
                
                
                    <div class="row m-auto">
                        <div class="col-custom-date text-center border border-primary rounded">Sunday</div>
                        <div class="col-custom-date text-center border border-primary rounded">Monday</div>
                        <div class="col-custom-date text-center border border-primary rounded">Tuesday</div>
                        <div class="col-custom-date text-center border border-primary rounded">Wednesday</div>
                        <div class="col-custom-date text-center border border-primary rounded">Thursday</div>
                        <div class="col-custom-date text-center border border-primary rounded">Friday</div>
                        <div class="col-custom-date text-center border border-primary rounded">Saturday</div>
                    </div>

                    <!-- beginning start -->
                    <?php
                        if(empty($_GET)){
                            $DayNums = date("t");//number of days in a month -31
                            $FirstWeek = date("w", mktime(0,0,0, date("m"), 1, date("y")));// ngay nao xay ra day 1 - thu ba -2
                            $DayCount = 0;
                            $OneDay = 1;
                            drawCalendar($OneDay,$DayNums,$FirstWeek,$DayCount);
                        }else{
                            $arrMonth = explode('-',($_GET["month"]).substr(7,strlen($_GET["month"])));
                            //print_r($arrMonth);//2018 7
                            $DayNums = cal_days_in_month(CAL_GREGORIAN, $arrMonth[1], $arrMonth[0]);
                            $FirstWeek = date("w", mktime(0,0,0, $arrMonth[1], 1, $arrMonth[0]));
                            $DayCount = 0;
                            $OneDay = 1;
                            //print_r($FirstWeek);
                            drawCalendar($OneDay,$DayNums,$FirstWeek,$DayCount);
                        }
                    
                        function drawCalendar($OneDay,$DayNums,$FirstWeek,$DayCount){
                            //loop by number of weeks
                            for($i=0;$i<ceil($DayNums/7);$i++){
                                echo '<div class="row m-auto day2">';
                                    if($i==0){
                                        for($j=0;$j<7;$j++){
                                            if($DayCount<$FirstWeek){
                                                echo '<div class= "no-day col-custom text-center border border-primary rounded"></div>';
                                            }else{
                                                echo '<div class="col-custom text-center border border-primary rounded">';
                                                    echo '<div class="text-design">';
                                                    echo $OneDay++;
                                                    echo '</div>';
                                                    echo '<div class="bottom-design label label-default">+</div>';
                                                echo '</div>';
                                            }
                                            $DayCount++;
                                        }
                                    }else{
                                        for($j=0;$j<7;$j++){
                                            if($OneDay<=$DayNums){
                                                echo '<div class="col-custom text-center border border-primary rounded">';
                                                    echo '<div class="text-design">';
                                                    echo $OneDay++;
                                                    echo '</div>';
                                                    echo '<div class="bottom-design label label-default">+</div>';
                                                echo '</div>';
                                            }else{
                                                echo '<div class= "no-day col-custom text-center border border-primary rounded"></div>';
                                            }
                                        }
                                        
                                    }
                                echo '</div>';
                            }
                        }
                    ?>
                    <!-- ENDING LOADING A MONTH -->
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="script/main.js"></script> -->
    <script>
        $(document).ready(function(){
            var dt = new Date();
            var n= dt.getMonth()+1;
            var year  = dt.getFullYear();
            
            
            /* current month using javascript */
            var currentMonth = n;
            var currentDay = dt.getDate();
            var currentYear = year;
            $('#currentMonth').click(function(){
                $(location).attr('href', 'index.php?month='+currentYear+'-'+currentMonth+'-'+'1');
            });
            // Endding

            // begining prev button
            $('#prevMonth').click(function() {
                //validating URL
                if((window.location.search).length > 0){
                    var newString = cutString(window.location.search);
                    n=newString[1];
                    year= newString[0];
                    previous(n,year);
                }else{
                    previous(n,year);
                }
            });
            //Ending 

            // when I hit the next month. it will keep changing monthly
            $('#nextMonth').click(function() {
                //getting current day in a month
                if((window.location.search).length > 0){
                    var newString = cutString(window.location.search);
                    n = newString[1];
                    console.log(newString[0]);
                    year= newString[0];
                    next(n,year);
                }else{
                    next(n,year);
                }
            });

            //start adding an event
            $('.bottom-design').click(function(){
                var day = $(this).parent().get(0).childNodes[0].innerHTML;
                console.log(day);
                $(location).attr('href', 'createSchedule.php?id='+day+'-'+year);
            });
            //ending
        });

        /* name:cutString
        Parameter: object: contains date
        return: array */
        function cutString(object){
            var newString = object.substr(7,object.length);
            return newString.trim().split("-");
        }
        //ending function

        //begin previous function
        function previous(n,year){
            if(n>0){
                n--;
            }
            if(n==0){
                n = 12;
                year= year -1;             
            }
            $(location).attr("href", "index.php?month="+year+"-"+n);
        }
        //ending

        //begin next month
        function next(n,year){
            if(n<=12){
                    n++;
                }
                if(n>12){
                    n=1;
                    year++;
                }
                $(location).attr("href", "index.php?month="+year+"-"+n);
        }
        //ending

        
    </script>
  </body>
</html>

 <!-- <span class="dot text-center bg-primary text-white">1</span> -->
