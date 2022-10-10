# Funkcionális specifikáció

## Áttekintés

Szeretnénk egy olyan weblapot, ami el van látva regisztrációs, és bejelentkező felülettel. Az oldal tartalma csak bejelentkezés után legyen elérhető.
Az oldal témájának azt szeretnénk, hogy legyen képekkel és szöveggel ellátott kakukktojás keresés, ami frissítés, vagy kakukktojás ellenőrzés hatására véletlenszerűen új kakukktojás keresésre ad lehetőséget. A különböző feladványok csak akkor válnak elérhetővé, ha a felhasználó bejelentkezett a felületre, azután kap egy kakukktojásos feladatot, ha unatkozik, majd megoldás és ellenőrzés után a frissítés gombra kattintva egy újabb rejtvény válik számára elérhetővé.
Legalább 10 féle kakukktojás keresést szeretnénk látni az oldalon, 5 választható lehetőséggel, amiket megoldás után a rendszer le is ellenőriz, és kiírja, hogy helyes-e a megoldása a felhasználónak.

## Jelenlegi helyzet

Jelenleg a weboldalunk tech support oldalának legnagyobb problémája, hogy a felhasználók megunják a várakozást az alkalmazottaink válaszára.
Mivel jelenleg nem áll módunkban csökkenteni az alkalmazottaink reakció idejét, le kellene foglalni a felhasználókat annyi időre, amíg kollégáink végeznek a felhasználó előtt sorban várakozó ügyfelekkel, és segítséget tudnak nyújtani.
A jelenleg rendelkezésünkre álló adatok alapján a felhasználók maximum 1 percet hajlandóak várni.
Az alkalmazottaink átlagos reakció ideje kb. 6 perc, amit sajnos egy ideig még nem leszünk képesek csökkenteni.
A fenti információk alapján legalább 5 percre, ideálisan tovább lenne szükség a felhasználó figyelmét lekötni, annak érdekében, hogy sikeres legyen a tech support részleg, és ne legyen probléma a felhasználók elégedetlenségével a jövőben. 

## Követelménylista

K01 Könnyen üzemeltethető rendszer.
K02 Reszponzív, könnyen átlátható, stílusos dizájn.
K03 Bejelentkezés, regisztráció, kijelentkezés.
K04 Kakukktojás keresés, képekkel, szöveggel, rendezve.
K05 Kakukktojás eltalálásának ellenőrzése, új kakukktojás adás, véletlenszerűen, lehetőleg ismétlés nélkül.
K06 Navigációs menü, bejelentkezés, regisztráció, kijelentkezés, kakukktojás fülekkel, mindent az adott oldalhoz igazítva (A bejelentkezés oldalon ne legyen Bejelentkezés fül a navigációs sávban!)

## Jelenlegi üzleti folyamatok modellje

Jelenleg a felhassználók, amikor igénybe veszik a tech support szolgáltatását, nem várják meg az alkalmazottaink válaszát, ugyanis beleunnak a várakozásba, mert nincs mit csinálniuk az oldalon, amíg kollégánkra várnak.
Viszont amennyiben a felhasználó megvárja, amíg egy kollégánk válaszol, a visszejelzések alapján elégedett a felhasználó, de sajnos nem sokan hajlandóak kivárni a válaszidőt, hogy a problémájuk megoldásra találjon.
A tech support oldalunkon nincs mit csinálnia a felhasználónak, ami megnövelné a hajlandóságot a várakozásra, ezen próbálunk változtatni a kakukktojásos feladványrendszer bevezetésével.
A felhasználó bármilyen adat nélkül írhat a kollégáinknak, és 3-9 percen belül folyamatos beszélgetést tud folytatni, amíg a probléma vagy kérdés megoldásra nem kerül.

## Igényelt üzleti folyamatok modellje

A felhasználónak regisztrálni kell, és bejelentkezni, hogy belépés után tudjon segítséget kérni az egyik tech supportos kollégánktól..
A felhasználók üzenetei ezután visszanézhetőek lennének a kollégáinknak, több információval szolgálva ezzel nekik, tovább biztosítva a segítségnyújtás sikerességét, kényelmességét és gyorsaságát. Ez főleg visszatérő problémák esetén lesz hasznos, hiszen gyorsítja a folyamatot, amit a kollégáinknak rá kell fordítania egy-egy felhasználóra és a problémára.
Amíg egy felhasználó várakozik egy kolléga válaszára, lefoglalnánk pár kakukktojás feladattal, így növelve az érdeklődést afelé, hogy a felhasználók maradjanak, amíg nem kapnak választ a kérdésükre. Ezáltal, ha bármi problémájuk merülne fel, és esetleg rá lennének szorulva a várakozásra, nem hagynák ott az oldalt, hanem addig oldogatnák meg a feladványokat, amíg sorra nem kerülnek.

![kövspec_Igenyelt_uzleti_folyamatok_modellje_abra](https://user-images.githubusercontent.com/113984906/194935566-f181f8df-cdd5-49fa-8a0d-6f3be302fabe.jpg)

## Használati esetek

![funkspec_Használati_esetek](https://user-images.githubusercontent.com/113984906/194763933-94c18151-d1f6-4461-944a-606404b4a843.jpg)

## Képernyő tervek

![funkspec_Kepernyotervek](https://user-images.githubusercontent.com/113987404/194958899-0bb6f036-6449-40ad-9398-5ca1d747ab60.jpg)

## Forgatókönyv

A felhasználó megnyitja az oldalt, majd regisztrál. Regisztrációkor megadja a rendszernek az e-mail címét, a felhasználónevét és a jelszavát, amivel később azonosítani kívánja magát.
Ezek után átlép a bejelentkező oldalra, ahol a felhasználó be tud jelentkezni, onnan pedig automatikusan a főoldalra kerül. A főoldalról tud a navigációs menün belül választani, hogy mit is szeretne az oldalon csinálni.
Ha valami problémája van, akkor tud hibajelentést küldeni, vagy bármilyen, az oldallal kapcsolatos kérdést feltenni, amíg pedig várja a választ, átlép a kakukktojás menüpontra. Az oldalon feldob egy véletlenszerű feladványt, amit unalmában valószínűleg megold a felhasználó, majd ellenőrzés után megmondja az oldal, hogy jól választott-e. Ha továbbra sem reagáltak a kollégák, és a felhasználó unatkozik, akkor lefrissíti az oldalt, ami újabb kakukktojást dob fel, amit újból meg lehet oldani, majd leellenőrzi, és ezt folytatja, amíg csak akarja, vagy nem kap választ.

## Fogalomtár

