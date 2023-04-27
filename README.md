# ABAR projekt fejlesztői dokumentáció

## Kedves fejlesztő!
A kód, amit vizsgálsz a Szegedi Tudományegyetem Adatbázisalapú Rendszerek
kurzusának követelménye, a részletes dokumentáció és fejlesztési terv külön
úton lett beadva, jelen cikkben a lokális beüzemeléshez kapsz rövid leírást.
## Telepítés
### A rendszer követelményei:
- PHP, mely 8.1-nél ne legyen alacsonyabb szinten. Néhány rendszeren a php81 
parancsnak felel meg ez a verziószám, itt a továbbiakban a php megnevezést 
viseli.


- Git, mely windows rendszeren elérhető a Git Bash és a Github Desktop
alakalmazásokon keresztül. Linuxos telepítéshez keresd fel a csomagkezelőd
lehetőségeit!


- [Composer](http://www.getcomposer.org), mely a fent említett php-val fut.


- A projekt nagyjából 32 MB ramot fog lefoglalni a php számára, a php.ini 
fájlban általában minden telepítés nagyobbra állítja a határt.


- SSH parancssori program, szakadozós internetkapcsolattal ajánlott a
Bitvise Tunnelier-jét használni, mely grafikus felhasználói interfésszel bír.
Amennyiben az irinyi kabinet gépeire rakod fel a weboldalt, nem lesz szükséged
ssh bejelentkezésre.

### Beüzemelés, futtatás

Állítsd be a projektmappa jogosultságait a php számára.

Készíts oracle 12c adatbázis szervert, vagy biztosíts elérést a kabinetes
szerverhez.

A kabinetben elérjük az orania2.inf.u-szeged.hu 1521-es portját, így ezzel
nem kell bajlódni.

Távolról használhatjuk a parancssori parancsot, mely a következőképpen 
futtatható:

**Powershell-ben:**
> $x = ssh -f -N -L 49159:orania2.inf.u-szeged.hu:1521 login@linux.inf.u-szeged.hu

Amíg dolgozol, nyugodtan hagyd futni a programot.
Ctrl+ C-vel tudsz kilépni.

**Linux terminálban:**
> ssh -f -N -L 49159:orania2.inf.u-szeged.hu:1521 login@linux.inf.u-szeged.hu

A futás a háttérben történik, a top parancssori programban találod meg, és a
K billentyű leütésével, majd az ssh PID-jának megadásával tudod leállítani.

A Bitvise Tunnelier-jének használata egyszerű, legyél biztos benne, hogy
    ezeket beállítottad:

<table><tr><td>Login</td><td>Options</td>
<th style="border-bottom: 4px solid blue">C2S</th></tr>
<tr><td colspan="3"><div style="padding:1em"><table>
<tr><td></td><td>Listen interface</td><td>Port</td>
<td>Destination host</td><td>Port</td></tr><tr><td>
<label><input type=checkbox></label></td><td>127.0.0.1</td>
<td>49159</td><td>orania2.inf.u-szeged.hu</td>
<td>1521</td></tr></table></div></td></tr></table>

A projekt gyökérkönyvtárában találod az artisan-t, a composer fájlokat
és a .env.example fájlt, amely egy a .env fájl létrehozására, hozd létre
a fájl-t, majd állítsd be a szükséges paramétereket(a DB blokkot).

Az APP_KEY generálásához használd a `php artisan key:generate` parancsot, majd
az adatbázis telepítéséhez a `php artisan migrate:fresh` parancsot.

