<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilovi1.css">
    <title>Rezervacija</title>
</head>
<body>
<div id="forma">     
        <div class="box">
          <h3 class="naslov">Napravite svoju rezervaciju!</h3>
          <div class="forma">
            <form action="mysql.php" method="POST">
              <div class="grupa">
                <label for="ime">Ime</label>
                <input type="text" id="ime" name="ime" required>
              </div>
              <div class="grupa">
                <label for="prezime">Prezime</label>
                <input type="text" id="prezime" name="prezime" required>
              </div>
              <div class="grupa">
                <label for="telefon">Broj telefona</label>
                <input type="text" id="telefon" name="telefon" required>
              </div>
              <div class="grupa">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="grupa">
                <label for="grad">Grad</label>
                <input type="text" id="grad" name="grad" required>
              </div>
              <div class="grupa">
                <label for="notes">Napomena</label>
                <textarea name="notes" id="notes" rows="4"></textarea>
              </div>
              <button type="submit" class="dugme">Rezerviši!</button>
            </form>
          </div>
        </div>
      </div>    
</body>
</html>