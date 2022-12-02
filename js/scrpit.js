let but = document.querySelectorAll("#button");
let header = document.querySelector(".header");
let nav = document.querySelector(".navbar #nav");
let nav2 = document.querySelector(".navbar #line");
let click1 = document.getElementById("line");

click1.addEventListener('click', () =>{
    nav.classList.toggle("display");
    nav2.classList.toggle("hover");
});
but.forEach(but => {
    but.addEventListener('mouseenter', function (e) {
    const x = e.clientX - e.target.offsetLeft;
    const y = e.clientY - e.target.offsetTop;
    const ripple = document.createElement('span');

    ripple.style.left = `${x}px`;// Note always use currly brasess{} nor bracket()
    ripple.style.top = `${y}px`;

    this.appendChild(ripple);
    setTimeout(() => {
        ripple.remove();
    }, 1000);
    // console.log('look at your');
});
});
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
var scrolled = (winScroll / height) * 100;
document.getElementById("myBar").style.width = scrolled + "%";
}




// let scroll = window.scrollTop;


// if (scroll > '100') {
//     header.style.backgroundColor = ' rgb(50, 50, 240)';
// }else{
//     header.style.backgroundColor = ' transparent';

// }