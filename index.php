<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg2.jpg);
    background-size: cover;
  }

  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: black;
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: orange;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: orange;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid yellow;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: orange;
    transition: .5s;
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: orange;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: black;
    background: orange;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .box input[type="submit"]:hover{
    background-color: black;
    color: orange;
  }

  </style>
  <title>Formulár</title>
</head>
<body>
  <div class="box">
    <h2>Vyplňte údaje:</h2>
    <form action="config.php">
      <div class="input-box">
        <input type="text" name="name"  autocomplete="off" required>
        <label for="">Meno</label>
      </div>
      <div class="input-box">
        <input type="text" name="surname"  autocomplete="off" required>
        <label for="">Priezvisko</label>
      </div>
      <div class="input-box">
        <input type="password" name="password"  autocomplete="off" required>
        <label for="">Heslo</label>
      </div>
      <div class="input-box">
        <input type="email" name="email"  autocomplete="off" required>
        <label for="">E-mail</label>
      </div>
      <div class="input-box">
        <input type="tel" name="tel"  autocomplete="off" required>
        <label for="">Telefónne číslo</label>
      </div>
      <div class="input-box">
        <input type="text" name="bd"  autocomplete="off" required>
        <label for="">Rok narodenia</label>
      </div>
        <input type="submit" value="Odošli" onclick="alert('Odoslané')">
    </form>
  </div>
</body>
</html>
