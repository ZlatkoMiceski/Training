document.getElementsByClassName("footer")[0].style.borderBottomStyle = "solid";
document.getElementsByClassName("footer")[0].style.borderBottomWidth = "1px";
document.getElementsByClassName("footer")[0].style.borderBottomColor="gray";

document.getElementsByClassName("footer")[3].style.borderTopStyle = "solid";
document.getElementsByClassName("footer")[3].style.borderTopWidth = "1px";
document.getElementsByClassName("footer")[3].style.borderTopColor="gray";


function mouseOver() {
    document.getElementById("demo1").style.color = "yellow";
}

function mouseOut() {
    document.getElementById("demo1").style.color = "black";
}
function firstPic() {
    document.getElementById("pic1").src = "images/rt6.jpg";
}
function changePic() {
    document.getElementById("pic1").src = "images/rt1.jpg"
}
function changePic2() {
    document.getElementById("pic1").src = "images/rt2.jpg"
}
function changePic3() {
    document.getElementById("pic1").src = "images/rt3.jpg"
}
function changePic4() {
    document.getElementById("pic1").src = "images/rt4.jpg"
}
function changePic5() {
    document.getElementById("pic1").src = "images/rt5.jpg"
}
