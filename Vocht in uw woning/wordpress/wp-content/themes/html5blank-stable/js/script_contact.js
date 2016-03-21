// JavaScript Document

function emailControleren()
	{
		var mailControle = document.formulier.mail.value;
		var aapWaar = mailControle.indexOf("@");
		var puntWaar = mailControle.lastIndexOf(".");
		
		if(aapWaar < 1 || (puntWaar - aapWaar < 2))
		{
			document.formulier.mail.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Mailadres is niet juist. vb: qwerty@ty.com";
			
			return false;
		}
		
		return true;
	}


function valideren(){
		/*alert('start met valideren')*/
		if(document.formulier.voornaam.value=="")
		{
			document.formulier.voornaam.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Naam moet ingevuld worden.";
			
			return false;
		}

		if(document.formulier.familienaam.value=="")
		{
			document.formulier.familienaam.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Familienaam moet ingevuld worden.";
			
			return false;
		}
		
		if(document.formulier.mail.value=="")
		{
			document.formulier.mail.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "E-mail moet ingevuld worden.";
			
			return false;
			
		}else{
			var emailOK = emailControleren();
			if(emailOK == false)
			{
				return false;
			}
		}
		
		if(document.formulier.adres.value=="")
		{
			document.formulier.adres.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "adres moet ingevuld worden.";
			
			return false;
		}

		if(document.formulier.stad.value=="")
		{
			document.formulier.stad.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Stad/gemeente moet ingevuld worden.";
			
			return false;
		}
		
		if(document.formulier.tel.value=="")
		{
			document.formulier.tel.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Telefoon moet ingevuld worden.";
			
			return false;
		}
		
		if(document.formulier.tel.value.length< 9)
		{
			document.formulier.tel.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Telefoon moet minimum 9 karakters hebben.";
			
			return false;
		}
		
		if(isNaN(document.formulier.tel.value))
		{
			document.formulier.tel.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Telefoon moet allemaal cijfers zijn. Vb: 00 32 488 88 88 88";
			
			return false;
		}
		
		
		if(document.formulier.bericht.value=="")
		{
			document.formulier.bericht.focus();
			document.getElementById("fbpersoon").style.display = "block";
			document.getElementById("fbpersoon").innerHTML = "Bericht moet ingevuld worden.";
			
			return false;
		}		
}



