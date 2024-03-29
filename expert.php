<?php
declare(strict_types=1);


// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong

echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}

new_exercise(2);

// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];

for($letter = 'a'; $letter <= 'z'; $letter++) { 
    array_push($arr, $letter);
    if ($letter == 'z') {
break;
}
}

print_r($arr);

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") { // voornaam + achternaam
    $params = [$str1, $str2];
    foreach($params as &$param) { // if param is changed, then params will also be changed
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode($params, " - "); // return is needed to return a value from a function
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)]; // rand means make a random number

    return $randname;
}

echo "Here is the name: " . combineNames();

new_exercise(7);
$year = 'Y';
function copyright($year) {
    return "&copy; $year BeCode";
}
//print the copyright

echo copyright(date('Y'));



new_exercise(8);

function login(string $email, string $password) {
    if($email == 'john@example.be' || $password == 'pocahontas') {
        return 'Welcome John Smith';
    } else {
        return 'No access';
    }
}
//should greet the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
//no access
echo $login;
echo '<br/>';
$login = login('john@example', 'dfgidfgdfg');
//no access
echo $login;
$login = login('wrong@example', 'wrong');
echo $login;


new_exercise(9);

function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as &$unacceptable) {
        if (strpos($link, $unacceptable) == true) {
            return 'Unacceptable Found<br/>';
        }
        else {
            return 'Acceptable<br/>';
        }
    }
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself

$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
$count = count($areTheseFruits);
//from here on you can change the code
for($i=0; $i < $count; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) { // in_array: Checks if a value exists in an array
        unset($areTheseFruits[$i]); // unset means 'remove from the array'
    }
}

var_dump($areTheseFruits); //do not change this. 
//var_dump — displays structured information about one or more expressions that includes its type and value.