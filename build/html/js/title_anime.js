var i = 0;
var txt = 'Bip-bip bop-bop';
var speed = 50;

window.onload = typeWriter;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("title_typewrite").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
