$(document).ready(function(){

    let update = false;

    console.log('jQuery is working');
    $('#task-result').hide();
    fetchTasks();
    
    /**search function */
    $('#search').keyup(function(e){
        $('#task-result').hide();
        let search = $('#search').val();
        if(search.length){
            $.ajax({
                url: 'Tasks-config/task-search.php',
                type: 'POST',
                data: { search: search },
                success: function(response){
                    let data = JSON.parse(response);
                    let template = '';
    
                    data.forEach(dat => {
                        template += `<li>
                            ${dat.name}
                        </li>`
                    });
    
                    $('#container').html(template);
                    /**through this function we show a little form*/
                    $('#task-result').show();
                }
            })
        }
       
    });


    /**Capturing the data from task-form and sending all the data to the tasks table*/

    $('#task-form').submit(function(e){
        const postData = {
            name: $('#name').val(),
            description: $('#description').val(),
            id: $('#taskId').val()
        };

        let url = update === false ? 'Tasks-config/task-add.php' : 'Tasks-config/task-update.php';
        console.log(url);


        $.post(url, postData, function (response) {
            console.log(response);
            fetchTasks();

            alertify.success(response.msg);
               
            $('#task-form').trigger('reset');
        }, 'json').fail(function(jqXHR, textStatus, errorThrown) {
            let response = JSON.parse(jqXHR.responseText);
            alertify.error(response.msg);
          });

        /**execute the function submit only when the user deside to send the data*/
        e.preventDefault();
    });




/**List data table */

  function fetchTasks() {
    $.ajax({
        url: 'Tasks-config/task-list.php',
        type: 'GET',
        success: function(response) {
            let tasks = JSON.parse(response);
            let template = '';
                tasks.forEach(task => {
                    template += 
                    `<tr  taskId="${task.id}">
                        <td>${task.id}</td>
                        <td>
                            <a href="#" class="task-item">${task.name}</a>
                        </td>
                        <td>${task.description}</td>
                        
                        <td>
                        
                            <button class="task-delete btn btn-danger">
                                Delete
                            </button>
                        
                        </td>
  
                    </tr>`
                });

                $('#body').html(template);
        }
    });

  }

  $(document).on('click', '.task-delete', function () {
        if(confirm('This task will be deleted?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('taskId');
            $.post('Tasks-config/task-delete.php', {id: id}, function(response)  {
                fetchTasks();
            })
        }
  });

  $(document).on('click', '.task-item', function() {
    let element = $(this)[0].parentElement.parentElement;    
    let id = $(element).attr('taskId');
    $.post('Tasks-config/task-single.php', {id: id}, function(response) {
       const task =  JSON.parse(response);
        $('#name').val(task.name);
        $('#description').val(task.description);

        $('#taskId').val(task.id);

        update = true;
        })
  });

});