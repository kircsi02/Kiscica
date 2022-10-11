# Tesztjegyzőkönyv

A tesztelés első lépése a megfelelő fájlok végigellenőrzése, elérési útjaik és egyikből a másikba való átugrási lépéseik voltak. Mivel ezek megfelelően működtek, csak apróbb, szintaktikai hibákat kellett javítani.

A következő lépés az volt, hogy megnyitottuk a weblapot mindenki a saját számítógépén, laptopján és ellenőriztük, hogy csak bejelentkezés után elérhetőek-e az oldalak, a mezők mindegyikét ki-e kell tölteni, ami kötelező és hogy a jogosultságok csak a nekik megfelelő oldalakat érik el (pl.: a hibajelentéseket csak az admin látja összesítve).

Ez után a kakukktojások ellenőrzése következett. Ellenőriztük, hogy a randomizáló megfelelően működik és véletlenszerű feladványt ad a felhasználónak, valamint hogy ha rossz választ adunk neki, akkor ne dobjon vissza jó választ, illetve fordítva.