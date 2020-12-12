Alvene har ikke h�rt om passordprogrammer, s� de m� bruke passordhint for � huske p� passordene sine. De er ogs� litt slappe med sikkerheten, s� de har gjemt passordene sine i hintet.

F�lgende prosedyre bestemmer om et ord kan v�re et hint for passordet v�rt:

Vi starter med et mulig hint, for eksempel juletre og legger det p� f�rste rad:

```
juletre
```
Deretter gj�r vi f�lgende:

Kopier innholdet i siste rad, og fjern den f�rste bokstaven.

```
juletre
uletre
```
Dytt s� de resterende bokstavene ett hakk oppover i alfabetet (a -> b og z -> a).

```
juletre
vmfusf
```
Deretter, legg til alfabetplasseringen fra bokstaven over (a(0) + b(1) = b(1), b(1) + c(2) = d(3)):

```
juletre
egqylw  <-- v(21) + j(9) % 26 = e(4); m(12) + u(20) % 26 = g(6); f + l = q...
```
Vi fortsetter med prosedyren over helt til vi er tomme for bokstaver:

```
juletre
egqylw
lxpki
jnat
xou
mj
w
```
Et gyldig hint vil ha passordet i en av kolonnene (ikke n�dvendigvis hele kolonnen).

Passordet for eksempelet over kunne v�rt jeljxmw, ugxnoj, lqpau, eykt, tli, rw, e, eller en hvilken som helst substring av disse.

Hvilket av disse ordene er et hint for passordet eamqia?