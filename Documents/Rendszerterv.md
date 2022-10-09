# Rendszerterv

## A rendszer célja



## Projektterv



## Üzleti folyamatok modellje

Jelenleg a felhassználók, amikor igénybe veszik a tech support szolgáltatását, nem várják meg az alkalmazottaink válaszát, ugyanis beleunnak a várakozásba, mert nincs mit csinálniuk az oldalon, amíg kollégánkra várnak.
Viszont amennyiben a felhasználó megvárja, amíg egy kollégánk válaszol, a visszejelzések alapján elégedett a felhasználó, de sajnos nem sokan hajlandóak kivárni a válaszidőt, hogy a problémájuk megoldásra találjon.
A tech support oldalunkon nincs mit csinálnia a felhasználónak, ami megnövelné a hajlandóságot a várakozásra, ezen próbálunk változtatni a kakukktojásos feladványrendszer bevezetésével.
A felhasználó bármilyen adat nélkül írhat a kollégáinknak, és 3-9 percen belül folyamatos beszélgetést tud folytatni, amíg a probléma vagy kérdés megoldásra nem kerül.

A felhasználónak regisztrálni kell, és bejelentkezni, hogy belépés után tudjon segítséget kérni az egyik tech supportos kollégánktól..
A felhasználók üzenetei ezután visszanézhetőek lennének a kollégáinknak, több információval szolgálva ezzel nekik, tovább biztosítva a segítségnyújtás sikerességét, kényelmességét és gyorsaságát. Ez főleg visszatérő problémák esetén lesz hasznos, hiszen gyorsítja a folyamatot, amit a kollégáinknak rá kell fordítania egy-egy felhasználóra és a problémára.
Amíg egy felhasználó várakozik egy kolléga válaszára, lefoglalnánk pár kakukktojás feladattal, így növelve az érdeklődést afelé, hogy a felhasználók maradjanak, amíg nem kapnak választ a kérdésükre. Ezáltal, ha bármi problémájuk merülne fel, és esetleg rá lennének szorulva a várakozásra, nem hagynák ott az oldalt, hanem addig oldogatnák meg a feladványokat, amíg sorra nem kerülnek.

## Követelmények



## Funkcionális terv



## Fizikai környezet



## Absztrakt domain modell

A rendszert a felhasználó egy webes felületen érheti majd el, aminek az elkészítését PHP nyelven tervezzük. A felület lehetővé teszi, hogy a felhasználó egy felhasználónév és egy jelszó megadásával bejelentkezzen, majd a menüpontok segítségével eldöntheti, hogy pontosan mit is szeretne tenni az oldalon:

- adhat le hibajelentést
- játszhat kakukktojást
- kijelentkezhet

## Architekturális terv



## Adatbázis terv

![rendszerterv_Adatbázisterv](https://user-images.githubusercontent.com/113984906/194764642-fbff4078-8bc5-47c9-94f5-bb19e0229a90.jpg)

## Implementációs terv



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



## Karbantartási terv



## Fogalomtár
