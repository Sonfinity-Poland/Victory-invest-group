# Victory Invest Group

<a href="https://sonfinity-poland.github.io/Victory-invest-group/">See demo</a>

#1.

- Index.html zmieniasz na index.php, następnie w tym pliku na samej górze przed znacznikiem <html> dodajesz
 ```
  <?php
    include "config.php"
  ?>
```
- W głównym folderze tworzysz plik config.php
``` <?php
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

- W folderze assets tworzysz folder "lang". Następnie tworzysz w nim 2 pliki -> pl.php i en.php

```
  <?php
    $lang = array();
    
    $lang["NAZWA_ZMIENNEJ"] = "TREŚC ZMIENNEJ";
np. $lang["navbar_homepage"] = "STRONA GŁÓWNA";
```

