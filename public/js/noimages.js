//Load image if image not exist
function loadErrorImage(id,src)
{
   if (id.getAttribute("loi") == null)
   {
			 id.setAttribute("loi","1");
   }
	else
	{
			id.setAttribute("loi",eval(id.getAttribute("loi")) + 1);
	}
	
	if (eval(id.getAttribute("loi")) >=2)
	{
		var width = src.substr(src.lastIndexOf("=") + 1,src.length - src.lastIndexOf("="));
		id.onerror = null;		
		id.src = "/images/noimg.png";
	}
	else
	{
			id.src = src;
	}
}
