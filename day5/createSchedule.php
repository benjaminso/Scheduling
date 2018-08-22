<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Schedule</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        #nameSender, #emailSender,#textArea,#receiver{
            border: 0.5px solid black;
            border-radius: 2.5px;
            float:right;
        }
        .row{
            padding-bottom:10px;
        }
        button{
            background-color:gray;
            color:white;
            margin-left:20px;
        }
        section{
            padding-top:20px;
        }
        
    </style>
</head>
<body>
    <?php
        printf($_GET['id']);
    ?>
    <form id="submitForm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="label label-default">List of Hours</div>
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
                <input type="submit" class="label label-default" value="submit">
                <button type="button" id="reset" class="label label-defaul">Reset</button>
                <button type="button" id="cancel" class="label label-defaul">Cancel</button>
            </div>
        </div>
    </form>
    <section>
        <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Other Activities</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <span class="label label-default">1</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#submitForm').submit(function(){
                alert("just clicked");
                console.log("mot hai ba");
            });
        });
    </script>
</html>
