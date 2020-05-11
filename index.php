<?php
function text ($phrase,$element)
{
return $phrase.' '. $element;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex2 partie4 php</title>
</head>
<body>
<?php
$word = texte ('ceci est une chaine de caractères.','ceci est une seconde chaine de caractères');?>
<p><?php echo $word;?></p>
</body>
</html>
