$(document).ready(function(){
    $('#login-button').click(function(){
        $('#message').empty();
        var username = $('#login-username').val();
        var password = $('#login-password').val();
        if(username != "" && password != ""){
            $('#login-button').css('background', 'rgb(0, 82, 0)');
            $('#login-button').empty();
            $('#login-button').append(`<i class="fas fa-spinner load"></i>`);
            $.ajax({
                url: "../src/api/login.php",
                method: "POST",
                data: {
                    username:username,
                    password:password
                },
                success: function(error){
                    if(error){
                        $('#login-button').css('background', 'green');
                        $('#login-button').empty(); 
                        $('#login-button').append(`Connexion`);
                        $('#message').append("<p style='color: red;'>" + error + "</p>");
                    }else{
                        $('#message').append("<p class='success'>Bienvenue, vous êtes connecté</p>");
                        setTimeout(function(){
                            document.location.href = "/thalassante-admin/";
                        }, 1000)
                    }
                },
            })
        }else{
            $('#message').append("<p class='error'>Veuillez remplir les champs</p>");
        }
    })
})