<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
  .container{
    justify-content: center;
    align-items: center;
    margin: auto;

  }
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
    margin-left: 30%;
  }
  form input{
    height: 36px;
    border-radius:4% ;
  }
 
</style>  
</head>
  <body>
    
    <a style="float:right;" href="{{ url('/logout') }}">Logout</a>
  

<form>
 <div class="container">
    <h1>TODO APP</h1>
  <input type="text" id="task-input" name="task" placeholder="Enter a task here">
  <button type="submit" class="btn btn-primary" id="add-button">Save</button>
  <button type="button" class="btn btn-success" id="clear-button">Get Task</button>
  </div>
</form>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Todo item</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button class="btn btn-danger">Delete</button>
      <button  class="btn btn-success">Finished</button>
    
    </td>
    </tr>
    
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>