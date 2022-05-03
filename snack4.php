

<?php 
phpinfo();
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
    $text = "Lorem ipsum. dolor sit, amet consectetur adipisicing elit. Qui minima laudantium, ab deleniti quidem iure, odio eaque. Eius voluptate quos alias porro explicabo necessitatibus reprehenderit ducimus incidunt, quae quisquam eos.";
// Prendere il paragrafo e suddividerlo in tanti paragrafi.
    $splitText = explode(". " , $text);
// Ogni punto un nuovo paragrafo.
   foreach($splitText as $text){
       echo $text . '<br>';
   }
?>