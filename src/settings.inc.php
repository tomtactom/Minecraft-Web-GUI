<?php
    //Stellt ein ob die Seite von Suchmaschienen erfasst werden soll oder nicht
    if ($robots) {
        $robots = 'index,follow';
    } else {
        $robots = 'noindex,nofollow';
    }
    
    //Überprüft ob der User eingelogt ist und gibt erst dann den Seiteninhalt frei
    if ($show_only_user) {
        $user = check_user();
    }

	if ($pageurl) {
		$pageurl_trim = trim($pageurl, 'http://');
		$pageurl_trim = trim($pageurl, 'https://');
	}
    
?>