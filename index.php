<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<title>Calculator PHP</title>
<link rel="stylesheet" href="style/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
<div class="row justify-content-center cont">
  <div class="inside-cont">
  <form class="form-group mt-5" id="main-content" action="index.php"> 
      <input class="num1 py-1" type="text" name="num1" placeholder="Number 1">
      <input class="num2 py-1" type="text" name="num2" placeholder="Number 2">
      <select class="operator py-1" name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>

    <br>
    <button class="btn btn-dark mt-5" name="submit" value="submit" type="submit">Calculate</button>
  </form>
  <h1>The answer is:</h1>
  <?php
      if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
          case "None":
              echo "<h1>You need to seleect a method!</h1>";
            break;
          case "Add":
              echo $result1 + $result2;
            break;
          case "Subtract":
              echo $result1 - $result2;
            break;
          case "Multiply":
              echo $result1 * $result2;
            break;
          case "Divide":
              echo $result1 / $result2;
            break;
        }
      }
  ?>
  <br>
  <a type="button" class="btn btn-dark" href="/">Clear</a>
  </div>
</div>

</body>

</html>
