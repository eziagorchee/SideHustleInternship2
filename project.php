<?php
echo "<h1>PHP PROJECT</h1>"; 

// ----program showing user's generted username and password

function usernames_and_passwords() {

    // Array for usernames
    $usernames = ["Ada", "Funsho", "Gabriel", "Ayo", "Dami"];

    // Function for random number generation
    function randomnum() {
        for ($i=0; $i < 3; $i++) { 
            $random_number = rand(100, 999);
            return $random_number;
        }
    } 

    //  Generating Username
    foreach ($usernames as $a_name => $name) {
        if (strlen($name) < 6) {
            $gen_username[$a_name] = $name.randomnum();
         } elseif (strlen($name) <= 7 and strlen($name) < 8) {
            $gen_username[$a_name] = $name;
         } else {
             echo "Username cannot be less than 6 or greater than 8";
            
         }
    }

    //Array for Password
    $password_headers = ["fec", "abc", "bdf", "xyz", "mno"];

    //Generating Password 
    foreach ($password_headers as $password_head => $password) {
        $pass = $password.randomnum().$password;
        $gen_password[$password_head] = $pass;
    }

    // Showing generated Username and Passwords
    for ($i=0; $i < count($gen_username); $i++) { 
        echo "<bold>username : {$gen_username[$i]} <br/> password : {$gen_password[$i]}</bold>";
        echo "<h3>username : {$gen_username[$i]} <br/> password : {$gen_password[$i]}</h3>";
    }
    return;
}

usernames_and_passwords();
echo "task completed";


?>