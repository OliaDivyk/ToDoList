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

$('#register').on('click', function()
{
    if($('#name').val() && $('#mail').val() && $('#password').val() && $('#confirmationpassword').val()) {
        SendDataRegister();
    }
}); 

function SendDataRegister() {
    var name = $('#name').val();
    var mail = $('#mail').val();
    var password = $('#password').val();
    var confirmationpassword = $('#confirmationpassword').val();

    $('#name').val('');
    $('#mail').val('');
    $('#password').val('');
    $('#confirmationpassword').val('');
    $.ajax({
        url: "./RegisterController.php", 
        method: "POST", 
        data: {name, mail, password, confirmationpassword},
            success: function(data) {	
                window.location.href = "/SignIn.php";
          }
      });
}

$('#signIn').on('click', function()
{
    if($('#mail').val() && $('#password').val()) {
        SendDataSignIn();
    }
}); 

function SendDataSignIn() {
    var mail = $('#mail').val();
    var password = $('#password').val();

    $('#mail').val('');
    $('#password').val('');

    $.ajax({
        url: "./SignInController.php", 
        method: "POST", 
        data: {mail, password},
            success: function(data) {	
                window.location.href = "/dashboard.php";
          }
      });
      
}

$('#signout').on('click', function() {
    $.post("/SignOutController.php", function( data ) {
        window.location.href = "/SignIn.php";
    });
});

$('#btnStarted').on('click', function() {
    window.location.href = "/SignIn.php";
});

