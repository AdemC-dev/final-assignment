//Slider
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

//Scroll Sticky
window.onscroll = function () { myFunction() };

let navbar = document.getElementById("header-scroll");
let sticky = navbar.offsetTop;

function myFunction() {
    if (window.scrollY >= 0) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}

//Search Bar TypeWriter
document.addEventListener('DOMContentLoaded', function() {
    var textSpan = document.getElementById('typeWriter');
    var text = textSpan.getAttribute('data-words').split(',');
    var delay = parseInt(textSpan.getAttribute('data-delay'));
    var deleteDelay = parseInt(textSpan.getAttribute('data-deletedelay'));
    let colors = textSpan.getAttribute("data-colors").split(",");
    var wordIndex = 0;
    let colorIndex = 0;
    var isDeleting = false;

    let cursorSpan = document.querySelector(".cursor");;
    //let cursorDisplay = cursorSpan.dataset.cursorDisplay;

    function positionCursor() {
        /*
        let textValue = textSpan.textContent;
        let lastChar = textValue.charAt(textValue.length - 1);
        let lastCharWidth = getTextWidth(lastChar);
        cursorSpan.style.left = (textSpan.getBoundingClientRect().left + lastCharWidth + "px");
        */
        let spanWidth = textSpan.getBoundingClientRect().width;
        let getBound = textSpan.getBoundingClientRect();
        
        cursorSpan.style.left = (getBound.left + spanWidth - 668) + 'px';
    }

    /*
    function getTextWidth(text) {
        let span = document.createElement('span');
        span.style.visibility = 'hidden';
        span.style.whiteSpace = 'nowrap';
        span.style.fontSize = getComputedStyle(textSpan).fontSize;
        span.textContent = text;
        document.body.appendChild(span);
        let width = span.getBoundingClientRect().width;
        document.body.removeChild(span);
        return width;
    }
    */

    function type() {
        var currentText = text[wordIndex];
        let currentColor = colors[colorIndex];
        textSpan.style.color = currentColor;

        let alter = isDeleting ? textSpan.textContent.length - 1 : textSpan.textContent.length + 1;
        let typedText = currentText.substring(0, alter);
        textSpan.textContent = typedText;

        positionCursor();

        if (!isDeleting && textSpan.textContent === currentText) {
            isDeleting = true;
            setTimeout(type, deleteDelay);
        }
        else if (isDeleting && textSpan.textContent === '') {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % text.length;
            colorIndex = (colorIndex + 1) % colors.length;
            setTimeout(type, 750);
        }
        else {
            setTimeout(type, delay);
        }
    }

    setTimeout(type, delay);
});


//Login&Register Screen
const loginScreen = document.getElementById("login");
const regScreen = document.getElementById("register");
const logContent = document.getElementById("logContent");
const regContent = document.getElementById("regContent");
const login = document.getElementById("logbtn");
const register = document.getElementById("regbtn");
const cancel = document.getElementById("cancel");
const cancelReg = document.getElementById("cancelReg");
const regbtn2 = document.getElementById("regbtn2");
/*
const buttons = document.getElementById("main");
buttons.addEventListener("click", e => {
  if(e.target.matches("button")) {
    openLogScreen();
  }

  if(e.target.matches("cancel")) {
    closeLogScreen();
  }
});
*/
/*
register.addEventListener("click", () => {
    if(window.location.pathname.endsWith("main.php")) {
        window.location.href = "register.php";
    }
});

window.addEventListener("load", () => {
    if (window.location.pathname.endsWith("register.php")) {
        openRegScreen();
    }
});
*/
login.addEventListener("click", e => {
    if (e.target.matches("button")) {
        if(regScreen.style.display === "block") {
            closeRegScreen();
            setTimeout(() => {
                openLogScreen();
            }, 400);
        }
        else {
            openLogScreen();
        }
    }
});

register.addEventListener("click", e => {
    if (e.target.matches("button")) {
        if(loginScreen.style.display === "block") {
            closeLogScreen();
            setTimeout(() => {
                openRegScreen();
            }, 400);        
        }
        else {
            openRegScreen();
        }
    }
});

regbtn2.onclick = () => {
    closeLogScreen();
    setTimeout(() => {
        openRegScreen();
    }, 400);
}

cancel.addEventListener("click", () => {
    closeLogScreen();
});

cancelReg.addEventListener("click", () => {
    closeRegScreen();
});

function openLogScreen() {
    logContent.classList.remove("fadeOut");
    loginScreen.style.display = "block";
}
function openRegScreen() {
    regContent.classList.remove("fadeOut");
    regScreen.style.display = "block";
}

function closeLogScreen() {
    logContent.classList.add("fadeOut");
    setTimeout(() => {
        loginScreen.style.display = "none";
    }, 580);
}

function closeRegScreen() {
    regContent.classList.add("fadeOut");
    setTimeout(() => {
        regScreen.style.display = "none";
    }, 580);
}


function regHref() {
    if (e.target.matches("button")) {
        if(regScreen.style.display === "block") {
            closeRegScreen();
            setTimeout(() => {
                openLogScreen();
            }, 400);
        }
        else {
            openLogScreen();
        }
    }
}


//PASSWORD VİSİBİLİTY
const toggles = document.querySelectorAll(".toggle");
const icons = document.querySelectorAll(".icon");
let passwordInput = document.querySelectorAll(".passwordInput");
    
    function togglePassword() {
        passwordInput.forEach((input, index) => {
            if(input.type === "password") {
                input.type = "text";
                icons[index].classList.remove("fa-eye");
                icons[index].classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icons[index].classList.remove("fa-eye-slash");
                icons[index].classList.add("fa-eye");
            }
        });
    }

    toggles.forEach((toggle) => {
        toggle.addEventListener('click', togglePassword, false);
    })


/*
    passwordInput.addEventListener("input", () => {
        toggles.style.display = "block";
    })
/*
    function updateColorValidity() {
        if(passwordInput.validity.valid) {
            toggle.style.color = "#1c1c1c";
        } else {
            toggle.style.color = "";
        }
    }

    passwordInput.addEventListener("input", updateColorValidity);

    passwordInput.onfocus = () => {
        toggle.style.color = "#1c1c1c"
    }
    passwordInput.onblur = () => {
        toggle.style.color = "#1c1c1c";
    }
*/

// FORM VERİFY & VALİDATİON
//const regsubmit = document.getElementById("regSubmit");
//const logsubmit = document.getElementById("logSubmit");
//const submit = document.getElementById("submit");
/*
document.getElementById("register").addEventListener("submit", function (e) {
    e.preventDefault();

    let userName = document.getElementById("userName").value;
    let email = document.getElementById("email").value;
    let pswd = document.getElementById("pswd").value;
    let pswdVerify = document.getElementById("pswdVerify").value;

    const errorContainer = document.getElementById("errorContainer");
    errorContainer.innerHTML = "";

    if (userName === "" || email === "") {
        displayError("Lütfen kullanıcı adınızı veya emailinizi giriniz!");
        return;
    }

    if (pswd.length < 8 || pswd.length > 32) {
        displayError("Şifre en az 8 en fazla 32 karakterden oluşabilir!");
        return;
    }

    if (pswd !== pswdVerify) {
        displayError("Şifreler eşleşmiyor!");
        return;
    }




});
*/
const errorContainer = document.getElementById("errorContainer");

function displayError(errorMessage) {
    let errorMessageSpan = document.createElement("span");
    errorMessageSpan.className = "errorMsg";
    errorMessageSpan.textContent = errorMessage;
    errorContainer.appendChild(errorMessageSpan);
}

function checkEmailStatus(email) {
    $.post("checkEmail.php", { email: email }, function (data) {
        if (data === "exists") {
            displayError("Bu e-posta zaten kayıtlı!");
        } else {
            $insert = "INSERT INTO form (userName, email, pswd) VALUES ('$userName', '$email', '$hashedPassword')";
            if (mysqli_query($conn, $insert)) {
                $_SESSION["regSuccessMessage"] = "Kayıt başarıyla gerçekleştirildi.";
                header('Location: logreg.php');
            }
        }
    });
}















/*
regScreen.addEventListener("submit", e => {
    e.preventDefault();

    verifyRegister();
})

$(function() {

    $("#register").on("submit", e => {
        e.preventDefault();

        let fromData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "logreg.php",
            data: FormData,
            dataType: "json",
            success: function(response) {
                if(response.success) {
                    alert ("Hesabınız başarıyla oluşturuldu!");
                } else {
                    alert(response.error);
                }
            }
        });

    });
});
*/
/*

logsubmit.addEventListener("click", submitCheck, false);
regsubmit.addEventListener("click", submitCheck, false);
function submitCheck() {
    if(passwordInput.type === "text") {
        passwordInput.type = "password";
    }
}

*/
/*
document.addEventListener("DOMContentLoaded", () => {
    let errorMessage = "<?php echo isset($_SESSION['error_message']) ? $_SESSION['error_message'] : ''; ?>";

    if(errorMessage !== "") {
        displayError(errorMessage);

        openRegScreen();
    }
});
function displayError(errorMessage) {
    let errorContainer = document.getElementById("errorContainer");

    errorContainer.innerHTML = "";

    let errorSpan = document.createElement("span");
    errorSpan.className = "errorMsg";
    errorSpan.textContent = errorMessage;
    errorContainer.appendChild(errorSpan);

}
*/