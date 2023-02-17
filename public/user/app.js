var paroles = document.querySelectorAll('.paroles>p')

var paroles2 = document.querySelector('.paroles')

var parole = Array.from(paroles);

var lent = parole.length;



function myStopFunction() {
    clearInterval(myinterval);
}

var i = 0
var e = 0
const myinterval = setInterval(() => {

    if (!(e % 2 == 0)) {
        parole[e].classList.add('pactive')
        parole[e].style.height = 'unset'
        paroles2.style.transform = 'translateY(' + i + 'px)'
        i -= 115
    } else {
        paroles2.style.transform = 'translateY(' + i + 'px)'
        i -= 60
    }


    if (i < ((-lent - 2) * 63)) {
        myStopFunction()
    }

    e += 1

}, (23000/8));




