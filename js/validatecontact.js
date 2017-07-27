function validateForm() 
{
    var x = document.forms["myForm"]["cname"].value;
    if (x==null || x=="")
    {
        alert("Name must be filled out");
        return false;
    }

  var y = document.forms["myForm"]["cemail"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }
 var z = document.forms["myForm"]["cquery"].value;
    if (z==null || z=="")
    {
      alert("Query must be filled out");
        return false;
    }
}