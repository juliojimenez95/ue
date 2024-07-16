function alert_error(msg) {
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    Toast.fire({
        icon: "error",
        title: msg,
    });
}

function alert_success(msg) {
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    Toast.fire({
        icon: "success",
        title: msg,
    });
}

$(document).on("click", "#btn_login", function() {
    let username = $("#username").val();
    let pass = $("#pass").val();

    const val_name = /[a-zA-Z0-9]/;
    //const val_pass =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}$/;
    if (username == "") {
        alert_error("Ingrese un usuario.");
    } else if (!val_name.test(username)) {
        alert_error("Ingrese un usuario válido.");
    } else if (pass == "") {
        alert_error("Ingrese una contraseña.");
    } else if (pass.trim() == "") {
        alert_error("Ingrese una contraseña válida.");
    } else {
        $.ajax({
            url: "/login",
            data: {
                username: username,
                pass: pass,
            },
            type: "post",
            beforeSend: function() {
                $('#btn_login').prop('disabled', true);
                $('#btn_login').empty();
                $('#btn_login').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>  CARGANDO');
            },
            success: function(response) {
                if (response.response) {
                    alert_success(response.msg);
                    setTimeout(() => {
                        location.href = "/home";
                    }, 1100);
                } else {
                    alert_error(response.msg);
                    $('#btn_login').prop('disabled', false);
                    $('#btn_login').empty();
                    $('#btn_login').append('INICIAR SESION');
                }
            },

            error: function(x, xs, xt) {
                alert_error(response.msg);
                $('#btn_login').prop('disabled', false);
                $('#btn_login').empty();
                $('#btn_login').append('INICIAR SESION');
            },
        });
    }
});