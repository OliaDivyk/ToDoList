$('#add_form').on('click', function()
{
    var statusTitle = false;
    var statusDescription = false;

    if(!$('#nameTitle').val()) {
        $('#nameTitle').addClass('warning');
        statusTitle = false;
    } else {
        $('#nameTitle').removeClass('warning');
        statusTitle = true;
    }

    if(!$('#description').val()) {
        $('#description').addClass('warning');
        statusDescription = false;
    } else {
        $('#description').removeClass('warning');
        statusDescription = true;
    }

    if(statusTitle && statusDescription) {
        sendData();
    }
}); 

function sendData() {
    var nameTitle = $('#nameTitle').val();
    var description = $('#description').val();
    var category = $('#categoryId').val();

    $('#nameTitle').val('');
    $('#description').val('');
    $('#categoryId').val('');

    $.ajax({
      url: "./SendData.php", 
       	method: "POST", 
    	data: {nameTitle, description, category},
       	success: function(data) {	
 		    console.log(data); 
        }
    });
}

function deleteTask(taskId) {
    var taskId = taskId.dataset.id;

    $.ajax({
        url: './deleteData.php',
        method: 'POST',
        data: {taskId},
        success: function(data) {
            $('#' + taskId).remove();
        }
    });
}