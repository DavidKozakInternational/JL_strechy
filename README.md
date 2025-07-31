# JL Střechy Web

Oficiální webová prezentace společnosti **DAVID KOZÁK INTERNATIONAL S.R.O.**

## Obsah
- Skleněný hero footer s logem a kontakty
- Dark/Light režim s přepínáním
- Galerie a služby
- Kontaktní formulář napojený na databázi (PHP + MySQL)

## Struktura projektu
```
JL_STRECHY/
├── index.html
├── style/
│   └── css.css
├── images/
│   └── ... (logo, galerie)
├── images/social_footer/
│   └── ikony sociálních sítí
├── form-handler.php
└── README.md
```

## Databáze (MySQL)
```sql
CREATE TABLE formular (
  id INT AUTO_INCREMENT PRIMARY KEY,
  jmeno VARCHAR(100),
  email VARCHAR(100),
  zprava TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Deployment
Tento projekt můžeš spustit:
- Lokálně pomocí [XAMPP](https://www.apachefriends.org/)
- Online přes PHP hosting
- Jako statický web (bez formuláře) na [GitHub Pages](https://pages.github.com/)

> Pro plnou funkcionalitu formuláře (form-handler.php) je potřeba PHP server a MySQL databáze.

## Autoři
- Design, implementace: [David Kozák International s.r.o.](https://david-kozak.com)
- GitHub správa: připraveno pro nahrání pod veřejný nebo soukromý repozitář
