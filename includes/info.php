<body>
	<div class="info-page">
		<div class="wrapper">

			<div class="slideshow-container">

			<div class="mySlides fade">
			<div class="numbertext">1 / 5</div>
			<img src="img/img1.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			<div class="numbertext">2 / 5</div>
			<img src="img/img2.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			<div class="numbertext">3 / 5</div>
			<img src="img/img3.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			<div class="numbertext">4 / 5</div>
			<img src="img/img4.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			<div class="numbertext">5 / 5</div>
			<img src="img/img5.jpg" style="width:100%">
			</div>

			</div>
			<br>

			<div style="text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span>
			<span class="dot"></span> 
			<span class="dot"></span> 
			</div>

			<script>
			let slideIndex = 0;
			showSlides();

			function showSlides() {
			let i;
			let slides = document.getElementsByClassName("mySlides");
			let dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 4000); // Change image every 2 seconds
			}
			</script>

			<h2 class="information"><span id="blok">Blok</span>ken</h2> 
			<p>Op de opleiding werken wij met blokken, dit houd in dat het jaar is opgesplitst in meerdere delen. Na het eerste blok, krijg je de keuze om het versneld traject te volgen. Al volg je het versneld traject dan duurt de opleiding 3 jaar i.p.v. de aangeboden 4 jaar</p>
			<p>Het gehele jaar door krijg je wel de zelfde vakken, alleen de lesstof veranderd en bij de codeervakken veranderd de codeertaal maar één keer, en dat is na dat de basis is gelegd. </p>
			<break>
			<h2 class="information"><span id="blok">Roos</span>ters</h2> 
			<p>Natuurlijk willen wij niet dat het rooster overweldigend zal zijn voor de eerste jaars, dus daar hoef je je niet druk over te maken. Hieronder staat een afbeelding van het rooster van een eerste jaars. </p>
			<img src="img/rooster.png" alt="Rooster, eerste jaars">
			<break>
			<h2 class="information"><span id="blok">Smoel</span>enboek</h2>
			<div class="row">
				<!-- <div class="smoelenboek">
					<img src="img/smoelenboek-placeholder.jpg" alt="placeholder foto">
					<span>Joost</span>
				</div>
				<div class="smoelenboek">
					<img src="img/smoelenboek-placeholder.jpg" alt="placeholder foto">
					<span>Ine</span>
				</div>
				<div class="smoelenboek">
					<img src="img/smoelenboek-placeholder.jpg" alt="placeholder foto">
					<span>Elton</span>
				</div> -->

				<div class="smoelenboek">
					<?php
					$names = ['<img src="img/Elton.jpg">', '<img src="img/Joost.jpg">', '<img src="img/Ine.jpg">', '<img src="img/Bart.jpg">', '<img src="img/Corne.jpg">', '<img src="img/Mustafa.jpg">', '<img src="img/Joep.jpg">', '<img src="img/Tim.jpg">', '<img src="img/Fedde.jpg">'];

					$rand_keys = array_rand($names, 3);
					echo $names[$rand_keys[0]] . $names[$rand_keys[1]] . $names[$rand_keys[2]] . "\n";

					?>
				</div>

				
			</div>



		</div>
	</div>



</body>