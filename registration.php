<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">To Do List</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>


<div class="register_area">
    <div class="container">
        <div class="main">
            <div id="login">
                <h2>User Registration</h2>
                <hr/>
                <form action="" method="post" name="registrationFrom">
                    <label class="general">Name*:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name"></input> <br> <br>
                    <label class="general">Contact Number*:</label>
                    <input type="number" name="phone" id="phone" required="required" placeholder="+880........."></input> <br> <br>
                    <label class="general">Email*:</label>
                    <input type="email" name="email" id="email" required="required" placeholder="Enter your email here:"></input> <br> <br>
                    <label class="general">Date of Birth*:</label>
                    <input type="date" name="dob" id="dob" required="required" placeholder="Please Enter your date of birth:"></input> <br> <br>
                    <label class="general">Address*:</label>
                    <input type="address" name="address" id="address" required="required" placeholder="Please Enter your Address:"></input> <br> <br>
                    <label class="general">Password*:</label>
                    <input type="password" name="password" id="password" required="required" placeholder="Password here:"></input> <br> <br>
                    <label class="general">Password*:</label>
                    <input type="password" name="c_password" id="c_password" required="required" placeholder="Confirm Password here:"></input> <br> <br>   
                    <input type="submit" value="submit" name="submit">


                </form>
            </div>
        </div>
    </div>
</div>    
</body>
</html>