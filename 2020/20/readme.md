Oppdatering kl 11:35 - Vi hadde en feil i input hvor en alv l� under flere ledere. Dette er n� fikset. Svaret er det samme.

Jula er et stort prosjekt for Julenissen og alvene hans. I �r vil de v�re ekstra forberedt, s� de forbereder seg p� � organisere prosjektet sitt i en effektiv trestruktur uten alt for mye julebyr�krati.

I denne filen ligger oversikten over alle alvene. Hver alv har en egen linje i filen, med alle sine overordnede f�rst og navnet til alven selv p� slutten, separert med ??. Julenissen er s�klart den implisitte lederen p� topp. Under seg har han alver. Alver som igjen har unders�tter er mellomledere og de resterende er arbeideralver. Alle alver er alts� enten mellomledere eller arbeidere.

Dessverre har noen alver sluttet eller pensjonert seg siden i fjor og Julenissen har ikke klart � oppdatere hele oversikten. Linjene tilh�rende de manglende alvene er slettet, men referanser til alvene henger likevel igjen i andre alver sine linjer. Videre vil Julenissen trimme litt av fettet i organisasjonen for � eliminere un�dvendig byr�krati.

Vi gj�r f�lgende grep:

Der mellomledere mangler fra listen blir den manglende mellomlederen sine unders�tter lagt under n�rmeste eksisterende mellomleder oppover i treet.
Alle mellomledere med kun �n direkte unders�tt som ogs� er mellomleder f�r sparken. Unders�tten blir s� flyttet opp ett hakk i organisasjonen.
Etter reorganiseringen, hvor mange flere arbeideralver er det enn mellomledere?

Eksempel:
Gitt en liste med alver som dette:

```
Athena
Demeter
Hades
Hades??Hypnos
Athena??Icarus
Hades??Nyx??Zagreus??Medusa
Athena??Orpheus
Athena??Icarus??Poseidon??Cerberus
Hades??Nyx??Zagreus
Athena??Icarus??Poseidon
```

ser vi at linjen Hades??Nyx??Zagreus sier at Zagreus skal ligge under Nyx, men Hades??Nyx er ikke � finne i listen. Nyx har alts� sluttet eller blitt pensjonert, s� hennes unders�tt Zagreus blir underlagt Hades.

Icarus har kun �n unders�tt, Poseidon, som ogs� er en mellomleder. Icarus er dermed overfl�dig, og f�r sparken. Poseidon underlegges Athena.

Etter opprydding og omorganisering ser organisasjonskartet slik ut: Julenissen -> [Athena -> [Orpheus, Poseidon -> [Cerberus]], Demeter, Hades -> [Hypnos, Zagreus -> [Medusa]]]

N� er arbeideralvene Cerberus, Orpheus, Demeter, Hypnos og Medusa mens mellomlederalvene er Athena, Hades, Poseidon og Zagreus. Svaret for eksempelet blir da 5 - 4 = 1.


