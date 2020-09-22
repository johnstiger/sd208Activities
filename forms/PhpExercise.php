<?php
session_start();
$clickbait_words = array(
            "scientist",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "tricked",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"

);

$replacement_words = array(
                "so-called scientist",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "inneffective",
                "method",
                "is no different than the others",
                "you won't really be surprised by",
                "slightly improve",
                "boring",
                "normal"

);
$input = $_POST['value'];
function Word($clickbait_words,$replacement_words,$original_headline){
    $str = strtolower($original_headline);
    $words = explode(' ', $str);
    $counts = array_count_values(preg_replace('/[^a-zA-Z0-9-_\.]/','',$words)); 
    $array_name = array();
    foreach ($counts as $key => $value) {
        foreach($clickbait_words as $value1){
            if ($key == $value1){
                echo "$key";
                echo "<br>";
            }
        }
        
        // $array_name[$key] = $value;
    
        
    }
    // print_r($array_name);
}
Word($clickbait_words, $replacement_words, $input );
// $str = strtolower();
// $words = explode(' ', $str);
// $counts = array_count_values(preg_replace('/[^a-zA-Z0-9-_\.]/','',$words)); 
// $array_name = array();
// foreach ($counts as $key => $value) {
//     $array_name[$key] = $value;
//     // echo $key . "  =  " . $value . '<br>';
// }
// print_r($array_name);


// $index = count($clickbait_words);


// if(isset($_POST['submit'])){
//     $input = $_POST['value'];
//     for($i = 0; $i<$index;$i++){
//         if()
//         echo "$clickbait_words[$i]";
//         echo "<br>";
//     }
// }
// $index = 0;
// if(isset($_POST['submit'])){
//     $input = $_POST['value'];
//     foreach ($clickbait_words as $value1){
//         foreach($replacement_words as $value2 ){
//             if($input == $value1){
//                 $input = $value1;
//                 if($input == $value2){
//                     echo "Match!";
//                 }
//             }else{
                
//             }
//         }
        
         
//      }
// }
// else{
// echo "Not set";
// }


// function Sample(){
    
// }

// Sample()









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Exercise</title>
    <style>
    input[type = "text"]{
        width:300px;
        height:100px;
    }
    input[type="submit"]{
        width:300px;
    }
    
    </style>
</head>
<body>
<center>
<h1>Clickbait Headline</h1>
    <form action="" method = "post">
    <input type="text" name = "value" placeholder = "Paste a clickbait headline..."><br>
    <input type="submit" name = "submit" value = "Change the clickbait headline">
    </form>
    </center>
</body>
</html>