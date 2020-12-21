Oppdatering kl 11:35 - Vi hadde en feil i input hvor en alv lå under flere ledere. Dette er nå fikset. Svaret er det samme.

Jula er et stort prosjekt for Julenissen og alvene hans. I år vil de være ekstra forberedt, så de forbereder seg på å organisere prosjektet sitt i en effektiv trestruktur uten alt for mye julebyråkrati.

I denne filen ligger oversikten over alle alvene. Hver alv har en egen linje i filen, med alle sine overordnede først og navnet til alven selv på slutten, separert med ??. Julenissen er såklart den implisitte lederen på topp. Under seg har han alver. Alver som igjen har undersåtter er mellomledere og de resterende er arbeideralver. Alle alver er altså enten mellomledere eller arbeidere.

Dessverre har noen alver sluttet eller pensjonert seg siden i fjor og Julenissen har ikke klart å oppdatere hele oversikten. Linjene tilhørende de manglende alvene er slettet, men referanser til alvene henger likevel igjen i andre alver sine linjer. Videre vil Julenissen trimme litt av fettet i organisasjonen for å eliminere unødvendig byråkrati.

Vi gjør følgende grep:

Der mellomledere mangler fra listen blir den manglende mellomlederen sine undersåtter lagt under nærmeste eksisterende mellomleder oppover i treet.
Alle mellomledere med kun én direkte undersått som også er mellomleder får sparken. Undersåtten blir så flyttet opp ett hakk i organisasjonen.
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

ser vi at linjen Hades??Nyx??Zagreus sier at Zagreus skal ligge under Nyx, men Hades??Nyx er ikke å finne i listen. Nyx har altså sluttet eller blitt pensjonert, så hennes undersått Zagreus blir underlagt Hades.

Icarus har kun én undersått, Poseidon, som også er en mellomleder. Icarus er dermed overflødig, og får sparken. Poseidon underlegges Athena.

Etter opprydding og omorganisering ser organisasjonskartet slik ut: Julenissen -> [Athena -> [Orpheus, Poseidon -> [Cerberus]], Demeter, Hades -> [Hypnos, Zagreus -> [Medusa]]]

Nå er arbeideralvene Cerberus, Orpheus, Demeter, Hypnos og Medusa mens mellomlederalvene er Athena, Hades, Poseidon og Zagreus. Svaret for eksempelet blir da 5 - 4 = 1.


