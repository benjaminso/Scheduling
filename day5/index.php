<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Calendar_template</title>
    <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <div class="container">
            <div class="border_container">
                <div class="row">
                    <div class="col-md-4">
                        <div id="month">
                            <!-- set date month and year -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input id="currentMonth" type="submit" name="Current Month" value="Current Month" /> 
                    </div>
                    <div class="col-md-4 text-right">
                            <input id="prevMonth" type="submit" name="Prev Month" value="Prev Month" /> 
                            <input id="nextMonth" type="submit" name="Next Month" value="Next Month" /> 
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
                <!-- javascript and lib(jquery) will be placed in here to generate weeks and date -->
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script/main.js"></script>
  </body>
</html>

 <!-- <span class="dot text-center bg-primary text-white">1</span> -->