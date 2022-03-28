# homework-PayWay

http://payway.bubileg.cz/home

Zadání:
Ukázku komunikace s mou PayWay demo platební bránou.

Ověření podpisu zprávy ze serveru

Poslat zprávu echo, kterou server akceptuje a odpoví bez chybové hlášky.

Screenshoty ukázky komunikace

![1](https://user-images.githubusercontent.com/59620950/160492509-48f407e0-6c6e-4d98-b984-ab45d46d95ca.png)

Zde na obrázku můžeme vidět úplně nahoře sepsaný oficiální "podpis". Pod ním jsem jenom dal var_dump daný podpis, který jsme museli nakonec ještě "prohnat" příkazem BASE64_ENCODE. Ve výsledku je var_dump jsem zakomentoval /**/.

Dole nám příkaz openssl_verify() vypsal 1, tím pádem true a je tedy všechno správně.
