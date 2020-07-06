// validation
var session;

function formValidator(ele) {
    var triggerEle = $(ele);
    triggerEle.find(".req-field").each(function() {
        if ($(this).val() == "" || $(this).hasClass('email') && validateEmail($(this).val()) === false) {
            $(this).addClass('input-danger')
            $(this).removeClass('input-fill')
        } else {
            $(this).removeClass('input-danger')
            $(this).addClass('input-fill')
        }


    })

    // $('.req-field').keyup(function(){
    //   formValidator(ele)
    // });
    return triggerEle.find(".input-danger").length;
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
var signinflag = null;

function signIn(email, password) {
    $.ajax({
        url: 'dashboard/request.php',
        method: 'post',
        data: {
            'requestType': 'signIn',
            'login_email': email,
            'login_password': password,
            'loginUserType': 'user'
        },
        success: function(response) {
            response = JSON.parse(response);

            if (response.status == 'true') {
                window.location.href = window.location.href;
                window.location.replace(window.location.href);
            } else {
                console.log(response);
                var warrning = "Username or password is incorrect!";
                $('.addwarrning').empty();
                $('.addwarrning').append(warrning);
            }

        }
    });
}

function b_signIn(email, password) {
    $.ajax({
        url: 'dashboard/request.php',
        method: 'post',
        data: {
            'requestType': 'signIn',
            'login_email': email,
            'login_password': password,
            'loginUserType': 'user'
        },
        success: function(response) {
            response = JSON.parse(response);
            $('#session').html(email);
            session = $("#session").text();
            session = session.replace(/\s/g, '');
            console.log(session);
            if (session.length > 3) {
                var tempo = '<button type="submit" onclick="showsummary()" class="form-control btn btn-default button" data-toggle="modal" data-target="#myModal">Book Now</button>';
                $(".summary .form-group").empty();
                $(".summary .form-group").append(tempo);
            }
            if (response.status == 'true') {
                $("#loginbox .cat-container").empty();
                var message = "<h3>You're Now Signned In</h3>";
                $("#loginbox .cat-container").append(message);
            } else {
                console.log(response);
                var warrning = "Username or password is incorrect!";
                $('.addwarrning').empty();
                $('.addwarrning').append(warrning);
            }

        }
    });
}

function signUp(email, name, phone, password) {

    $.ajax({
        url: 'dashboard/request.php',
        method: 'post',
        data: {
            'requestType': 'signUp',
            'signup_email': email,
            'signup_name': name,
            'signupPhone': phone,
            'signup_password': password,
            'UserType': 'user'
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.status == 'true') {
                window.location.href = window.location.href;
                window.location.replace(window.location.href);
            } else if (response.status == 'exist') {
                alert("User Email Already Exist");

            } else {
                alert('error logging');
            }

        }
    });
    // return signUp_res;
}

function signUp_guest(email, name, phone, password) {
    $.ajax({
        url: 'dashboard/request.php',
        method: 'post',
        data: {
            'requestType': 'signUp_guest',
            'signup_email': email,
            'signup_name': name,
            'signupPhone': phone,
            'signup_password': password,
            'UserType': 'guest'
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.status == 'true') {
                $('#session').html(email);
                session = $("#session").text();
                session = session.replace(/\s/g, '');
                console.log(session);
                if (session.length > 3) {
                    var tempo = '<button type="submit" onclick="showsummary()" class="form-control btn btn-default button" data-toggle="modal" data-target="#myModal">Book Now</button>';
                    $(".summary .form-group").empty();
                    $(".summary .form-group").append(tempo);
                }
                $("#loginbox .cat-container").empty();
                var message = "<h3>You're Now Signned In As Guest</h3>";
                $("#loginbox .cat-container").append(message);
            } else if (response.status == 'exist') {
                message = "<p>Email Already Exist</p>"
                $("#loginbox .cat-container .warrning").append(message);

            } else {
                alert('error');
            }

        }
    });
    // return signUp_res;
}
// login click
var response = null;
$('#btnlogin').click(function() {
    if (formValidator('#sign_in_modal') == 0) {
        var email = $('#login_email').val();
        var password = $('#login_password').val();
        var rep = signIn(email, password);
    }
});
// login click booking
var response = null;


// sign up  click
$('#signuprequest').click(function() {
    console.log(formValidator('#sign_up_modal'))
    if (formValidator('#sign_up_modal') == 0) {
        var name = $('#signupName').val();
        var email = $('#signupEmail').val();
        var phone = $('#signupPhone').val();
        var password = $('#signup_password').val();
        var confirm_password= $('#signup_c_password').val();
        if(password==confirm_password){
        var checksignup = signUp(email, name, phone, password);
        }else{
            console.log(confirm_password);
            console.log(password);
            $('#alert').empty();
            $('#alert').append("Passwords mismatch");
            $("#signup_c_password").addClass('input-danger')
            $("#signup_c_password").removeClass('input-fill')
        }
    }
});
// translate click
$('#translate').click(function() {
   $('#google_translate_element').toggleClass('hidden');
   
});
