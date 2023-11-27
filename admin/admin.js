// LOGIN

$(document).ready(function() {
    $('#pwdForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'acceso.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(JSON.stringify(response));
                var success = jsonData.success;
 
                // user is logged in successfully in the back-end
                // let's redirect
                if (success = 1)
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Admin',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='dashboard.html';});
                }
                else if (success = 0)
                {
                    // alert('Invalid Credentials!');
                    Swal.fire({
                        icon: 'error',
                        title: 'Datos incorrectos',
                        text: 'Credenciales incorrectas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='index.html';});
                    // });
                }
           }
       });
     });
});