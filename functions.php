<? php
session_start();
 //  connect to database
 $db = mysqli_connect('localhost', 'root', '', 'multi_login');
 // variable declaration
 $username = "";
 $email ="";
 $errors = array();
  //call the regiater () function if register_btn is clicked
  if (iiset ($_POST['register_btn'])) {
      register();

  }
  //register usernamefunction register(){
      // call these variables with global keyword to make them availbale in function
      global $db, $errors, $username, $email;

      // recieve all input values from the form. call the E() function
      // defined below to escape form values

      $username = e($_POST['username']);
      $email = e($_POST['email']);
      $password_1 = e($_POST['password_1']);
      $password_2 = e($_POST['password_2']);

      //form validation ensure that the form is correctly filled in
      if (empty($username)){
          array_push($errors, "Username is required");

      }
      if (empty($email{
        array_push($errors, "Email is required");
      }
      if (empty($password_1)){
          array_push($errors, "Pasword is required");
      }
      if($password_1 != $password_2) {
          array_push($errors, "The two passwords do not match");

      }
      // register uuser if there are no errrors in the form
      if (count($errors) == 0){
          $password = md5($password_1); // encrypt the password before storing it into the database
          
          if (isset($_POST['user-type'])){
              $user_type = e($_POST['user_type']);
              $query = "INSERT INTO users (username, email, user_type, password)
                    VALUES('$username', '$email', '$user_type', '$password')";
                mysqli_query($db, $query);
                $_SESSION['successful'] = "New user successfully created!!";
                header('location: home.php');
          }else{
              $query = "INSERT INTO users(username, email, user_type, password)
              VALUES('$username', '$email', '$user', '$password')";

            mysqli_query($db, $query);
            // get id of the username
            $logged_in_user_id = mysqli_insert_id($db);
            $_SESSION['user'] = getUserBYId($logged_in_user_id); // put logged in user in session
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
          }
          }
      }
      // return user array from their id
      function getUserBYId(){
          global $db;
          $query= "SELECT *FROM users WHERE id=" .$id;
          $result= mysqli_query($db, $query);

          $user = mysqli_fetch_assoc(result);
          return = $user;
      }

      //escape string
      function e($val){
          global $db;
          return mysqli_real_escape_string($db, trim($val));

      }
      function display_error(){
          globall $errors;

          if (count($errors;)>0){
              echo'<div class="error">;
              foreach ($errors as $error){
                  echo $error .'<br>';
              }
              echo '</div>';

          }
      }