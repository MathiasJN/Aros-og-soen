<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aros og søn ApS</title>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        background: yellow;
        display: flex;
        font-family: sans-serif;
      }

      .container {
        margin: auto;
        width: 500px;
        max-width: 90%;
        border-radius: 10px;
      }

      .container form {
        width: 100%;
        height: 100%;
        padding: 20px;
        background: black;
        border-radius: 6px;
        color: white;
      }

      .container form h1 {
        text-align: center;
        margin-bottom: 20px;
        color: white;
      }

      .container form .form-control {
        width: 100%;
        height: 40px;
        background: white;
        border: 1px solid silver;
        margin: 10px 0 18px 0;
        padding: 0 10px;
        border-radius: 5px;
      }

      .container form .btn {
        margin-left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 34px;
        background: yellow;
        cursor: pointer;
        font-size: 20px;
        text-transform: uppercase;
        color: black;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="header-login">
      <h1> Aros og Søn ApS </h1>
    </div>

    <div class="container">
      <form action="">
        <h1>Aros og Søn ApS CRM </h1>
        <div class="form-group">
          <label for="">Brugernavn</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" required>
        </div>
        <input href="Dashbord.php" type="submit" class="btn" value="Login">
      </form>
    </div>
<style>
  .header-login {
    padding: 35px;
    text-align: center;
    background-color: black;
    color: white;

  }

  .header-login h1 {
    font-size: 50px;
  }


  </style>
  </body>
</html>
