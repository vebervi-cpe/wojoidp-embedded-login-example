<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIX, curated coffee components</title>

    <link href="reset.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600" type="text/css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

    <style>
	    .displayNone { display: none; }
	    .overlayLoading { 
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    background: rgba(240, 240, 250, 0.85);
		    z-index: 1000;
	    }
	    .loadingImage {
		    display: block;
    		    margin-left: auto;
		    margin-right: auto;
		    width: 250px;
    		    background: radial-gradient(black 0%, transparent 70%);
	    }
    </style>
	
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
    <meta name="salesforce-client-id" content="<?php echo getenv('SALESFORCE_CLIENT_ID');?>">
    <meta name="salesforce-redirect-uri" content="https://<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>/_callback.php">
    <meta name="salesforce-mode" content="<?php echo getenv('SALESFORCE_MODE');?>">
    <meta name="salesforce-namespace" content="<?php echo getenv('SALESFORCE_NAMESPACE');?>">
    <meta name="salesforce-target" content="#sign-in-link">
    <meta name="salesforce-save-access-token" content="true">
    <meta name="salesforce-forgot-password-enabled" content="<?php echo getenv('SALESFORCE_FORGOT_PASSWORD_ENABLED');?>">
    <meta name="salesforce-self-register-enabled" content="<?php echo getenv('SALESFORCE_SELF_REGISTER_ENABLED');?>">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout">
    <meta name="salesforce-mask-redirects" content="<?php echo getenv('SALESFORCE_MASK_REDIRECTS');?>">
	<link href="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=css" rel="stylesheet" type="text/css" />
    <script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>
  </head>
  
  <body>
    <div id="overlayLoading" class="displayNone">
	    <h1 style="font-weight: bold;">Loading</h1>
	    <img src="images/loading.gif" class="loadingImage">
    </div>
    <div id="customRegister" style="position: absolute; top: 20px; left: 20px; width: 25%; background: rgba(200, 200, 200, 0.5); text-align: center; padding: 20px;">
	  <span style="font-weight: bold";>Custom Register</span>
	  <br>
	  <form onsubmit="handleRegister(this); return false;" method="post">
		  <br><br>
		  <label>Firstname</label>
		  <br><br>
		  <input type="text" name="firstnameRegister"/>
		  <br><br>
		  <label>Lastname</label>
		  <br><br>
		  <input type="text" name="lastnameRegister"/>
		  <br><br>
		  <label>Email</label>
		  <br><br>
		  <input type="text" name="emailRegister"/>
		  <br><br>
		  <label>Password</label>
		  <br><br>
		  <input type="text" name="passwordRegister"/>
		  <br><br>
		  <input type="submit" value="Register"/>
		  <br><br>
		  <span id="registrationError" style="color: red; font-weight: bold;"></span>
	  </form>
    </div>
    <div id="sign-in-link" style="position: absolute; top: 20px;right: 20px;"></div>
    <header>
      <div class="masthead-elements-row-1">
        <div class="element-left"></div>
        <div class="element-middle">
          <img class="logo" src="images/fix-logotype.png" alt="Fix">
          <br>
          <span class="logo-text">Fine Coffee Kits</span>
        </div>
        <div class="element-right">
        </div>
      </div>
    </header>
    <section class="textured-section">
      <h1>Curated Coffee Components</h1>
      

      <ul class="products">
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3270-.jpg" alt="">
          <h3 class="product-name">AeroPress Coffee Maker</h3>
          <div class="product-button"><a id="aero_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3263-.jpg" alt="">
          <h3 class="product-name">MSR Reactor 2.5L Stove System</h3>          
          <div class="product-button"><a id="reactor_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3302.jpg" alt="">
          <h3 class="product-name">Chemex Classic 6-cup Coffee Maker</h3>
          <div class="product-button"><a id="chemex_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
      </ul>

    </section>
    <section>

      <h1>Complete Brewing Kits</h1>

      <ul class="kits">
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3338-Edit-.jpg" alt="">
          <h3 class="kit-name">The Chemex Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3353-Edit-.jpg" alt="">
          <h3 class="kit-name">The Pour Over Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3346-.jpg" alt="">
          <h3 class="kit-name">The Camper’s Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3376-Edit-.jpg" alt="">
          <h3 class="kit-name">The French Press Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3385-.jpg" alt="">
          <h3 class="kit-name">The Cold Brew Kit</h3>
        </li>
      </ul>

    </section>
    <footer>

      <div class="trailer-logo">
        <img class="logo" src="images/fix-logotype.png" alt="Fix">
        <br>
        <span class="logo-text">Fine Coffee Kits</span>
      </div>

      <div class="trailer-links">
        <ul class="internal-links">
          <li><a href="https://heroku.github.io/fix">About</a></li>
          <li><a href="https://heroku.github.io/fix">Support</a></li>
          <li><a href="https://heroku.github.io/fix">Contact Us</a></li>
        </ul>
        <ul class="social-links">
          <li><a href="#">
            <img class="social-logo" src="images/social/twitter.png" alt="">
            <span class="social-verb">Follow on</span>
            <span class="social-name">Twitter</span></a></li>
          <li><a href="#">
            <img class="social-logo" src="images/social/facebook.png" alt="">
            <span class="social-verb">Like Us on</span>
            <span class="social-name">Facebook</span></a></li>
          <li><a href="#">
            <img class="social-logo" src="images/social/instagram.png" alt="">
            <span class="social-verb">Follow on</span>
            <span class="social-name">Instagram</span></a></li>
        </ul>
      </div>

    </footer>
	

	
	<script>
		
	function handleRegister(form) {
		console.log("handleRegister");
		
		var overlayLoading = document.getElementById("overlayLoading");
		overlayLoading.className = "overlayLoading";
		
		var registrationError = document.getElementById("registrationError");
		registrationError.textContent = "";
		
		const endpoint = "https://decision-dev-ed.my.salesforce.com/services/apexrest/RestControllerUserIDP";
		const token = "<?php echo getenv('SALESFORCE_AUTH_TOKEN');?>";
		
		var firstname = form.firstnameRegister.value;
		var lastname = form.lastnameRegister.value;
		var email = form.emailRegister.value;
		var password = form.passwordRegister.value;
		
		console.log(firstname);
		console.log(lastname);
		console.log(email);
		console.log(password);

		var xhr = new XMLHttpRequest();
		xhr.open("POST", endpoint, true);
		xhr.setRequestHeader('Content-Type', 'application/json');
		xhr.setRequestHeader('Authorization', 'Bearer ' + token);
		
		xhr.onreadystatechange = function() {
		    console.log(xhr);
	            if(xhr.readyState === 4) {
	                if(xhr.status === 200) {
			    console.log('User successfully inserted.');
				
			    // Simule le remplissage du formulaire d'authentification ainsi que la soumission du formulaire/
			    setTimeout(() => {
				/*
			        var sfidUsername = document.getElementById("sfid-username");
			        var sfidPassword = document.getElementById("sfid-password");
			        var sfidSubmit = document.getElementById("sfid-submit");

			        sfidUsername.value = email;
			        sfidPassword.value = password;
			        sfidSubmit.click();
				*/
				    
				// TESTOUILLE POUR ESSAYER DE SE CONNECTER SANS PASSER PAR LE FORM.
			        var xhrLogin = new XMLHttpRequest();
			        xhrLogin.open("POST", "https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=login", true);
				xhrLogin.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				 
				xhrLogin.onreadystatechange = function() {
					if(xhrLogin.readyState === 4) {
						console.log(xhrLogin.status + ': ' + xhrLogin.statusText);
                           			console.log(xhrLogin.responseText);
						var responseLogin = JSON.parse(xhrLogin.responseText);
						
						if(responseLogin.result === "invalid") {
						    console.error('An error happened.');
						    console.error(xhr.status + ': ' + xhr.statusText);
						    console.error(xhr.responseText);
						    overlayLoading.className = "displayNone";
						    registrationError.textContent = xhr.responseText;
						} else {
						    var i = document.createElement("iframe");
						    i.setAttribute("src", responseLogin.result);
						    i.className = "sfid-callback";
						    i.id = "sfid-callback";
						    document.body.appendChild(i);
						}
					}
				}
  
				xhrLogin.send("username=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password) + 
					      "&startURL=" + encodeURIComponent("/services/oauth2/authorize?response_type=token&client_id=<?php echo getenv('SALESFORCE_CLIENT_ID');?>&redirect_uri=https://<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>/_callback.php&state=https://<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>/") +
					      "&mode=" + encodeURIComponent("<?php echo getenv('SALESFORCE_MODE');?>") +
					      "&maskRedirects=" + encodeURIComponent("<?php echo getenv('SALESFORCE_MASK_REDIRECTS');?>"))				    
			    }, 5000);
				
			} else {
			    console.error('An error happened.');
			    console.error(xhr.status + ': ' + xhr.statusText);
                            console.error(xhr.responseText);
				
			    overlayLoading.className = "displayNone";
			    registrationError.textContent = xhr.responseText;
			}
	            }
	        }
		
		xhr.send(JSON.stringify({
		    request: {
			    lastname: lastname,
			    firstname: firstname,
			    email: email,
			    password: password
		    }
		}));
	}


	function onLogin(identity) {
		
		var customRegister = document.getElementById("customRegister");
		customRegister.className = "displayNone";
		
		var overlayLoading = document.getElementById("overlayLoading");
		overlayLoading.className = "displayNone";
		
		var targetDiv = document.querySelector(SFIDWidget.config.target);	
		
		var avatar = document.createElement('a'); 
	 	avatar.href = "javascript:showIdentityOverlay();";
		
		
		var img = document.createElement('img'); 
	 	img.src = identity.photos.thumbnail; 
		img.className = "sfid-avatar";
	
		var username = document.createElement('span'); 
		username.innerHTML = identity.username;
		username.className = "sfid-avatar-name";
	
		var iddiv = document.createElement('div'); 
	 	iddiv.id = "sfid-identity";
		
		avatar.appendChild(img);
		avatar.appendChild(username);
		iddiv.appendChild(avatar);		
	
		targetDiv.innerHTML = '';
		targetDiv.appendChild(iddiv);	
		
		var aero = document.getElementById("aero_link");
		aero.href = "/datasheets/AeroPress-Instr-English-Rev.-D2.pdf";
		aero.innerHTML = 'Datasheet';

		var reactor = document.getElementById("reactor_link");
		reactor.href = "/datasheets/Reactor_StovInst_EURO_EN.pdf";
		reactor.innerHTML = 'Datasheet';

		var chemex = document.getElementById("chemex_link");
		chemex.href = "/datasheets/2014_ChemexBrewGuide.pdf";
		chemex.innerHTML = 'Datasheet';
		
	}
	
	
	function showIdentityOverlay() {

		var lightbox = document.createElement('div'); 
	 	lightbox.className = "sfid-lightbox";
	 	lightbox.id = "sfid-login-overlay";
		lightbox.setAttribute("onClick", "SFIDWidget.cancel();");
		
		var wrapper = document.createElement('div'); 
	 	wrapper.id = "identity-wrapper";
		wrapper.onclick = function(event) {
		    event = event || window.event // cross-browser event
    
		    if (event.stopPropagation) {
		        // W3C standard variant
		        event.stopPropagation()
		    } else {
		        // IE variant
		        event.cancelBubble = true
		    }
		}
		
		var content = document.createElement('div'); 
	 	content.id = "sfid-content";

		var community = document.createElement('a');
		var commURL = document.querySelector('meta[name="salesforce-community"]').content;
		community.href = commURL;
		community.innerHTML = "Go to the Community";
		community.setAttribute("style", "float:left");
		content.appendChild(community);


		var logout = document.createElement('a'); 
	 	logout.href = "javascript:SFIDWidget.logout();SFIDWidget.cancel();";
		logout.innerHTML = "logout";
		logout.setAttribute("style", "float:right");
		content.appendChild(logout);
		
		var t = document.createElement('div'); 
	 	t.id = "sfid-token";
		t.className = "sfid-mb24";
		
		var p = document.createElement('pre'); 
	 	p.innerHTML = JSON.stringify(SFIDWidget.openid_response, undefined, 2);
		t.appendChild(p);
		
		content.appendChild(t);

		
		wrapper.appendChild(content);
		lightbox.appendChild(wrapper);
		
		document.body.appendChild(lightbox);	
		
	}
	
	
	function onLogout() {
		SFIDWidget.init();
		
		var customRegister = document.getElementById("customRegister");
		customRegister.className = "";
		
		var aero = document.getElementById("aero_link");
		aero.href = "#";
		aero.innerHTML = 'Login for more info';

		var reactor = document.getElementById("reactor_link");
		reactor.href = "#";
		reactor.innerHTML = 'Login for more info';

		var chemex = document.getElementById("chemex_link");
		chemex.href = "#";
		chemex.innerHTML = 'Login for more info';

	}


	</script>
	
  </body>
</html>
