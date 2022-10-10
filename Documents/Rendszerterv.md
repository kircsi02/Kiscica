# Rendszerterv

## A rendszer célja

A rendszer célja, hogy a felhasználó figyelmét lekössük annyi időre, míg a tech supportos kollégánk válaszolni tud a problémájára.
 Ez sajnos általában több időt vesz igénybe, mint amennyi időre mondjuk zenével vagy bármi hasonlóval le tudnánk kötni a felhasználó figyelmét, így jutottunk a kakukktojás ötletére.
  Adunk a user-nek egy feladványt, ami öt képből áll, abből kell kiválasztania egyet, ami kilóg a sorból.
   Ezután a rendszer leellenőrzi, hogy helyesen választott-e a képek közül kakukktojást, majd frissítést követően kaphat egy újabb feladványt, amit szintén megoldhat.
    Ezzel a cél, hogy minél tovább, ideálisan kb. 10 percre lekössük a felhasználó figyelmét, hogy a kollégánknak legyen ideje a többi user-rel foglalkozni, majd rövides időn belül eljusson az adott problémához, amire éppen várják a választ.

## Projektterv

Projektszerepkörök és felelősségeik:

- Jedlóczki László: fejlesztő, adminisztrátor
- Tóth Kíra Zsófia: adminisztrátor, fejlesztő
- Sánta András Attila: fejlesztő, adminisztrátor

Ütemterv:
| Funkció / Story | Feladat / Task | Becslés | Eltelt idő | Hátralévő idő |
| --- | --- | --- | --- | --- |
| Követelmény specifikáció |  | 12 | 12 | 0 |
| Funkcionális specifikáció |  | 12 | 12 | 0 |
| Rendszerterv |  | 16 | 12 | 4 |
| Adattárolás, Adatbázis | Adatmodell megtervezése, Adatbázis megvalósítása | 6 | 4 | 2 |
| Login felület | Logó készítése | 8 | 4 | 4 |
| Crud műveletek |  | 8 | 4 | 4 |

## Üzleti folyamatok modellje

Jelenleg a felhassználók, amikor igénybe veszik a tech support szolgáltatását, nem várják meg az alkalmazottaink válaszát, ugyanis beleunnak a várakozásba, mert nincs mit csinálniuk az oldalon, amíg kollégánkra várnak.
Viszont amennyiben a felhasználó megvárja, amíg egy kollégánk válaszol, a visszejelzések alapján elégedett a felhasználó, de sajnos nem sokan hajlandóak kivárni a válaszidőt, hogy a problémájuk megoldásra találjon.
A tech support oldalunkon nincs mit csinálnia a felhasználónak, ami megnövelné a hajlandóságot a várakozásra, ezen próbálunk változtatni a kakukktojásos feladványrendszer bevezetésével.
A felhasználó bármilyen adat nélkül írhat a kollégáinknak, és 3-9 percen belül folyamatos beszélgetést tud folytatni, amíg a probléma vagy kérdés megoldásra nem kerül.

A felhasználónak regisztrálni kell, és bejelentkezni, hogy belépés után tudjon segítséget kérni az egyik tech supportos kollégánktól..
A felhasználók üzenetei ezután visszanézhetőek lennének a kollégáinknak, több információval szolgálva ezzel nekik, tovább biztosítva a segítségnyújtás sikerességét, kényelmességét és gyorsaságát. Ez főleg visszatérő problémák esetén lesz hasznos, hiszen gyorsítja a folyamatot, amit a kollégáinknak rá kell fordítania egy-egy felhasználóra és a problémára.
Amíg egy felhasználó várakozik egy kolléga válaszára, lefoglalnánk pár kakukktojás feladattal, így növelve az érdeklődést afelé, hogy a felhasználók maradjanak, amíg nem kapnak választ a kérdésükre. Ezáltal, ha bármi problémájuk merülne fel, és esetleg rá lennének szorulva a várakozásra, nem hagynák ott az oldalt, hanem addig oldogatnák meg a feladványokat, amíg sorra nem kerülnek.

![kövspec_Igenyelt_uzleti_folyamatok_modellje_abra](https://user-images.githubusercontent.com/113984906/194935566-f181f8df-cdd5-49fa-8a0d-6f3be302fabe.jpg)

## Követelmények

Funkcionális követelmények:

A program adatbázisban tárolja a kakukktojásokat, kategória szerint elmentve. A felülethez csak belépés után lehet hozzáférni, amihez szükséges regisztrációkor megadni egy felhasználónevet, egy e-mail címet és egy jelszót, amik szintén adatbázisban lesznek eltárolva.
A kezelő felület webes kialakítású, amellyel kakukktojásokat tud generálni a felhasználó, majd ellenőrzés után újra és újra lefrissíteni azt, amivel újabb megolható kakukktojás válik elérhetővé, mindig más és más kakukktojásos feladattal előállva.

Menüpontok az oldalon:

- Kakukktojás
- Kijelentkezés

A kijelentkezés menüpontra kattintva a felhasználó kijelentkezik az oldalról, és csak újabb belépést követően tud hozzáférni az oldal tartalmához.

Nem funkcionális követelmények:

- gyors betöltési sebesség
- könnyen átlátható, letisztult és felhasználóbarát felület
- optimalizált működés

Törvényi előírások, szabványok:

- GDPR-nak való megfelelés
- Általános információk
- Szellemi tulajdon
- Használat
- Felelősségi szabályok
- Technikai követelmények
- Garancia és kártérítés
- mmxiii. évi V. törvény
- Európai Parlament és Tanács 2016. április 27-i (EU) 2016/679 Rendelete
- mmxi. évi CXII. törvény
- a szerzői jogról szóló 1999. évi LXXVI. törvény
- mmi. évi CVIII. törvény

## Funkcionális terv

Rendszerszereplők:

- Admin
- Felhasználó

Rendszerhasználati esetek és lefutásaik:

Admin:

- beléphet a rendszerbe
- változtathat saját jelszót
- változtathat saját e-mail címet
- megnézheti a beérkezett hibajelentéseket
- játszhat a kakukktojásos feladattal
- kijelentkezhet

Felhasználó:

- beléphet a rendszerbe
- változtathat saját jelszót
- változtathat saját e-mail címet
- hibajelentést adhat le
- játszhat a kakukktojásos feladattal
- kijelentkezhet

Menü-hierarchiák:

- Bejelentkezés
    - Probléma jelentés
    - Belépés
    - Regisztráció
- Bejelentkezve
    - Probléma jelentés
    - Cicás dolgok:
        - Kakukktojás keresés
    - Profil:
        - Jelszó váltás
        - E-mail váltás
        - Kijelentkezés

## Fizikai környezet

Az alkalmazás Android és webes platformra készül. Elsősorban böngészőben lehet megnyitni, Mozilla, Safari, Chrome és Opera böngészőkben működőképes. Nincsenek sem megvásárolt komponenseink, sem alkalmazáson belüli mikrotranzakciók.

Eszközök, amiket a fejlesztéshez használunk:

- Visual Studio Code
- Notepad
- GitKraken
- GitHub
- Trello
- Apache

## Absztrakt domain modell

A rendszert a felhasználó egy webes felületen érheti majd el, aminek az elkészítését PHP nyelven tervezzük. A felület lehetővé teszi, hogy a felhasználó egy felhasználónév és egy jelszó megadásával bejelentkezzen, majd a menüpontok segítségével eldöntheti, hogy pontosan mit is szeretne tenni az oldalon:

- adhat le hibajelentést
- játszhat kakukktojást
- kijelentkezhet

## Architekturális terv

A rendszer megfelelő működéséhez szükségünk lesz egy adatbázis szerverre, jelen esetben Apache-ot használunk erre a célra.
 A programunkat PHP segítségével fejlesztjük, ami össze lesz kötve egy adatbázissal, amibe mentjük a felhasználók adatait és a kakukktojásokat.

## Adatbázis terv

![rendszerterv_Adatbázisterv](https://user-images.githubusercontent.com/113984906/194764642-fbff4078-8bc5-47c9-94f5-bb19e0229a90.jpg)

## Implementációs terv

Web application:

A webes felület főként PHP és CSS nyelven fog készülni. A technológiákat amennyire lehet, külön-külön fájlokba szedve rendszerezzük, és úgy kapcsoljuk össze a nagyobb átláthatóság és a többszöri könnyebb felhasználhatóság érdekében. 

Database:

A tervezett szolgáltatást tekintve az adatbázis használata elengedhetetlen, így az adatok rögzítése abban fog megtörténni. Az átláthatóság és a későbbi felhasználhatóság érdekében külön adatbázisban lesznek a felhasználók adatai, a hibajelentések, amik felhasználókhoz vannak kötve, illetve a teljesen különállóan megtervezett kakukktojásos tábla. Ezek implementálásához és használatához az Apache rendszerét választottuk a megbízhatóság fényében.

## Tesztterv

A tesztelések célja a rendszer és a komponensei funkcionalitásának teljes vizsgálata, ellenőrzése, a rendszer által megvalósított üzleti szolgáltatások verifikálása.

Unit és Alfa teszt:

- Elsődleges célja az eddig meglévő funkciók különböző böngészőkkel való kompatibilitásának tesztelése folyamatosan, még a fejlesztés időtartama alatt. Ezt a tesztet a fejlesztők végzik, és az eljárás akkor sikeres, ha a különböző funkciók megfelelően működnek a különböző böngészőkben és operációs rendszereken. A teszt időtartama kb. egy hét.

Beta teszt:

- Ennek a tesztnek elsődleges célja a tesztelő felhasználók visszajelzései alapján a probléma vagy hiba kiküszöbölése. Ha hibát találnak a tesztelő felhasználók, a fejlesztők feladata a Beta teszt időszakában a lehető leghamarabb kijavítani azt. Eredetileh kb egy hét jut erre a tesztelési formára is, de ha túl sok hiba merül fel a teszt közben, akkor elhúzódhat plusz egy héttel. A tesztet nem a fejlesztők végzik, ettől függetlenül ki kell próbálni a programot lehetőség szerint Windows-on, Linux-on és MacOS-en egyaránt, valamint ezeken belül a lehető legtöbb böngészőben is, mint például Microsoft Edge-ben, Google Chrome-ban, Mozilla Firefox-ban, Safari-ban, illetve Opera-ban.

Tesztelendő funkciók:

Backend:

- Tudnia kell csatlakozni webes klienshez, mind Windows-on, Linux-on, MacOS-en és Android-on is.
- Képesnek kell lennie kiszolgálni egyszerre több klienst is.
- Tudnia kell feltölteni és lekérdezni az adatbázisból a szükséges adatokat.
- Minden felületen elérhető funkciókat is tudnia kell biztosítani a felhasználóknak.

## Telepítési terv

A webes alkalmazásra egyszerűen, egy ajánlott böngésző letöltésével (Firefox, Google Chrome, Safari, Microsoft Edge, Opera) és a weboldalunkat felkeresve tudnak a felhasználók majd felcsatlakozni internet hozzáférése mellett, íg külön szoftver vagy letöltés nem szükséges hozzá, csak egy ajánlott böngészőt kell telepíteni.

## Karbantartási terv

Az alkalmazás folyamatos üzemeltetése és karbantartása, mely
magában foglalja a programhibák elhárítását, a belső igények változása miatti módosításokat, valamint a környezeti feltételek változása miatt
megfogalmazott program-, illetve állomány módosítási igényeket. Ellenőrizni kell, hogy a jövőben kiadott Android verziókkal kompatibilis-e az alkalmazás. Idő elteltével új kategóriákat kell hozzáadni a játékhoz, hogy fent tartsuk az érdeklődési szintet.

![rendszerterv_Karbantartási_terv](https://user-images.githubusercontent.com/113984906/194938192-474571f1-04c3-4642-b90f-4296bb13ee16.jpg)

Karbantartás folyamata:

- Corrective Maintenance: A felhasználók által beküldött hibajelentésekben szereplő hibák kijavítása.
- Adaptive Maintenance: A program naprakészen tartása, finomhangolása.
- Perfective Maintenance: A szoftver hosszútávú működése érdekében végzett módosítások, mint például új funkciók, teljesítmény és megbízhatóság javítása.
- Preventive Maintenance: Olyan problémák elhárítása, kijavítása, amelyek még nem tűnnek fontosnak, de később komoly problémákat okozhatnak.

## Fogalomtár

database = adatbázis

user = felhasználó
login = Belépés