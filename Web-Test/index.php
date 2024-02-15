<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    
<header>
</header>

<main>
    <H1>Game</H1>
</main>   
        
<?php
$jonesy= new GameCharacter("jonesy.jpg","jonesy is the main character");
$jonesy->generateHTML();
$jonesy->CharacterCategory("Playable Character");


echo $Jonesy::CLASS_CATEGORY
echo $Jonesy::$Number_of_Character
echo GameCharacter::CLASS8CATEGORY
echo GamrCharacter::$Number_of_Character;
?>


<?php
// Cookies
$CookieName = "ramirez";
$cookieValue = "fortnite Game Character";
setcookie($CookieName, $CookieValue, time() + (86400*30) );

// Raeding a cookie

if (!isset($_COOKIE[$CookieName]))
{  
    echo "Cookie is not available";
    
} else{
    echo "Cookie Value:" . $_COOKIE[$CookieValue];
}

?>


</body>
</html>