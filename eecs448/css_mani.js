//in JavaScript

//Access the tag:

//Change the style attribute

function changeBorder()
{
  var x1 = document.getElementById("r1").value;
  var x2 = document.getElementById("g1").value;
  var x3 = document.getElementById("b1").value;
  var x4 = document.getElementById("w").value;

  document.getElementById("abc").style.borderWidth = x4+"px";
  document.getElementById("abc").style.borderColor = "rgb("+x1+","+x2+","+x3+")";

}

function changeBg()
{
    var x1 = document.getElementById("r2").value;
    var x2 = document.getElementById("g2").value;
    var x3 = document.getElementById("b2").value;

    document.getElementById("abc").style.backgroundColor =  "rgb("+x1+","+x2+","+x3+")";

}
