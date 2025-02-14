
<php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Check if the username and password match (you can adjust this logic)
        if ($_POST['uname'] == 'Ryan' && $_POST['psw'] == 'yourpassword') {
            // If login is successful, redirect to a new page (e.g., "welcome_page.php")
            header('Location: page1.html');  // Replace with your desired page
            exit();  // Stop further execution of the script
        } else {
            // If login fails, redirect back to the login page with an error message
            // Optionally, you can add a message or use URL parameters to indicate an error
            header('Location: login_page.html');  // Replace with your actual login page
            exit();  // Stop further execution of the script
        }
    }
>