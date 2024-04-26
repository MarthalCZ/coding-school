<?php

    // Načtení polí z formuláře (email); odstraňění bílých znaků; odstranění kódu
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // Kontrola dat + přesměrování na chybovou adresu
    if !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: https://www.chill-chinchillas.cz/index.html?success=-1#form");
        exit;
    }

    // Email, na který bude vyplněný formulář odeslán
    $recipient = "martasek.pospisil@seznam.cz";

    // Předmět odesílaného emailu
    $subject = "Chill Chinchillas – Nový odběratel: $name";

    // Obsah odesílaného emailu
    $email_content .= "Odběratel: $email\n\n";

    // Hlavička odesílaného emailu
    $email_headers = "Od: <$email>";

    // Odeslání emailu – všechny komponenty
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Přesměrování po úspěšném odeslání
    header("Location: https://www.chill-chinchillas.cz/index.html?success=1#form");

?>
