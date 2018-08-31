<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Schedule</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style/createSchedule.css">
</head>
<body>
<span class="label label-default">1</span>
    
    <form>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="label label-default">List of Hours ( 8:00 AM to 5:00 PM )</div>
                    <ul>
                        <li class="label label-default">8:00 AM - 9:00 AM</li>
                        <li class="label label-default">9:00 AM - 10:00 AM</li>
                        <li class="label label-default">10:00 AM - 11:00 AM</li>
                        <li class="label label-default">11:00 AM - 12:00 PM</li>
                        <li class="label label-default">12:00 PM - 13:00 PM</li>
                        <li class="label label-default">13:00 PM - 14:00 PM</li>
                    </ul>
                    <!-- creat multiple labels, each label has one id -->
                    <!-- print a list of hours -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span class="label label-default">Sender</span>
                    <input id="nameSender" type="text" name="name" size ="20" />
                    <!-- <span id="nameAlert">*</span> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span class="label label-default">Email</span>
                    <input id="emailSender" type="text" name="name" size ="20" />
                    <!-- <span id="emailAlert">*</span> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span class="label label-default">Notes</span>
                    <textarea id="textArea" rows="3" cols="17"></textarea>
                    <!-- <span id="emailAlert">*</span> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span class="label label-default">Reciever Email</span>
                    <textarea id="receiver" rows="3" cols="17"></textarea>
                    <!-- <span id="emailAlert">*</span> -->
                </div>
            </div>
            <div class="row"></div>
            <div class="col-md-3">
                <!-- <button type="button" id="submit" class="label label-defaul">Submit</button> -->
                </form>
                <input type="submit" class="label-default"  value="submit" />
                <input type="reset" class="label-default"  value="Reset" />
                <input type="submit" class="label-default"  value="Cancel" />
            </div>
        </div>
    

    <!-- connect to server -->
    <?php
       
        function gettingEvents($object){
            $arrResult=[];
            $host="localhost";
            $username="root";
            $password="";
            $databasename="calendar";
           
            $link = @mysqli_connect($host,$username,$password,$databasename) or die("Cannot connect to database.");
            $query_info = " SELECT * FROM monthlytesting WHERE date = '$object' ";
            
            if($result_query= @mysqli_query($link, $query_info)){ 
                $counter=0;
                while($row=@mysqli_fetch_row($result_query)){
                    $arrResult[$counter++] = $row;
                }
            }else{
                echo "ERROR!CANNOT QUERY DATABASE";
            }
            @mysqli_close($link);
            return $arrResult;
        }
    ?>
    <!-- ending connect to server -->

    <?php
        if(!empty($_GET) && isset($_GET)){
            $arrPass = explode('-',trim($_GET['date']));
            $arrResult = gettingEvents("2017-01-01");
            print_r($arrResult);
            ?>
                <section>
                    <div class="container">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo $_GET['date']; ?></div>
                        <div class="panel-body">
                        <?php
                            for($i=0;$i<count($arrResult);$i++){
                                ?>
                                 <div class="row">
                                    <div class="col-md-2">
                                        <span class="label label-default">Time: <?php echo $arrResult[$i][7]; ?></span>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Priority : <?php echo $arrResult[$i][3]; ?></span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-2">
                                        <span> &nbsp; </span>
                                    </div>
                                    <div class="col-md-4">
                                        <span>event : <?php echo $arrResult[$i][2]; ?></span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-2">
                                        <span> &nbsp; </span>
                                    </div>
                                    <div class="col-md-4">
                                        <span>attendant : <?php echo $arrResult[$i][6]; ?></span>
                                    </div>
                                 </div>
                                <?php
                            }
                        ?>
                    </div>
                    </div>
                </section>
            <?php
        }else{
            echo "CANNOT GET THERE";
        }
    ?>
    
    </body>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        var $x = jQuery.noConflict();
    </script>
    <script>
        $(document).ready(function(){
        //start validating the inputs
        var senderName,senderEmail,note,recieverEmail;


        //select and deselect an item. It also gets 
        var timeSelected;
        var previousSelection;
        $('li').click(function(){
            if($x.isEmptyObject(previousSelection)){
                previousSelection = $(this);
                //console.log(previousSelection);
                $(this).toggleClass("selectedli");
                timeSelected = $(this).text();
            }else{
                if(!$x.isEmptyObject(previousSelection)){
                    previousSelection.removeClass("selectedli");
                    $(this).toggleClass("selectedli");
                    timeSelected = $(this).text();
                    previousSelection = $(this);
                    //console.log(previousSelection);
                }
            }
        });
        $(function () {
            $('form').bind('click', function (event) {

            event.preventDefault();// using this page stop being refreshing 
           
            $x.ajax({
                type: 'POST',
                url: 'submitRequest.php',
                data: $('form').serialize(),
                success: function () {
                    console.log("asd");
                }
            });

            });
        });
        // $('#submitForm').submit(function(e){
        //     //alert('mot hai ba');
        //     e.preventDefault();
        //     senderName = ($('#nameSender').val());
        //     senderEmail = $('#emailSender').val();
        //     note = $('#textArea').val();
        //     recieverEmail = $('#receiver').val();
        //     console.log(senderName+senderEmail+note+recieverEmail+timeSelected);
        //     //need to change the color and stuffs
        //     if((senderName == null || senderName == '') || 
        //         (senderEmail == null || senderEmail == '') || 
        //         (note == null || note == '') || 
        //         (recieverEmail == null || recieverEmail == '') ||
        //         (timeSelected == null || timeSelected == '') ){

        //         alert('Please check your input');
        //     }else{
        //         $x.ajax({
        //             type: "POST",
        //             url: 'submitRequest.php',
        //             dataType: 'json',
        //             data: {functionname: 'add', arguments: [1, 2]},
                
        //             success: function (obj, textstatus) {
        //                         if( !('error' in obj) ) {
        //                             yourVariable = obj.result;
        //                         }
        //                         else {
        //                             console.log(obj.error);
        //                         }
        //                     }
        //         });
        //         }
        //     });
        });
    </script>
</html>
