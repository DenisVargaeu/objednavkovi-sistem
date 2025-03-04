# Objednávkový systém

Tento projekt je webová aplikácia určená na spravovanie objednávok pre reštaurácie alebo podobné podniky. Cieľom aplikácie je umožniť zákazníkom vytvárať objednávky, ktoré sa následne spracujú v kuchyni a po dokončení sa uložia do systému pre neskoršie spracovanie a analýzu.

## Funkcie

- **Vytváranie objednávok:** Zákazníci môžu prostredníctvom aplikácie vytvárať objednávky, kde si vyberú požiadavky na jedlá alebo nápoje.
- **Správa objednávok:** Personál môže zobraziť všetky objednávky, upravovať ich a označiť ako spracované. 
- **Spracovanie objednávok v kuchyni:** Po vytvorení objednávky personál v kuchyni spracuje požiadavky a označí ich ako hotové.
- **Ukladanie objednávok:** Po spracovaní sa všetky objednávky ukladajú do databázy, čím je možné ich neskôr analyzovať alebo prezerať históriu objednávok.

## Technológie

- **Frontend:**
  - HTML5
  - CSS3 (s využitím štýlovacieho súboru `style3.css`)
  - JavaScript (pre interaktivitu)
- **Backend:**
  - PHP (pre serverovú logiku)
  - MySQL (pre ukladanie údajov o objednávkach)
- **Hosting:** Webglobe

## Inštalácia

1. Klonujte repozitár:
   ```bash
   git clone https://github.com/denis/objednavkovy-system.git
   ```
2. Nastavte databázový server podľa vašich požiadaviek.
   - Pre pripojenie k databáze použite svoje vlastné prihlasovacie údaje.
3. Nahrajte súbory na server cez FTP alebo použite hostingové nástroje.
4. Nakonfigurujte PHP a databázu podľa vašich požiadaviek.

## Použitie

Po spustení aplikácie:

1. **Zákazník:** Môže vytvoriť objednávku prostredníctvom formulára na webovej stránke, kde vyberie jedlá alebo nápoje.
2. **Personál:** Objednávky sa zobrazia v zozname v systéme, kde ich personál môže spravovať.
3. **Kuchyňa:** Po prijatí objednávky personál v kuchyni začne spracovávať objednávky a označí ich ako "hotové" v systéme.
4. **Uloženie:** Po dokončení sa objednávka uloží do databázy pre neskoršie spracovanie a analýzu.

## Prispievanie

Ak máte nápady na vylepšenia alebo chcete prispieť do projektu, môžete vytvoriť pull request alebo pridať issue s popisom problému.

## License

Tento projekt je licencovaný pod MIT licenciou - pozri LICENSE.md pre viac informácií.
