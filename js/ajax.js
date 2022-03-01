function showtoy(toy)
{
    if (toy=="")
    {
        document.getElementById("user").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest)
    {
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("user").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","mysql.php?q="+toy,true);
    xmlhttp.send();
}
