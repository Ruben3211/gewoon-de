<?php 

$links = array(
    "whatsapp" => "https://chat.whatsapp.com/invite/Hcz6GtqxJ8Z0C5NuUDhIrI", 
    "boeken" => "https://drive.google.com/drive/folders/0B3QX7v_nrvn9RjNDVWJUTVpWZzQ?usp=sharing", 
    "samenvatting"=>"https://drive.google.com/drive/folders/1WdroHuz2JB9LXdveRVX25hGktHCHudfx?usp=sharing",
    "memes"=>"https://www.reddit.com/r/Hanzememes/",
    "tentamens" => "/tentamens",
    "VERRASSING" => "/motivatie_vinden_om_wat_te_doen_terwijl_itil_en_itsm_stom_zijn_en_je_liever_een_kikker_in_de_groepsapp_will_gooien",
    "" => "/getmotivated",
);

if (array_key_exists($_SERVER['REQUEST_URI'], $links)) {
	header('Location: ' + $links[$_SERVER['REQUEST_URI']]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>gewoon.de</title>
</head>
<body>

    <?php foreach ($links as $key => $value) {
        echo '<a href="'.$value.'">'.$key.'</a> <br/>';
    } ?>

</body>
</html>
