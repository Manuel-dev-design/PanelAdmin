/**jQuery(document).on('submit', '#formlg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: 'validLogin.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('#execute').val('validating');
        }
    })

    .done(function(response) {
        console.log(response);

        if(!response.error){
            if(response.type == 'Admin') {
                document.location.href = 'admin.php'

            }
        }else if(response.type == 'User'){
            document.location.href = 'user.php'
        }else{
            $('.card-body').slideDown('slow');
            setTimeout(function(){
                $('.card-body').slideUp('slow');
            },3000);
            $('#execute').val('session start');
        }
    })
    .fail(function(resp){
        console.log(resp);
    })
    .always(function(){
        console.log("complete");
    });
});*/


let form = document.querySelector('form')
let answer = document.querySelector('.answer')

form.addEventListener('submit', evt=>{
    evt.preventDefault()
    const xhr = new XMLHttpRequest()
    const formData = new FormData(form)

    xhr.open('POST','validLogin.php',true)

    xhr.addEventListener('load', e=>{
        if(e.target.readyState == 4 && e.target.status == 200){
            if(e.target.response == 'ok'){
                document.location.href = 'admin.php'
            }else{
                answer.innerHTML = e.target.response
            }
          
        }   

    })
    xhr.send(formData)
})