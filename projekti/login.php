<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team18-register</title>
    <link href="register.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="main.html">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Eetu.html"><b>Experts</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Jesse.html"><b>Supports</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Sauli.html"><b>Apply for job</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Elmo.html"><b>Cybersecurity</b></a>
            </li>
            <li>
              <a class="nav-link" href="register.html"><b>Register</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    <?php
    $erhe=isset($_GET["virhe"]) ? $_GET["virhe"] : "Kirjaudu, ole hyvä!";
    print "<p>$erhe</p>";
    ?>
<form action="check.php" method="GET">
    <div class="container">
      <h1>Log In</h1><br><br>
      <p>Please type in your email address and password.</p>
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="psw" required>
        
      <hr>
  
     
      <button type="submit" class="registerbtn">Log In</button>
    </div>
  
    <div class="container signin">
      <p>Don't have an account yet?<a href="register.html"><br>Register here</a>.</p>
    </div>
  </form>
</body>
</html>