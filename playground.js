var Typer = function (element) { this.element = element;
    var delim = element.dataset.delim || ","; 
    var words = element.dataset.words || "override these,sample typing"; 
    this.words = words.split(delim).filter(function (v) { return v; }); 
    this.delay = element.dataset.delay || 200; 
    this.loop = element.dataset.loop || "true"; 
    this.deleteDelay = element.dataset.deletedelay || element.dataset.deleteDelay || 800; 
    this.progress = { word: 0, char: 0, building: true, atWordEnd: false, looped: 0 }; 
    this.typing = true; 
    var colors = element.dataset.colors || "black"; 
    this.colors = colors.split(","); this.element.style.color = 
    this.colors[0]; this.colorIndex = 0; 
    this.doTyping(); }; 
    Typer.prototype.start = function () { if (!this.typing) { this.typing = true; 
        this.doTyping(); 
    } 
}; 
    Typer.prototype.stop = function () { 
        this.typing = false; 
    }; 
    Typer.prototype.doTyping = function () {
    var e = this.element; 
    var p = this.progress; 
    var w = p.word; 
    var c = p.char; 
    var currentDisplay = [...this.words[w]].slice(0, c).join(""); 
    p.atWordEnd = false; 
    if (this.cursor) { this.cursor.element.style.opacity = "1"; 
    this.cursor.on = true; clearInterval(this.cursor.interval); 
    var itself = this.cursor; 
    this.cursor.interval = setInterval(function () { 
        itself.updateBlinkState(); 
    }, 400); 
}
    e.innerHTML = currentDisplay; 
    if (p.building) 
    { 
        if (p.char == [...this.words[w]].length) { 
            p.building = false; 
            p.atWordEnd = true; 
        } 
        else {
            p.char += 1; 
        } 
} 
    else { 
        if (p.char == 0) { p.building = true; 
        p.word = (p.word + 1) % this.words.length; 
        this.colorIndex = (this.colorIndex + 1) % this.colors.length; 
        this.element.style.color = this.colors[this.colorIndex]; 
    } 
    else { p.char -= 1; 
    } 
}
    if (p.atWordEnd) p.looped += 1; 
    if (!p.building && (this.loop == "false" || this.loop <= p.looped)) { this.typing = false; }
    var myself = this; setTimeout(function () { 
        if (myself.typing) { myself.doTyping(); 
    }; 
}, p.atWordEnd ? this.deleteDelay : this.delay);
}; 
var Cursor = function (element) { this.element = element; 
    this.cursorDisplay = element.dataset.cursordisplay || "_"; 
    element.innerHTML = this.cursorDisplay; this.on = true; element.style.transition = "all 0.1s"; 
var myself = this; 
this.interval = setInterval(function () { 
    myself.updateBlinkState(); 
}, 400); 
}
Cursor.prototype.updateBlinkState = function () { 
    if (this.on) {
        this.element.style.opacity = "0"; 
this.on = false; 
} 
else { 
    this.element.style.opacity = "1"; 
this.on = true; 
} 
}
function TyperSetup() {
    var typers = {}; 
    var elements = document.getElementsByClassName("typer"); 
    for 
    (var i = 0, e; e = elements[i++];
        ) { typers[e.id] = new Typer(e); 
        }
    var elements = document.getElementsByClassName("typer-stop"); 
    for 
    (var i = 0, e; 
        e = elements[i++];
        ) { let owner = typers[e.dataset.owner]; 
            e.onclick = function () { owner.stop(); 
            }; 
        }
    var elements = document.getElementsByClassName("typer-start"); 
    for 
    (var i = 0, e; 
        e = elements[i++];
        ) { let owner = typers[e.dataset.owner]; 
            e.onclick = function () { owner.start(); 
            }; 
        }
    var elements2 = document.getElementsByClassName("cursor"); 
    for 
    (var i = 0, e; 
        e = elements2[i++];
        ) { let t = new Cursor(e); 
            t.owner = typers[e.dataset.owner]; 
            t.owner.cursor = t; 
        }
}
TyperSetup();

/*
document.addEventListener("DOMContentLoaded", function(){

    let textSpan = document.getElementById("typeWriter");
    let text = textSpan.getAttribute("data-words").split(",");
    let delay = parseInt(textSpan.getAttribute("data-delay"));
    let deleteDelay = parseInt(textSpan.getAttribute("data-deletedelay"));
    let colors = textSpan.getAttribute("data-colors").split(",");
    let colorIndex = 0;
    let wordIndex = 0;
    //let charIndex = 0;
    let isDeleting = false;
    let typerSpeed;
    let progress = {char: 0, atWordEnd: false};
    let p = progress;
    let w = p.text;
    let c = p.char;

    if (p.char == [...text[w]].length) {
        p.atWordEnd = true;
    }
    else {
        p.char += 1;
    }


    function type() {
        let currentText = text[wordIndex];
        let currentColor = colors[colorIndex];
        textSpan.style.color = currentColor;
        
        if (!isDeleting) {
            textSpan.textContent = currentText.substring(0, textSpan.textContent.length + 1);
            typerSpeed = delay;
        }
        else {
            textSpan.textContent = currentText.substring(0, textSpan.textContent.length - 1);
            typerSpeed = delay;
        }

        if (!isDeleting && textSpan.textContent === currentText) {
            isDeleting = true;
        }
        else if (isDeleting && textSpan.textContent === "") {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % text.length;
            colorIndex = (colorIndex + 1) % colors.length;
            charIndex = 0;

            if (atWordEnd == true) {
                setTimeout(() => {
                    type();
                }, deleteDelay);
                return;
            }
        }
        
        //charIndex++;
        setTimeout(type, typerSpeed);
    }

    setTimeout(type, delay);

    type();
});


document.addEventListener('DOMContentLoaded', function() {
    var textSpan = document.getElementById('typeWriter');
    var text = textSpan.getAttribute('data-words').split(',');
    var delay = parseInt(textSpan.getAttribute('data-delay'));
    var deleteDelay = parseInt(textSpan.getAttribute('data-deletedelay'));
    var colors = textSpan.getAttribute('data-colors').split(',');
    var wordIndex = 0;
    var colorIndex = 0;
    var isDeleting = false;

    var cursorSpan = document.querySelector('.cursor');
    var cursorDisplay = cursorSpan.dataset.cursordisplay;

    function type() {
        var currentText = text[wordIndex];
        var currentColor = colors[colorIndex];
        textSpan.style.color = currentColor;

        var alter = isDeleting ? textSpan.textContent.length - 1 : textSpan.textContent.length + 1;
        var typedText = currentText.substring(0, alter);
        textSpan.textContent = typedText;

        var textWidth = textSpan.getBoundingClientRect().width;
        var textLeft = textSpan.getBoundingClientRect().left;
        var cursorLeft = textLeft + textWidth;

        cursorSpan.style.left = cursorLeft + 'px';

        if (!isDeleting && typedText === currentText) {
            isDeleting = true;
            setTimeout(type, deleteDelay);
        } else if (isDeleting && typedText === '') {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % text.length;
            colorIndex = (colorIndex + 1) % colors.length;
            setTimeout(type, 750);
        } else {
            setTimeout(type, delay);
        }
    }

    setTimeout(type, delay);
});


function positionCursor() {
    let textContent = textSpan.textContent;
    let lastChar = textContent.charAt(textContent.length - 1);
    let spanWidth = textSpan.getBoundingClientRect().width;
    let lastCharWidth = cursorSpan.getBoundingClientRect().width;

    // Position the cursor at the end of the last character
    cursorSpan.style.left = (textSpan.getBoundingClientRect().left + spanWidth - lastCharWidth) + 'px';
}

function positionCursor() {
    let spanWidth = textSpan.getBoundingClientRect().width;
    let cursorWidth = cursorSpan.getBoundingClientRect().width;

    // Position the cursor at the end of the text content
    cursorSpan.style.left = (textSpan.getBoundingClientRect().left + spanWidth - cursorWidth) + 'px';
}

*/
