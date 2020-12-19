Frem til desember er det veldig lite for nissens alver � gj�re. For � f� tiden til � g� pleier de derfor � leke forskjellige leker. I 2020 har favoritten v�rt stolleken. I denne filen har de notert seg startposisjonene til alle alvene, antall steg hver alv tar til h�yre hver runde og hvilken regel som bestemmer hvordan stoler fjernes.

F�rste tallet angir alts� hvilken regel som brukes for � eliminere stoler. Tallet etter angir hvor mange steg alvene beveger seg mot h�yre f�r neste stol blir tatt vekk. Deretter en liste med alver i den rekkef�lgen de st�r. De st�r i sirkel, s� f�rste alven st�r til h�yre for den siste alven. En linje kan se slik ut:

```
 1 3 [Jenny, Alvin, Greger, Petra, Olaug, Olaf] 
```
Reglene som det f�rste tallet viser til kan v�re fra fra og med 1 til og med 4, og reglene er som f�lger:

Alltid fjern den f�rste stolen i listen.
Begynn med � fjerne stolen p� plass 0, deretter p� plass 1, og oppover, frem til man n�r antall stoler (som fortsatt er i spill), deretter begynner man p� f�rste stol igjen.
Fjern den midterste stolen. Dersom antall stoler er partall, fjernes de to stolene som er i midten, frem til det er 2 stoler igjen, da fjernes den f�rste stolen.
Alltid fjern den siste stolen i listen
Hver alv korresponderer til en stol, og etter at alvene har tatt de angitte stegene mot h�yre fjernes alvene som st�r p� plasser der stoler ble fjernet.

Vinneren er den som st�r igjen n�r alle bortsett fra en alv har r�ket ut.

Eksempler
Regel 1
```
 1 3 [Jenny, Alvin, Greger, Petra, Olaug, Olaf] 
 Gjennomf�ring:
 1. [Jenny, Alvin, Greger, Petra, Olaug, Olaf] -> [Petra, Olaug, Olaf, Jenny, Alvin, Greger] Petra ryker ut
 --
 2. [Olaug, Olaf, Jenny, Alvin, Greger] -> [Jenny, Alvin, Greger, Olaug, Olaf] Jenny ryker ut
 --
 3. [Alvin, Greger, Olaug, Olaf] -> [Greger, Olaug, Olaf, Alvin] Greger ryker ut
 --
 4. [Olaug, Olaf, Alvin] -> [Olaug, Olaf, Alvin] Olaug ryker ut
 --
 5. [Olaf, Alvin] -> [Alvin, Olaf] Alvin ryker ut
 --
 6. [Olaf] Olaf vinner
```

Regel 2
```
 2 3 [Jenny, Alvin, Greger, Petra, Olaug, Olaf]
 Gjennomf�ring:
 1. [Jenny, Alvin, Greger, Petra, Olaug, Olaf] -> [Petra, Olaug, Olaf, Jenny, Alvin, Greger] [0]Petra ryker ut
 --
 2. [Olaug, Olaf, Jenny, Alvin, Greger] -> [Jenny, Alvin, Greger, Olaug, Olaf] [1]Alvin ryker ut
 --
 3. [Jenny, Greger, Olaug, Olaf] -> [Greger, Olaug, Olaf, Jenny] [2]Olaf Ryker ut
 --
 4. [Greger, Olaug, Jenny] -> [Greger, Olaug, Jenny] [0]Greger ryker ut
 --
 5. [Olaug, Jenny] -> [Jenny, Olaug] [1]Olaug ryker ut
 --
 6. [Jenny] Jenny vinner
```

Regel 3
```
 3 3 [Jenny, Alvin, Greger, Petra, Olaug]
 Gjennomf�ring:
 1. [Jenny, Alvin, Greger, Petra, Olaug] -> [Greger, Petra, Olaug, Jenny, Alvin] [2] Olaug ryker ut
 --
 2. [Greger, Petra, Jenny, Alvin] -> [Petra, Jenny, Alvin, Greger] [1][2] Jenny og Alvin ryker ut
 --
 3. [Petra, Greger] -> [Greger, Petra] [0] Greger ryker ut
 --
 4. [Petra] Petra vinner
```

Regel 4
```
 4 3 [Jenny, Alvin, Greger, Petra, Olaug, Olaf]
 Gjennomf�ring:
 1. [Jenny, Alvin, Greger, Petra, Olaug, Olaf] -> [Petra, Olaug, Olaf, Jenny, Alvin, Greger] [5] Greger ryker ut
 --
 2. [Petra, Olaug, Olaf, Jenny, Alvin] -> [Olaf, Jenny, Alvin, Petra, Olaug] [4] Olaug ryker ut
 --
 3. [Olaf, Jenny, Alvin, Petra] -> [Jenny, Alvin, Petra, Olaf] [3] Olaf ryker ut
 --
 4. [Jenny, Alvin, Petra] -> [Jenny, Alvin, Petra] [2] Petra ryker ut
 --
 5. [Jenny, Alvin] -> [Alvin, Jenny] [1] Jenny ryker ut
 --
 6. [Alvin] Alvin vinner
```

Hva er navnet p� alven som har vunnet stolleken flest ganger i 2020?