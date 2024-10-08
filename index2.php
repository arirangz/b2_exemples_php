<?php

    $age = 5;

    if ($age >= 18) {
        echo "Tu es majeur";
    } else {
        echo "Tu n'es pas majeur";
    }


 
?>

<p>L'age de l'utilisateur est : <?= $age ?></p>
<p>L'age de l'utilisateur est : <?php echo $age ?></p>