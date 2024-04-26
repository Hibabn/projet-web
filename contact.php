<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinique Vétérinaire VétoCare</title>

    <link rel="stylesheet" type="text/css" href="style-contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;400;500;600;800;900&display=swap" rel="stylesheet">

</head>
<body>

    <header>
		<img src="C:\Users\msi\Desktop\Projet WEB\img\logo-Hopital.svg" class="logo">
		<ul>
			<li><a href="index.html">Acceuil</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="boutique.html">Boutique</a></li>
			<li><a href="equipe.html">L'équipe</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</header>

    <div class="acceuil">

		<section id="home">
			<div class="left">
                <img src="C:\Users\msi\Desktop\Projet WEB\img\3carreaux.gif">
			</div>
        
			<div class="right"> 
                <h1> Besoin d'une <span id="mot">consultation <br>ou des questions</span> sur nos<br> services ?</h1>

                <div class="form_contact">
                    <h3>Ecrivez-nous</h3>
                    <form action="" method="post" >
                        <input type="text" id="nom" placeholder="Nom" maxlength="10"  required>
                        <input type="text" id="prenom" placeholder="Prénom" maxlength="10"  required>
                        <input type="tel" id="num" placeholder="Num Téléphone" pattern="[0-9]*" title="Veuillez saisir uniquement des chiffres" maxlength="8" required>
                        <input type="email" id="mail" placeholder="Adresse E-mail" pattern="[a-zA-Z0-9._]+@(gmail\.com|yahoo\.fr|outlook\.com|mail.com\.com)" required>
                        <input type="text" id="objet" placeholder="Objet" required>
                        <textarea ,name="" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                        <input type="submit" value="Envoyer">
                        <input type="reset" value="Retour">           
                    </form>
                </div>
			</div>
            
		</section>

        <div class="left">
            <a href="index.html"><button type="button"><span id="bt"></span>Retour à notre page d'Acceuil</button></a>
        </div>

        <div class="localisation">
            <h3>Notre Adresse</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.118329130422!2d-71.9409672!3d45.386783799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb7b4a833fd6c01%3A0xd1754fbeaccc631e!2sH%C3%B4pital%20v%C3%A9t%C3%A9rinaire%20de%20l&#39;Estrie%20inc.!5e0!3m2!1sfr!2stn!4v1709459918948!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>           
        </div>

        <div class="div-text-addresse">
            <p>Hôpital vétérinaire de L’Estrie s’engage à ce que la collecte et l’utilisation de vos renseignements personnels, effectués à partir de notre site hvestrie.com, soient conformes aux lois applicables à la province de Québec, notamment à la Loi sur la protection des renseignements personnels dans le secteur privé. Pour connaître et exercer vos droits relativement à notre utilisation de vos renseignements personnels</p>
        </div>

	
        <section class="footer">
			<div class="contact-info">

				<div class="first-info">
					<img src="C:\Users\msi\Desktop\Projet WEB\img\logo-Hopital.svg">
					<h6>Pratiquant la médecine des animaux de compagnie depuis plus de 35 ans. Nos valeurs sont nos plus grandes forces: professionnalisme, travail d’équipe, orientation patient, amélioration continue et adaptabilité. </h6>					
				</div>

				<div class="second-info">
					<h5>2736, rue Galt <br> Sherbrooke, QC  J1K 2V8</h5>
					<p>71-562-855</p>
					<p>hopitalEstrie@gmail.com</p>					
				</div>

				<div class="third-info">
					<h4>Support</h4>
					<p><a href="index.html">Acceuil</a></p>
					<p><a href="services.html">Services</a></p>
					<p><a href="boutique.html">Boutique</a></p>
					<p><a href="equipe.html">L'équipe</a></p>
					<p><a href="contact.html">Contact</a></p>
				</div>
				
				<div class="forth-info">
					<table id="table">
						<tr>
						<td width="120" >Lun au Ven</td>
						<td width="120">8:00 - 20:00</td>
						</tr>
						<tr>
						<td width="120">Sam</td>
						<td width="120">9:00 - 16:00</td>
						</tr>
						<tr>
						<td width="120">Dim</td>
						<td width="120">Fermé</td>
						</tr>
					</table>

					<div class="social-icon">
						<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
						<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#"><i class="fa-brands fa-youtube"></i></a>
					</div>

				</div>

			</div>
		</section>

    
	</div>

    <script src="java.js"></script>
  
</body>
</html>