# Victory Invest Group

<a href="https://sonfinity-poland.github.io/Victory-invest-group/">See demo</a>

#1.

- **Index.html** zmieniasz na **index.php**, następnie w tym pliku na samej górze przed znacznikiem <html> dodajesz
 ```
  <?php
    include "config.php";
  ?>
```
- W głównym folderze tworzysz plik **config.php**
``` 
 <?php
    session_start();

    if(!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "pl";
    } else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "pl") {
            $_SESSION['lang'] = "pl";
        } else if ($_GET['lang'] == "en") {
            $_SESSION['lang'] = "en"; 
        }
    }

    require_once "assets/lang/".$_SESSION['lang'].".php";
?>
```

#2.

- W folderze assets tworzysz folder **"lang"**. Następnie tworzysz w nim 2 pliki -> pl.php i en.php

```
  <?php
    $lang = array();
    
    $lang["NAZWA_ZMIENNEJ"] = "TREŚC ZMIENNEJ";
    $lang["navbar_homepage"] = "STRONA GŁÓWNA";
 ?>
```

#3.

- Każdą zmienną zastępujemy text w pliku index.php, który chcemy tłumaczyć

```
  <nav>
    <ul>
      <li>STRONA GŁÓWNA</li> - zmieniamy na:
      <li><?php echo $lang['navbar_homepage'] ?></li>
    </ul>
  </nav>
```
Posępujemy tak w przypadku każdego tekstu jaki chcemy zmienić, gdy juz skończysz uzupełniać zmienne w pl.php kopiujesz wszystko do en.php i po prostu pod zmienne podstawiasz nazwę tłumaczoną na angielki.

#4.

- Ostatnim etapem jest podpięcie pod przyciski odpowiedniej ścieżki do zmiany języka (w href dodajemy "?lang=pl" oraz "?lang-en")

```

  <li class="nav-item">
    <a href="index.php?lang=pl" class="poland-flag">
      <img src="assets/images/poland.png" alt="">
    </a>
  </li>
  <li class="nav-item">
    <a href="index.php?lang=en" class="poland-flag">
      <img src="assets/images/united-kingdom.png" alt="">
    </a>
  </li>
  
```
