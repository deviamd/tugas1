<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
     <?php
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
print_r($kids);
echo "<br>";
echo "Total Kids : " . count($kids);
echo "<ul>";
echo "<li>" . $kids[1] . "</li>";    
echo "<li>" . $kids[2] . "</li>";  
echo "<li>" . $kids[3] . "</li>";  
echo "<li>" . $kids[4] . "</li>";  
echo "<li>" . $kids[5] . "</li>";  
echo"</ul>"; 

$biodata = [
[
 "Name" => "Will Byers", "Age" => 12, "Aliases" => "Will the Wise", "Status" => "Alive"
],
[
"Name" => "Mike Wheeler", "Age" => 12, "Aliases" => "Dungeon Master", "Status" => "Alive"
],
[
"Name" => "Jim Hopper", "Age" => 43, "Aliases" => "Chief Hopper", "Status" => "Deceased"
],
[
"Name" => "Elevn", "Age" => 12, "Aliases" => "E1", "Status" => "Alive"
]
];

echo "<pre>";
print_r($biodata);
echo "</pre>";
?>
</body>
</html>