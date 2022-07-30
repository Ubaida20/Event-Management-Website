function validateform() 
{
    var x = document.forms["myform"]["name"].value;
    if (x == "")
    {
      alert("Name must be filled out");
      return false;
    }
    var y = document.forms["myform"]["email"].value;
    if (y == "")
    {
      alert("Email must be filled out in format abc01@example.com");
      return false;
    }
    var z = document.forms["myform"]["cnic"].value;
    if (z == "")
    {
      alert("CNIC must be filled out in format xxxxx-xxxxxxx-x");
      return false;
    }
    var a = document.forms["myform"]["phone"].value;
    if (a == "")
    {
      alert("Phone Number must be filled out in format xxxx-xxxxxxx");
      return false;
    }
    var b = document.forms["myform"]["destination"].value;
    if (b == "")
    {
      alert("Please Enter the valid Location");
      return false;
    }
}