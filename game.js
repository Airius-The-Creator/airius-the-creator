// my clicker logic - airius 2026
let c = localStorage.getItem('myScore');
if(c == null){c=0} else {c=parseInt(c)}
document.getElementById('num').innerHTML = c;
function add(){
c++;
document.getElementById('num').innerHTML = c;
localStorage.setItem('myScore', c);
document.getElementById('num').style.transform = "scale(1.15)";
setTimeout(()=>{document.getElementById('num').style.transform="scale(1)"},80);
}
