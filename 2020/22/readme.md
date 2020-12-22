Denne filen best�r av linjer der det f�rst er en streng best�ende av et tilfeldig antall bokstaver, etterfulgt av en liste med navn.

Vi vil se hvor mange navn fra listen med navn som kan staves med bokstavene fra strengen. Reglene for staving er som f�lger:

Vi g�r gjennom navnene i den rekkef�lgen de st�r i. Hvis vi ikke har bokstavene til � stave et navn, g�r vi videre til neste navn.
Man kan kun bruke bokstaver �n gang, s� hvis vi f�r stavet et helt navn, m� vi fjerne de bokstavene vi bruker fra strengen. Merk at det kan eksistere flere av samme bokstav i strengen, og vi skal ikke fjerne duplikatene til en bokstav vi bruker.
N�r vi skal stave et navn, m� bokstavene vi bruker v�re i samme rekkef�lge i strengen som de er i navnet.
N�r vi fjerner brukte bokstaver fjerner vi alltid den f�rste mulige kandidaten.
Vi skiller ikke p� store og sm� bokstaver.
Eksempel
```
 llmnmgimnaaiechhchajghefgjkudri [Michael, Guri, Aksel]
```
Michael kan ikke staves selv om alle bokstavene er der fordi bokstavene [m, i, c, h, a, e, l] ikke finnes i rekkef�le i strengen. Vi fjerner Michael fra navnelisten, men ingen bokstaver fra strengen. 0 navn stavet.
```
 llmnmgimnaaiechhchajghefgjkudri [Guri, Aksel]
      ^                     ^ ^^
```
Guri kan staves, s� vi fjerner Guri fra navnelisten og korresponderende bokstaver fra strengen.
```
 llmnmimnaaiechhchajghefgjkd [Aksel]
```
Aksel kan ikke staves fordi ikke alle bokstavene er i strengen -> Antall navn = 1 for denne linjen.

P� hvilken linje (null-indeksert) er det mulig � stave flest navn gitt disse reglene?