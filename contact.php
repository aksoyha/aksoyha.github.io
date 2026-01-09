
    <?php
    if($_SERVER[REQUEST_METHOD]=="POST"){
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $mail=$_POST['mail'];
    $mesaj=$_POST['messages'];

    echo "Ad:".htmlspecialchars($ad)."<br>";
    echo "Soyad:".htmlspecialchars($soyad)."<br>";
    echo "Mail:".htmlspecialchars($mail)."<br>";
    echo "Mesaj:".nl2br(htmlspecialchars($mesaj))."<br>";
    }
    ?>
