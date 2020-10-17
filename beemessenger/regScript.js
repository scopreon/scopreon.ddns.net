var usernameSuccess;
var passwordSuccess;
var passwordMatch;

$("div.please").hide();

$('#username').blur(function () {
    console.log('Username:' + $(this).val());
    if (!$(this).val()) {        // ! returns true for empty string.
        $(this).parent().addClass('form-control error');
        $('small.username').html(`Username is required`);
        usernameSuccess = false;
    } else {
        $(this).parent().removeClass('form-control error');
        $(this).parent().addClass('form-control success');
        usernameSuccess = true;
    }
});

$('#password').blur(function () {
    console.log('Password: ' + $(this).val());
    if ($(this).val().length < 6) {
        $(this).parent().addClass('form-control error');
        $('small.password').html(`Password must be at least 6 characters`);
        passwordSuccess = false;
    } else {
        $(this).parent().removeClass('form-control error');
        $(this).parent().addClass('form-control success');
        passwordSuccess = true;
    }
});

$('#password2').blur(function () {
    if ($(this).val() != $('#password').val() || !$(this).val()) {
        $(this).parent().addClass('form-control error');
        $('small.password2').html(`Passwords do not match`);
        passwordMatch = false;
    } else {
        $(this).parent().removeClass('form-control error');
        $(this).parent().addClass('form-control success');
        passwordMatch = true;
    }
});

$('#btn1').hover(function () {
    $('#undersubmit').toggle();
    $('#submittext').toggle();
});

$('#undersubmit').hide();

function pageRedirect() {
    window.location.replace("../index.html");
}

var timerVar;
function timer1() {
    timerVar = setTimeout(hideFunc, 3000);
}
function hideFunc() {
    $("div.please").hide();
}

$('#btn1').click(function () {
    if (usernameSuccess === true && passwordSuccess === true && passwordMatch === true) {
        document.getElementById("form").submit();
    } else {
        $("div.please").show();
        timer1();
    }
});
