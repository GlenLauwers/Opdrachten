function emailControleren()
	{
		var mailControle = document.formulier.fmail.value;
		var aapWaar = mailControle.indexOf("@");
		var puntWaar = mailControle.lastIndexOf(".");
		
		if(aapWaar < 1 || (puntWaar - aapWaar < 2))
		{
			document.formulier.fmail.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Uw E-mailadres heeft niet het juiste formaat.";
			
			return false;
		}
		
		return true;
	}


function valideren(){
		if(document.formulier.fnaam.value=="")
		{
			document.formulier.fnaam.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Eén of meerdere verplichte velden zijn niet ingevuld.";
			
			return false;
		}
		
		if(document.formulier.fmail.value=="")
		{
			document.formulier.fmail.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Eén of meerdere verplichte velden zijn niet ingevuld.";
			
			return false;
			
		}else{
			var emailOK = emailControleren();
			if(emailOK == false)
			{
				return false;
			}
		}
				
		
		if(document.formulier.fbericht.value=="")
		{
			document.formulier.fbericht.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Eén of meerdere verplichte velden zijn niet ingevuld.";
			
			return false;
		}

		else
		{
			document.getElementById("fsucces").style.display = "block";
			document.getElementById("fsucces").innerHTML = "Uw bericht werd verstuurd. We nemen zo snel mogelijk contact met u op.";
		}
		
}



