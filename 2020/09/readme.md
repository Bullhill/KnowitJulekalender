I eit fors�k p� � stanse spreiinga av Tuborg-viruset har Julenissen bestemt at alle alvar skal halde seg innanfor kvart sit oppteikna kvadrat til smitta stoppar opp. Diverre er kvadrata litt for sm�, slik at viruset likevel kan smitte om ein er s� uheldig at ein har minst to naboar (i horisontal og vertikal retning) som sj�lv er sjuke. Om ein blir smitta, er ein sj�lv ikkje smittsam f�r neste dag. I denne fila ser vi oversikta over dei friske (f) og sjuke (s) alvane. Kor mange dagar g�r det f�r smitta stansar opp?

Eksempel
Vi startar med alvane som vist under.

```
FFFSF  
FSFFF  
FSFSF  
SFFSF  
FSFFF 
```
Alle alvane som har to eller fleire tilst�tande sjuke naboar blir sj�lv sjuke og smittsame dagen derp�:

```
FFFSF
FSFSF
SSSSF
SSFSF
SSFFF
```
Og s� vidare ...

```
FFFSF
SSSSF
SSSSF
SSSSF
SSFFF
```

```
FFSSF
SSSSF
SSSSF
SSSSF
SSSFF
```

```
FSSSF
SSSSF
SSSSF
SSSSF
SSSSF
```
Til slutt endar vi i ein tilstand der ingen fleire kan blir smitta:

```
SSSSF
SSSSF
SSSSF
SSSSF
SSSSF
```

Dette tek 6 dagar, som d� blir svaret for dette eksempelet.