function validateForm() //for password validation
{
	var x1 = document.forms["myForm"]["fname1"].value;
	var x2 = document.forms["myForm"]["fname2"].value;

	if (x1 == null || x1 == "" || x2 == "" || x2 == null)
	{
		alert("Password must be filled out");
		return false;
	}
	else if(x1.length < 8)
	{
		alert("Password must have length not less than 8!")
		return false;
	}
	else if(x1.length >= 8 && x2.length >=8 && x1 === x2)
	{
		alert("Password set!")
		return true;
	}
}


//-------------------------------slide show section------------------

index = 0;
MyImages=new Array();

MyImages[0] = './animal/bison.jpg';

MyImages[1] = './animal/HB.jpg';

MyImages[2] = './animal/panda.jpg';

MyImages[3] = './animal/doramon.jpg';

MyImages[4] = './animal/doramon2.jpg';

//image appear much faster when they are pre-loaded
imagesPreloaded = new Array(5);

for (var i = 0; i < MyImages.length ; i++)
{
imagesPreloaded[i] = new Image(300,300)
imagesPreloaded[i].src= MyImages[i]
}

function next()
{
  if (index < imagesPreloaded.length-1)
  {
    index = index+1;
    document.theImage.src = imagesPreloaded[index].src
  }
  else
  {
    index = 0
    document.theImage.src = imagesPreloaded[index].src
  }
}

function previous()
{
  if (index > 0)
  {
    index = index-1;
    document.theImage.src = imagesPreloaded[index].src
  }
  else
  {
    index = 4;
    document.theImage.src = imagesPreloaded[index].src
  }

}
//----------------------------end of animal slideshow------------
