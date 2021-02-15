<?php
class Videogame
{
  public $title;
  public $studio;
  public $genre;
  public $platform;
  public $price;

  public function __construct(string $title, string $studio, string $genre, string $platform, float $price)
  {
    $this->title = $title;
    $this->studio = $studio;
    $this->genre = $genre;
    $this->platform = $platform;
    $this->price = $price;
  }
}

$mgs = new Videogame('Metal Gear Solid', 'Konami', 'Stealth', 'PlayStation', 69.99);
$ff7 = new Videogame('Final Fantasy VII', 'Squaresoft', 'JRPG', 'PlayStation', 59.99);
$shenmue = new Videogame('Shenmue', 'SEGA', 'Adventure', 'Dreamcast', 69.99);
$fable = new Videogame('Fable', 'Lionhead Studios', 'RPG', 'Xbox', 59.99);
$halo = new Videogame('Halo: Combat Evolved', 'Bungie', 'FPS', 'Xbox', 59.99);

$videogames = [$mgs, $ff7, $shenmue, $fable, $halo];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Videogames</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <?php
    foreach ($videogames as $videogame) { ?>
      <div class="card">
        <h2><?php echo $videogame->title ?></h2>
        <p>Studio: <?php echo $videogame->studio ?></p>
        <p>Genre: <?php echo $videogame->genre ?></p>
        <p>Platform: <?php echo $videogame->platform ?></p>
        <p>Price: <?php echo $videogame->price ?>€</p>
      </div>
    <?php } ?>
  </div>
</body>

</html>