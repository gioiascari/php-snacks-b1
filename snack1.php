<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    $basketTeam = [
        ['teamIn'=> 'Atlanta Hawks', 'pointsIn'=> 43,
        'teamOut'=> 'Los Angeles Lakers', 'pointsOut'=> 58,
        ],
        ['teamIn'=> 'Boston Celtics', 'pointsIn'=> 110,
        'teamOut'=> 'Houston Rockets', 'pointsOut'=> 98,
        ],
        ['teamIn'=> 'Chicago Bulls', 'pointsIn'=> 65,
        'teamOut'=> 'Toronto Raptors', 'pointsOut'=> 100,
        ],
        
       
    ];
    
    

?>

<p>
  <?php 
    for($i = 0; $i < count($basketTeam); $i++){
        echo $basketTeam[$i]["teamIn"] . ' - ' . $basketTeam[$i]["teamOut"] . ' | ' . $basketTeam[$i]["pointsIn"] . ' - ' . $basketTeam[$i]["pointsOut"] . '</br>';
        };
  
  ?>
</p>
