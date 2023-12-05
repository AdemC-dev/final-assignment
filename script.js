/*DEPRECATED
//SCROLL STICKY
window.onscroll = () => {
    scrollSticky()
};

let navbar = document.getElementById("header-scroll");
let sticky = navbar.offsetTop;

function scrollSticky() {
    if (window.scrollY >= 0) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
*/

//lOGIN & REGISTER SCREEN
const loginScreen = document.getElementById("login");
const regScreen = document.getElementById("register");
const logContent = document.getElementById("logContent");
const regContent = document.getElementById("regContent");
const login = document.getElementById("logbtn");
const register = document.getElementById("regbtn");
const cancel = document.getElementById("cancel");
const cancelReg = document.getElementById("cancelReg");
const regbtn2 = document.getElementById("regbtn2");
const inputs = document.querySelectorAll('.inputx input');
const forms = document.querySelectorAll('form');

function invalidInput() {
    inputs.forEach(input => {
        const line = input.parentElement.querySelector('.line');
        const span = input.parentElement.querySelector('span');
        if (input.value.trim() !== '' && !input.validity.valid) {
            if (line && span) {
                line.style.backgroundColor = '#f00';
                line.style.height = '44px';
                span.style.transform = 'translateX(0px) translateY(-34px)';
                span.style.fontSize = '12px';
                span.style.color = '#f00';
            }
        }
        else {
            if (line && span) {
                line.style.backgroundColor = '';
                line.style.height = '';
                span.style.transform = '';
                span.style.fontSize = '';
                span.style.color = '';
            }
        }
    });
}

inputs.forEach(input => {
    input.addEventListener('input', invalidInput);
});

function clearInput() {
    forms.forEach(form => {
        let inputs = form.querySelectorAll('input:not([type="submit"])');
        inputs.forEach(input => {
            input.value = '';
            const line = input.parentElement.querySelector('.line');
            const span = input.parentElement.querySelector('span');
            if (line && span) {
                line.style.backgroundColor = '';
                line.style.height = '';
                span.style.transform = '';
                span.style.fontSize = '';
                span.style.color = '';
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    clearInput();
})

window.addEventListener('pageshow', e => {
    if (e.persisted || (window.performance && window.performance.navigation.type == 2)) {
        clearInput();
    }
});

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
        console.log(e);
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
    clearInput();
    logContent.classList.remove("fadeOut");
    loginScreen.style.display = "block";
}
function openRegScreen() {
    clearInput();
    regContent.classList.remove("fadeOut");
    regScreen.style.display = "block";
}

function closeLogScreen() {
    clearInput();
    logContent.classList.add("fadeOut");
    setTimeout(() => {
        loginScreen.style.display = "none";
    }, 580);
}

function closeRegScreen() {
    clearInput();
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


//PASSWORD VISIBILITY
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
/*
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

//SEARCH BAR TYPEWRİTER
let textSpan = document.getElementById('typeWriter');
let wordIndex = 0;
let colorIndex = 0;
let isDeleting = false;
let text = textSpan.getAttribute('data-words').split(',');
let delay = parseInt(textSpan.getAttribute('data-delay'));
let deleteDelay = parseInt(textSpan.getAttribute('data-deletedelay'));
let colors = textSpan.getAttribute("data-colors").split(",");

let cursorSpan = document.querySelector(".cursor");;

function startTyper() {

    function positionCursor() {
        let spanWidth = textSpan.getBoundingClientRect().width;
        let getBound = textSpan.getBoundingClientRect();

        cursorSpan.style.left = (getBound.left + spanWidth - 657) + 'px';
    }

    function type() {
        let currentText = text[wordIndex];
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
}
/*
function resetTyper() {
    textSpan.textContent = '';
    wordIndex = 0;
    colorIndex = 0;
    isDeleting = false;
    delay = parseInt(textSpan.getAttribute('data-delay'));
    deleteDelay = parseInt(textSpan.getAttribute('data-deletedelay'));
    function positionCursor() {
        let spanWidth = textSpan.getBoundingClientRect().width;
        let getBound = textSpan.getBoundingClientRect();
        cursorSpan.style.left = (getBound.left + spanWidth - 668) + 'px';
    }
    function type() {
        let currentText = text[wordIndex];
        let currentColor = colors[colorIndex];
        textSpan.style.color = currentColor;
        let alter = isDeleting ? textSpan.textContent.length - 1 : textSpan.textContent.length + 1;
        let typedText = currentText.substring(0, alter);
        textSpan.textContent = typedText;
        positionCursor();
        if (!isDeleting && textSpan.textContent === currentText) {
            isDeleting = true;
            //deleteDelay += deleteDelay;
            setTimeout(type, deleteDelay);
        }
        else if (isDeleting && textSpan.textContent === '') {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % text.length;
            colorIndex = (colorIndex + 1) % colors.length;
            //someDelay += someDelay;
            setTimeout(type, someDelay);
        }
        else {
            //delay += delay;
            setTimeout(type, delay);
        }
    }
    //delay += delay;
    setTimeout(type, delay);
}
*/
//initial function for to use startTyper function everywhere
function initTyper() {
    startTyper();
}

document.addEventListener('DOMContentLoaded', initTyper());

//SEARCH BAR
const searchBar = document.getElementById('searchBar');
const search = document.getElementById('search');
const typer = document.getElementById('typer');

//Search Bar visibility
search.addEventListener('click', () => {
    typer.style.display = 'none';
    searchBar.focus();
});

searchBar.addEventListener('focus', () => {
    //
});

searchBar.addEventListener('blur', () => {
    if (searchBar.value === '') {
        typer.style.display = 'block';
        isDisplaying = typer.style.display === 'block';
    }
});

//Search Bar api function
const currentPage = document.getElementById('currentPage');
const searchInput = document.getElementById('searchBar');
const movieContainer = document.getElementById('searchResponse');
const BASE_URL = 'http://localhost/moviesite/';

window.addEventListener('pageshow', e => {
    if (e.persisted || (window.performance && window.performance.navigation.type == 2)) {
        searchInput.value = '';
    }
});

searchInput.addEventListener('keyup', e => {
    if (e.key === 'Enter') {
        if (searchInput.value.trim() !== '') {
            currentPage.style.display = 'none';
            movieContainer.style.display = 'block';
            searchMovies();
        }
        else {
            currentPage.style.display = 'block';
            movieContainer.style.display = 'none';
        }
    }
});

function searchMovies() {
    let searchTerm = searchInput.value;
    fetch(`${BASE_URL}getData.php?search=${searchTerm}`)
        .then(response => response.json())
        .then(data => {

            movieContainer.innerHTML = '';

            data.forEach(movie => {

                const itemx = document.createElement('div');
                itemx.classList.add('itemx');

                const filmPoster = document.createElement('div');
                filmPoster.classList.add('film-posterx');

                const img = document.createElement('img');
                img.src = `${BASE_URL}${movie.posterUrl}`;
                img.alt = movie.title;
                console.log(img.src);

                const aHref = document.createElement('a');

                filmPoster.appendChild(img);
                filmPoster.appendChild(aHref);

                const filmDetail = document.createElement('div');
                filmDetail.classList.add('film-detailx');

                const fdInfor = document.createElement('div');
                fdInfor.classList.add('fd-infor');
                
                const fdiItem1 = document.createElement('span');
                fdiItem1.classList.add('fdi-item');
                fdiItem1.innerHTML = `
                    <i class="fas fa-star mr-1"></i>
                    ${movie.imdb}
                `;

                const fdiItem2 = document.createElement('span');
                fdiItem2.classList.add('fdi-item');
                fdiItem2.innerHTML = `<strong>HD</strong>`;

                const fdiItem3 = document.createElement('span');
                fdiItem3.classList.add('fdi-item');
                fdiItem3.innerHTML = `${movie.releaseYear}`;

                fdInfor.appendChild(fdiItem1);
                fdInfor.appendChild(fdiItem2);
                fdInfor.appendChild(fdiItem3);

                const filmName = document.createElement('h3');
                filmName.classList.add('film-name');
                const filmNameA = document.createElement('a');
                filmNameA.href = `${BASE_URL}${movie.nav}`;
                filmNameA.title = movie.title;
                filmNameA.textContent = movie.title;
                filmName.appendChild(filmNameA);

                const fdBtn = document.createElement('div');
                fdBtn.classList.add('fd-btnx');
                const btnA = document.createElement('a');
                btnA.href = `${BASE_URL}${movie.nav}`;
                console.log(btnA.href);
                btnA.classList.add('btn', 'btn-sm', 'btn-play', 'btn-secondary');
                btnA.innerHTML = `
                    <i class="fas fa-play mr-3"></i>
                    Şimdi İzle
                `;
                fdBtn.appendChild(btnA);

                filmDetail.appendChild(fdInfor);
                filmDetail.appendChild(filmName);
                filmDetail.appendChild(fdBtn);
                
                itemx.appendChild(filmPoster);
                itemx.appendChild(filmDetail);

                movieContainer.appendChild(itemx);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}
/*
//SITE STRUCTURE
//const body = document.querySelector('body');
//const mainHeight = document.querySelector('main').offsetHeight;
let footer = document.querySelector('footer');
const windowHeight = window.innerHeight;
let mainContent = document.getElementById('main');
const children = mainContent.children;

//Main
function alterMainPos() {
    //let totalContentHeight = mainContent.scrollHeight + 'px';
    let totalHeight = 0;

    for (let i = 0; i < children.length; i++) {
        totalHeight += children[i].offsetHeight;
    }

    //body.style.height = totalContentHeight;
    mainContent.style.height = totalHeight + 'px';
}

//Footer
function alterFooterPos() {
    if (mainHeight < windowHeight) {
        footer.style.position = 'absolute';
        footer.style.bottom = '0';
    }
}

window.addEventListener('load', () => {
    //alterFooterPos();
    //alterMainPos();
});
window.addEventListener('resize', () => {
    //alterFooterPos();
    //alterMainPos();
});
*/