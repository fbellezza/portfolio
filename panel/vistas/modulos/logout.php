<?php

	//Removemos sesión.
    session_unset();
    //Destruimos sesión.
    session_destroy();              
    //Redirigimos pagina.

	echo '<script>

			window.location = "inicio";

		</script>';