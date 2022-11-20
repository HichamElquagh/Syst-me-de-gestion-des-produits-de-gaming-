function signUp(){
    global $conn;

    $username =htmlspecialchars(trim($_POST['userName']));
    // Remove all illegal characters from email
    $email =filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    // $email =htmlspecialchars(trim($_POST['email']));
    // $password = $_POST['password'];
    // $password =htmlspecialchars(trim(password_hash($_POST['password'], PASSWORD_BCRYPT)));
    $password =htmlspecialchars(trim(md5($_POST['password'])));
    $passwordCheck =$_POST['passwordCheck'];

    if(!empty($username) && !empty($password) && !empty($email) && !is_numeric($username))
    {
    $sql = "SELECT * FROM admins WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    $numEmail = mysqli_num_rows($result);

    if($numEmail == 0){
        $sql = "INSERT INTO admins (name,email,password) VALUES ('$username','$email','$password')";
        $result = mysqli_query($conn,$sql);

        $_SESSION['accountCreated'] = 'your account has beeen created successfully';
        header('location: .././pages/login.php');
    }else{
        $_SESSION['emailExist'] = 'this email is already exist';
        header('location: .././pages/signup.php');
    }
}else{
    $_SESSION['wrongData']='check your informations';
    header('location: .././pages/signup.php');
}
}
