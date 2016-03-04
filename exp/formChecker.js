function validateForm()
{

	var userName = document.getElementById("name").value;
	var password = document.getElementById("password").value;
	var shipping_method = document.getElementsByClassName("shm");
	var items = document.getElementsByClassName("item_quantity");

	//username and password
	if (userName == null || userName == "")
	{
		alert("Username must be filled out");
		return false;
	}
	if(password == "" || password == null)
	{
		alert("Password must be filled out");
		return false;
	}

  //password length restriction
  if(password.length < 8)
	{
		alert("Password must have length not less than 8!")
		return false;
	}

	//check if the username is an email
	if(userName.indexOf('@') === -1)
	{
		alert("no @ found in your e-mail");
		return false;
	}

	//check if shipping method is selected
	if((shipping_method[0].checked == false) && (shipping_method[1].checked == false) && (shipping_method[2].checked == false))
	{
		alert("Shipping method not selected");
		return false;
	}

	for(var i = 0; i < items.length; i++)
	{
		if(items[i].value == "" || items[i].value < 0)
		{
			alert("item quantity blank or negative");
				return false;
		}
	}




}
