<?php

     // Načtení polí z formuláře (email); odstraňění bílých znaků; odstranění kódu
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

   // Kontrola dat + přesměrování na chybovou adresu
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: https://www.chill-chinchillas.cz/kontakt.html?success=-1#form");
        exit;
    }

     // Email, na který bude vyplněný formulář odeslán
    $recipient = "martasek.pospisil@seznam.cz";

     // Předmět odesílaného emailu
    $subject = "Chill chinchillas – Nová zpráva: $name";

    // Obsah odesílaného emailu
    $email_content = "Jméno: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Zpráva:\n$message\n";

    // Hlavička odesílaného emailu
    $email_headers = "Od: $name <$email>";

    // Odeslání emailu – všechny komponenty
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Přesměrování po úspěšném odeslání
    header("Location: https://www.chill-chinchillas.cz/kontakt.html?success=1#form");

?>
