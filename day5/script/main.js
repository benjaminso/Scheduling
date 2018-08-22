$(document).ready(function(){

    // clickable event for adding a day:
  

    var dt = new Date();
    var n= dt.getMonth()+1;
    var year  = dt.getFullYear();

    //print month and year to the current position
    var daysInMonth= (new Date(year,n,0)).getDate();
    var firstDay = new Date(year,n-1,1).getDay();
    var numWeeks = Math.ceil(daysInMonth/7);
    printDay(n,year);
    removingDOMs();
    printCalendar(daysInMonth,firstDay, numWeeks);


    // when I hit a button the previous month will be changed and design is going to change as well.

    $('#prevMonth').click(function() {
        //getting current day in a month
        if(n>0){
            n--;
        }
        if(n==0){
            n = 12;
            year= year -1;             
        }
        var daysInMonth= (new Date(year,n,0)).getDate();
        var firstDay = new Date(year,n-1,1).getDay();
        var numWeeks = Math.ceil(daysInMonth/7);
        printDay(n,year);
        removingDOMs();
        printCalendar(daysInMonth,firstDay, numWeeks);
    });

    // when I hit the next month. it will keep changing monthly
    $('#nextMonth').click(function() {
        //getting current day in a month
        if(n<=12){
            n++;
        }
        if(n>12){
            n=1;
            year=year+1;
        }
        var daysInMonth= (new Date(year,n,0)).getDate();
        var firstDay = new Date(year,n-1,1).getDay();
        var numWeeks = Math.ceil(daysInMonth/7);
        printDay(n,year);
        removingDOMs();
        printCalendar(daysInMonth,firstDay, numWeeks);
    });

    $('#currentMonth').click(function(){
        var dt = new Date();
        var n= dt.getMonth()+1;
        var year  = dt.getFullYear();
        
        var daysInMonth= (new Date(year,n,0)).getDate();
        var firstDay = new Date(year,n-1,1).getDay();
        var numWeeks = Math.ceil(daysInMonth/7);
        printDay(n,year);
        removingDOMs();
        printCalendar(daysInMonth,firstDay, numWeeks);
    });

    function printDay($month, $year){
        $('#month').text($month+"/"+$year);
    }
    //getting day when clicking
    $('.bottom-design').click(function(){
        var day = $(this).parent().get(0).childNodes[0].innerHTML;
        console.log(day);
        $(location).attr('href', 'createSchedule.php?id='+n+'-'+day+'-'+year);
    });

});
//remove all DOMs
function removingDOMs(){
    $('.day2').remove();
}
//build a function to update the calendar
 //start printing days and weeks in a month.
    //procedures:
    //step 1: 7 columns- 7 days,  weeks-dynamic since the weeks are changing based on number of days.
    //step 2: appending to tags
    //number of days in a month
function printCalendar(daysInMonth,startingDate,numWeeks){
    // using to start with number of days in a month
    counter=1;
    // basicly, a week has 7 days
    column=7;

    for(i=0;i<numWeeks;i++){
            if(i==0){
                var txt2 = $("<div></div>").addClass('row m-auto day2');
                for(j=0;j<column;j++){
                    if(j>=startingDate){
                        var innerTxt = $("<div></div>").addClass('col-custom text-center border border-primary rounded')/*.text(counter++)*/;
                        var upperPart =  $("<div></div>").addClass('text-design').text(counter++).appendTo(innerTxt);
                        var lowerPart = $("<div></div>").addClass('bottom-design label label-default').text('+').appendTo(innerTxt);
                        innerTxt.appendTo(txt2);
                    }else{
                        var innerTxt = $("<div></div>").addClass('no-day col-custom text-center border border-primary rounded').text('0');
                        innerTxt.appendTo(txt2);
                    }
                }
            }
            if(i>0){
                var txt2 = $("<div></div>").addClass('row m-auto day2');
                for(j=0;j<column;j++){
                    if(counter<=daysInMonth){
                        var innerTxt = $("<div></div>").addClass('col-custom text-center border border-primary rounded')/*.text(counter++)*/;
                        var upperPart =  $("<div></div>").addClass('text-design').text(counter++).appendTo(innerTxt);
                        var lowerPart = $("<div></div>").addClass('bottom-design label label-default').text('+').appendTo(innerTxt);
                        innerTxt.appendTo(txt2);
                    }else{
                        var innerTxt = $("<div></div>").addClass('no-day col-custom text-center border border-primary rounded').text('0');
                        innerTxt.appendTo(txt2);
                    }
                }
            }
        $('.border_container').append(txt2);
    }

}