<!DOCTYPE html>
<html lang="fr">
	<head>
		 <meta charset="utf-8" />
         <link rel="shorcut icon" href="img/ic.PNG" type="image/x-icon" />
         <link rel="stylesheet" href="style.css" />
         <link rel="stylesheet" href="menu.css" />
         <title>MY PROFILE</title>
	</head>
	<body>
		
		
			<header>
				
					<center>
						<div id="galerie-menu">
              <!-- Notre navigation -->
						 <nav>
							<a href="#" tabindex="0" title="beau!"    ><img src="img/so.JPG"  alt="im1"/></a>
							<a href="#" tabindex="0" title="attractive"         ><img src="img/bg.JPG"  alt="im2"/></a>
							<a href="#" tabindex="0" title="paysage"><img src="img/bg1.JPG"  alt="im3"/></a>
							<a href="#" tabindex="0" title="nature"><img src="img/avatar.JPG" alt="im4"  /></a>
						 </nav>
					   </div>
						<h1>Ndeye FALL</h1>
					
						<h2>ndeyeFall23</h2>
				
					</center>
			</header>
					<hr class="mine" />
					<h1>QUI SUIS-JE?</h1>
				<section id="nicetext">

					<p>

					   <img src="img/jb.PNG" class="imageflottante" height="150" width="150" alt="Image flottante" />e me nomme Ndeye et J’ai 25 ans. Je suis <a href="https://www.lesechos.fr/15/04/2012/lesechos.fr/0202011668879_--plumes---de-candidats.htm" target="_blank"><strong>attachee presidentielle</strong></a> spécialisée sur les langues étrangères. Je parle plusieurs langues parmi le français, l’anglais, l’arabe, le chinois, le souahili, l’hébreu …Avec mon équipe on est chargée de la rédaction des discours lors des voyages internationaux mais aussi des interprétations. J’adore mon travail même si je suis des fois sous pression. J’adore ma famille que je vois rarement à cause de mes nombreux déplacements.
						
					
				    </p>

				    <p>
				    	Qu'elles choisissent l'ombre ou la lumière, les plumes savent se rendre indispensable à leur patron. Qu'un candidat lise ses discours tels quels ou s'en évade, autoriser un autre à mettre des mots dans votre bouche nécessite une grande confiance. 
				    </p>
				   
			</section>
				
			<footer>
				<center>
					<br/> <br/>

    <h3>Vous souhaitez me contacter ? Cliquez dessus!</h3>  

    <a href="https://twitter.com/KhadijaFALL23"><img src="img/tw.PNG" height="50" width="50" alt="contact" title="Cliquer pour voir" /></a>
    <a href="https://www.facebook.com/profile.php?id=100027664965145"><img src="img/fa.PNG" height="50" width="50" alt="contact" title="Cliquer pour voir" /></a>


			  </center>
			
		   </footer>
		   <section id="form" >
			<form  novalidate class="contact_form" action="firstPage.php" method="POST">
			
					<ul>
							<li>
								 <h2>Formulaire de Contact</h2><br>
								 
							</li>
							
							<li>
								<label for="name" >Nom:</label> <br>
								<input id="idNom" class="style" type="text" name="nom" placeholder="ndeye"  required />
							</li>
							<li>
                                <span id="sansNom"></span>
                            </li>
							<li>
								<label for="email" >Email:</label><br>
								<input id="idEmail" class="style"  type="email" name="email" placeholder="ndeye_leye@example.com"  required/>
								
							</li>
							<li>
                                <span id="sansEmail"></span>
                            </li>
							<li>
								<label for="mes">Message:</label><br>
								<textarea id="idMes" class="style"  name="mes" cols="40" rows="6"  required></textarea>
							</li>
							<li>
                                <span id="sansMes"></span>
                            </li>
						<li>Homme<input id="choix1" class="radio" type="radio" name="gender" value="homme" ></li>
							<li>Femme <input  id="choix2" class="radio" type="radio" name="gender" value="femme"> </li> 
							<li>
                                <span id="sansSex"></span>
                            </li>
							<li>
                                    <fieldset >
                                            <legend>choississez vos spots favoris!</legend>
                                        
                                            <input id="option1" type="checkbox" name="mycheck[]" value="football"> FOOTBALL<br>
                                            <input  id="option2" type="checkbox" name="mycheck[]" value="basketball"> BASKETBALL<br>
                                            <input  id="option3" type="checkbox" name="mycheck[]" value="natation"> NATATION<br>
                                            <input  id="option4" type="checkbox" name="mycheck[]" value="lutte" > LUTTE<br>
                                            <input  id="option5" type="checkbox" name="mycheck[]" value="tennis" > TENNIS<br>
                                            <input  id="option6" type="checkbox" name="mycheck[]" value="box"> BOX<br>
										</fieldset><br>
										<span id="sansSport"></span>
                                        <fieldset >
                                                <legend>choississez un pays!</legend>
                                                <select name="pays" id="pays">
                                                    <option value="default"></option>
                                                    <option  value="senegal">SENEGAL</option>
                                                    <option value="mauritanie">MAURITANIE</option>
                                                    <option value="mali">MALI</option>
                                                    <option value="guinee">GUINEE</option>
                                                </select>
										</fieldset><br>
										<span id="sansPays"></span><br>
										
								<button class="submit env" type="submit"   value="valider" id="boutEnvoie" >envoyer</button>
							
								<button class="submit an" type="reset">annuler</button>
							</li>
                        </ul>
                       
                
					</form>

			<script type="text/javascript">

			var formValid = document.getElementById("boutEnvoie");
			var nom = document.getElementById("idNom");
			var email = document.getElementById("idEmail");
			var mes = document.getElementById("idMes");
			emailValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
			

				formValid.addEventListener("click", validation);

				function validation (event){
					// si le champ est vide
					if(nom.validity.valueMissing)
					{
						event.preventDefault();
						sansNom.textContent= "remplissez le champ prenom!";
						sansNom.style.color= "red";
						
					}
					else
						sansNom.textContent= "";
						sansNom.style.color= "none";
					
					if(!emailValid.test(email.value))
					{

						event.preventDefault();
						sansEmail.textContent= "remplissez correctement le champ email!";
						sansEmail.style.color= "red";
						
					}
				
					else
						sansEmail.textContent= "";
						sansEmail.style.color= "none";
				
					if(mes.validity.valueMissing)
					{

						event.preventDefault();
						sansMes.textContent= "remplissez le champ message!";
						sansMes.style.color= "red";
					}
					else
						sansMes.textContent= "";
						sansMes.style.color= "none";

					if(document.getElementById('choix1').checked == false && document.getElementById('choix2').checked == false ){
						sansSex.textContent= "choisissez votre sexe!";
						sansSex.style.color= "red";

					}
					else
						sansSex.textContent= "";
						sansSex.style.color= "none";

				}
			
				</script>

		   </section>
		
	</body>
</html>