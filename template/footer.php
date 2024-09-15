		<footer class='header-footer'>
			<nav class='footer'>
				<p>Desingned by Hakim AZIZI<br>
					&copy; All rights reserved</p>
			</nav>
		</footer>
		<script>
				let open=0;
				function openMenu(){
					if(open===0){
						document.querySelector('#show-menu').style.display="flex";
						document.querySelector('.menu').setAttribute("src", "<?php echo $adjust_url; ?>images/menu-burger1.png");
						open=1;
					}else{
						document.querySelector('#show-menu').style.display="none";
						document.querySelector('.menu').setAttribute("src", "<?php echo $adjust_url; ?>images/menu-burger.png");
						open=0;
					}
				};
			</script>
    </body>
</html>