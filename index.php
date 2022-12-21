<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/style.css">
    <title>Smart chicken coop</title>
</head>
<header>
    <span id="header">SMART CHICKEN COOP</span> <span id="txt"></span>
</header>
<body onload="startTime()">
    <div class="temp_container">
        Wanted coop temperature: 15°C
        <br>
        Actual temperature: 13°C
        <br><br>
        <button id="heater_minus">Heater -</button>
        <button id="heater_plus">Heater +</button>
    </div>
    <div class="temp_container">
        Max water: 70%
        <br>
        Actual water level: 40%
        <br><br>
        <button id="heater_minus">Water -</button>
        <button id="heater_plus">Water +</button>
    </div>
    <div class="temp_container">
        Is door open?
        <br>
        YES
        <br><br>
        <button id="heater_minus">Close door</button>
        <button id="heater_plus">Open door</button>
    </div>
    <table>
        <tr>
          <th>Temperature</th>
          <th>Humidity</th> 
          <th>Light volume</th>
        </tr>
        <tr>
          <td>13°C</td>
          <td>64%</td> 
          <td>60%</td>
        </tr>
      </table>
</body>
<footer>
    <span id="copyright">Made by Tomáš Timko & Maroš Matej</span>
</footer>
<script src="scripts/index.js"></script>
</html>