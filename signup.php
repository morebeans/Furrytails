<?php

include_once 'connect.php';

if(isset($_POST['signup'])) {
    
$username = $_POST['username'];
$password = $_POST['password'];
$lastname = $_POST['firstname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$city = $_POST['city'];
$state = $_POST['state'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$petname = $_POST['petname'];
$typeofpet = $_POST['typeofpet'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$gender = $_POST['gender']; 


$checkEmail = "SELECT * FROM user_table WHERE email='$email'";
$result = $conn->query($checkEmail);

if ($result->num_rows > 0) {
    echo "email already registered!";
    #header("Location: ../index.php?signup=error");
} 
else {
    if ($_POST["password"] === $_POST["password"]) {

        $insertAddressQuery = "INSERT INTO address_table(address, city, state, zipcode) 
                                VALUES ('$address', '$city', '$state', '$zipcode')";

        $insertPetQuery = "INSERT INTO pet_table(pet_name, type_of_pet, breed, age, weight, gender) 
                                VALUES ('$petname', '$typeofpet', '$breed', '$age', '$weight', '$gender')";

        if ($conn->query($insertAddressQuery) === TRUE || $conn->query($insertPetQuery) === TRUE) {

            $address_id = $conn->insert_id;
            $pet_id = $conn->insert_id;
            $insertUserQuery = "INSERT INTO user_table(username, password, firstname, lastname, middlename, pet_id, address_id, phone_no, email )
                                    VALUES ('$username', '$password', '$firstname', '$lastname', '$middlename', '$pet_id', '$address_id', '$phone_no.', '$email')";

            if ($conn->query($insertUserQuery) === TRUE) {
                #header("Location: ../index.php?signup=success");
                echo "insert succesfully!";
            } 
            else {
                echo "Error: " . $conn->error;
            }
        } 
        else {
            echo "Error: " . $conn->error;
        }
    } 
    else {
        echo "tite";
        #header("Location: ../index.php?signup=pwnotmatched");
    }
}
}
?>
