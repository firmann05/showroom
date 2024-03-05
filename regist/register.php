<form action="action_page.php">
  <div class="container">
    <a href="registregister.css">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
<style>
  body {
    background-color: #f5f5f5;
  }

  .container {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  h1 {
    color: #ff0000;
    text-align: center;
    font-size: 24px;
  }

  label {
    font-weight: bold;
    color: #ff0000;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
  }

  hr {
    border: none;
    height: 1px;
    background-color: #ddd;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  p {
    text-align: center;
    margin-bottom: 20px;
  }

  a {
    color: #ff0000;
    text-decoration: none;
  }

  .registerbtn {
    background-color: #ff0000;
    color: #fff;
    border: none;
    padding: 10px;
    width: 100%;
    cursor: pointer;
    border-radius: 3px;
  }

  .registerbtn:hover {
    background-color: #c30000;
  }

  .container.signin {
    text-align: center;
    margin-top: 20px;
  }
</style>