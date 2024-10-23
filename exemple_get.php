<?php

if (isset($_GET["nom"])) {
    echo htmlspecialchars($_GET["nom"]);
} else {
    echo "paramètre 'nom' manquant dans l'url";
}