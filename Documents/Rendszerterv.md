# Rendszerterv

## A rendszer célja



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



## Architekturális terv



## Adatbázis terv

![rendszerterv_Adatbázisterv](https://user-images.githubusercontent.com/113984906/194764642-fbff4078-8bc5-47c9-94f5-bb19e0229a90.jpg)

## Implementációs terv



## Tesztterv



## Telepítési terv



## Karbantartási terv



## Fogalomtár
