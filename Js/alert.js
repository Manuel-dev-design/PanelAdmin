$(document).ready(function(){

    $('#btnSend').click(function(){
      
        var problem = '';

        /**validating each text box in the contact form*/
        if($('#name').val() == ''){
            problem += '<p>Write a name</p>';
            $('#name').css("border-bottom-color", "red")
        }else{
            $('#name').css("border-bottom-color", "#d1d1d1")
        }

        if($('#email').val() == ''){
            problem += '<p>Write your email address</p>';
            $('#email').css("border-bottom-color", "red")
        }else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        if($('#message').val() == ''){
            problem += '<p>Write your message</p>';
            $('#message').css("border-bottom-color", "red")
        }else{
            $('#message').css("border-bottom-color", "#d1d1d1")
        }


        /**Text box validation message*/
        if(problem == '' ==  false) {
        var messageModal = '<div class="modal_wrap">'+
                                '<div class="message_modal">'+

                                '<h3>Please fill the contact form</h3>'+
                                 problem+
                            '<span id="btnClose">Close</span>'+
                            '</div>'+
                            '</div>'


            $('body').append(messageModal);
        }
        /**Btn close*/
        $('#btnClose').click(function(){
                $('.modal_wrap').remove();
        });
    });
});