$(document).ready(function(){
    //start validating the inputs
    var senderName,senderEmail,note,recieverEmail;


    //select and deselect an item. It also gets 
    var timeSelected;
    var previousSelection;
    $('li').click(function(){
        if($.isEmptyObject(previousSelection)){
            previousSelection = $(this);
            //console.log(previousSelection);
            $(this).toggleClass("selectedli");
            timeSelected = $(this).text();
        }else{
            if(!$.isEmptyObject(previousSelection)){
                previousSelection.removeClass("selectedli");
                $(this).toggleClass("selectedli");
                timeSelected = $(this).text();
                previousSelection = $(this);
                //console.log(previousSelection);
            }
        }
    });
    $('#submitForm').submit(function(e){
        //alert('mot hai ba');
        e.preventDefault();
        senderName = ($('#nameSender').val());
        senderEmail = $('#emailSender').val();
        note = $('#textArea').val();
        recieverEmail = $('#receiver').val();
        console.log(senderName+senderEmail+note+recieverEmail+timeSelected);
        //need to change the color and stuffs
        if((senderName == null || senderName == '') || 
            (senderEmail == null || senderEmail == '') || 
            (note == null || note == '') || 
            (recieverEmail == null || recieverEmail == '') ||
            (timeSelected == null || timeSelected == '') ){

            alert('Please check your input');
        }else{
            
        }
    });

    
});