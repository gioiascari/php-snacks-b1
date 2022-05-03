
<?php 
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    $students = [
        [
            'name'=> 'Luca ',
            'lastname' => 'Vitullo',
            'votes' => [7,8,8,9],
        ],
        [
            'name'=> 'Erik ',
            'lastname' => 'Schievenin',
            'votes' => [6,6,8,3],
        ],
        [
            'name'=> 'Gioia ',
            'lastname' => 'Basso',
            'votes' => [8,9,9,10],
        ],
        [
            'name'=> 'Amabile ',
            'lastname' => 'Trofeo',
            'votes' => [4,3,5,4],
        ],
        [
            'name'=> 'Lucio ',
            'lastname' => 'Melis',
            'votes' => [7,5,9,9],
        ],
    ];
    

    for($i=0; $i < count($students); $i++){
     
     // Stampare Nome, Cognome 
        echo('<p>' . $students[$i]['name'] . $students[$i]['lastname'] . '</p>'); 
    // e la media dei voti di ogni alunno.
        $sum = array_sum($students[$i]['votes'])/count($students[$i]['votes']);
        echo('<p>' . $sum . '</p>');

    };
    




?>

