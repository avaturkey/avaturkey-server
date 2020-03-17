var veri;

function BlobOku()
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", "http://avaturkey.com/blob/get-isim.php", false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                veri = allText;
            }
        }
    }
    rawFile.send(null);
	
	
}


window.onload = function() {

 
 
 BlobOku();
  
 alert(veri);

 
 
 
 };
