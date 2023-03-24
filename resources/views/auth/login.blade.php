<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sign In Page</title>
    
    <style>

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  margin: 0 auto;
  padding: 20px;
  max-width: 400px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

    </style>
  </head>
  <body>
    <div class="container">
      <form method="POST" action="{{ url('/login') }}">
        @csrf
        <h2>Sign In</h2>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit">Sign In</button>
      </form>
    </div>
  </body>
</html>