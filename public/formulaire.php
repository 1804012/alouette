<?php
include "../donnees.inc.php";
include "../Alouette.php";
$donnees = [
    'oiseau' => $oiseau,
    'qualite' => $qualite,
    'action' => $action,
    'membres' => $membres,   
];
?><!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/alouette.css" />
        <title>Composer ma chanson</title>
        <style>
        input{
                background-color:rgba(255, 255, 255, 0.7);
                color: rgba(0, 0, 0, 0.5);
                border: none;
                margin:1em;
                padding:.7em;
                width:33em;
            
            }
 
            textarea{
                background-color:rgba(255, 255, 255, 0.7);
                color: rgba(0, 0, 0, 0.5);
                border: none;
                margin:1em;
                padding:.7em; 
            }
 
            form{
                color: rgb(255,255,255);
                
            }
 
            form div{
                display:flex;
                flex-direction:row;
                justify-content:space-between;
                align-items:center;
 
            }
 
            div.body{
                margin:auto;
 
            }
 
            body{
                display: flex;
                flex-direction: column;
                margin:auto;
            }
 
            div.area{
                display:flex;
                align-items:center;
            }
 
            input.submit{
                margin:auto;
                width:30%;
            }
 
            input.submit:hover{
                background-color:rgba(0,0,0,0.7);
                color:rgba(255,255,255,0.7);
            }
            
            textarea {
                width: 33em;
            }
    </style>
    </head>
    
	<body>
        <div id="app">
            <?php include "../header.inc.php"; ?>
            <?php include "../footer.inc.php"; ?>
            <?php include "../menu.inc.php"; ?>
    		<div class="body">
                <h1>Composer ma chanson</h1>
                <?php echo Alouette::formulaire($donnees); ?>
            </div>
        </div>
	</body>
</html>