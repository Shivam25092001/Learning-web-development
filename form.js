//JS Dialogue box
var message = "Please fill the form carefully, detils once entered cannot changed.";
  alert(message);


//use of DOM
document.getElementById("get").innerHTML="#share the bikehood";

document.getElementById("get").style.fontWeight="Bold";

document.getElementById("get").style.fontFamily="Gill Sans";

document.getElementById("get").style.fontSize="20px";

document.getElementById("get").style.letterSpacing="1px";


function onclickevent(){
    alert('Form submitted Succesfully');
}
document.getElementById("onsubmit").onclick = onclickevent;

function sayHello23(){ 
    alert('Enter pincode'); 
} 
document.getElementById("myBtn3").onblur = sayHello23;

function highlightInput(elm){
    elm.style.background = "rgb(230, 255, 255)";
}

function sayHello1(){
    alert('You have changed the selection!');
  }
document.getElementById("myBtn1").onchange = sayHello1;



//use of cookies
document.cookie = "username = QuickRelease expires=Thu, 23 June 2021 12:00:00 UTC";
function cookies() {
    var x = document.cookie;
    document.getElementById("cky").innerHTML = "" + x;
}
cookies();