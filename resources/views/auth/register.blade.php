<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      body {
        font-family: Arial, sans-serif;
      }

      form {
        width: 400px;
        margin: 0 auto;
      }

      label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }

      button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }

      button[type="submit"]:hover {
        background-color: #45a049;
      }

      .container {
        padding: 16px;
      }

      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }

      @media (max-width: 600px) {
        form {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
  <div class="container">
    <form method="post" action="{{ url('/register') }}">
        @csrf
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <div class="clearfix">
   <button class="btn btn-success" > <a class="text-decoration-none text-light"  href="{{url('/login')}}">Sign in</a></button>
        
          <input type="submit">Sign Up</button>
        </div>
        <!-- <div class="clearfix">
          <a href="#"><button class="btn btn-danger">Sign in</button></a>
        </div> -->
       
    </form>
   
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>