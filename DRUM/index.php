<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>DRUMS</title>
		<link rel="stylesheet" href="css/main.css" type="text/css">
		<link rel="stylesheet" href="css/main_media.css" type="text/css">

		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<section class="keys">
			<div data-key="81" class="key">
				<kdb>Q</kdb>
				<span class="sound">boom</span>
			</div>
			<div data-key="87" class="key">
				<kdb>W</kdb>
				<span class="sound">clap</span>
			</div>
			<div data-key="69" class="key">
				<kdb>E</kdb>
				<span class="sound">hihat</span>
			</div>
			<div data-key="82" class="key">
				<kdb>R</kdb>
				<span class="sound">kick</span>
			</div>
			<div data-key="84" class="key">
				<kdb>T</kdb>
				<span class="sound">openhat</span>
			</div>
			<div data-key="89" class="key">
				<kdb>Y</kdb>
				<span class="sound">ride</span>
			</div>
			<div data-key="85" class="key">
				<kdb>U</kdb>
				<span class="sound">snare</span>
			</div>
			<div data-key="73" class="key">
				<kdb>I</kdb>
				<span class="sound">tink</span>
			</div>
			<div data-key="79" class="key">
				<kdb>O</kdb>
				<span class="sound">tom</span>
			</div>
		</section>		
	
		<audio data-key="81">
			<source src="sounds/lox.mp4" type="video/mp4">
    		<source src="sounds/lox.ogg" type="video/ogg">
		</audio>
		<audio data-key="87" src="sounds/clap.wav"></audio>
		<audio data-key="69" src="sounds/hihat.wav"></audio>
		<audio data-key="82" src="sounds/kick.wav"></audio>
		<audio data-key="84" src="sounds/openhat.wav"></audio>
		<audio data-key="89" src="sounds/ride.wav"></audio>
		<audio data-key="85" src="sounds/snare.wav"></audio>
		<audio data-key="73" src="sounds/tink.wav"></audio>
		<audio data-key="79" src="sounds/tom.wav"></audio>
		
		<script>
			function playSound(e) {
				const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
				const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
				if(!audio) return;
				audio.currentTime = 0;
				audio.play();
				key.classList.add('playing');
			}
			function playSound_forPhones() {
				const key = this;
				const keyCode = key.getAttribute('data-key');
				const audio = document.querySelector(`audio[data-key="${keyCode}"]`);
				
				if(!audio) return;
				audio.currentTime = 0;
				audio.play();
				key.classList.add('playing');
			}
			function removeTransition(e) {
				if(e.propertyName !== 'transform') return;
				this.classList.remove('playing');
			}
			
			const keys = document.querySelectorAll('.key');
			keys.forEach(key => key.addEventListener('click', playSound_forPhones));
			keys.forEach(key => key.addEventListener('transitionend', removeTransition));
			
			document.addEventListener('keydown', playSound);
			
			
		</script>
	</body>
</html>












