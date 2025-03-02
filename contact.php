
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $_POST["nume"];
        $prenume = $_POST["prenume"];
        $email = $_POST["email"];
        $telefon = $_POST["telefon"];}

        echo "Datele domnului/doamnei $nume au fost înregistrate";
    ?>