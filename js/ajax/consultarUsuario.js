$(document).ready(function() {
    var url = $("#urlRoute").val();
    $("#siguienteLogin").on("click", function(){
        $("#siguienteLogin").attr('disabled', true);
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/getUser",
            data: {email: $("#email").val()},
            success: function (data) {
                if(data.length > 0){
                    $("#spanMail").text($("#email").val());
                    $("#imgUser").attr("src", url+"/img/img_users/perfil/"+data[0].profilePhoto);
                    $("#login1").hide();
                    $("#login2").show();
                    $("#siguienteLogin").attr('disabled', false);
                }else{
                    notif({
                        type: "error",
                        msg: "El email ingresado no esta actualmente registrado",
                        position: "right",
                        opacity: 0.8
                    });
                    $("#siguienteLogin").attr('disabled', false);
                    return false;
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
    $("#btnAtras").on("click", function(){
        $("#login1").show();
        $("#login2").hide();
    })
})