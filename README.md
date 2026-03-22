🎮 GameHub

GameHub è una piattaforma web progettata per videogiocatori, che combina funzionalità di social network con strumenti di game tracking per titoli competitivi come Valorant e Call of Duty.

L’obiettivo del progetto è creare una community dove gli utenti possono condividere contenuti, monitorare le proprie statistiche di gioco e interagire con altri player.

🚀 Tecnologie utilizzate
Backend: Laravel (PHP)
Frontend: Blade (Laravel templating)
Database: MySQL (gestito tramite MAMP / phpMyAdmin)
Autenticazione: Laravel Fortify
Build tool: Vite
Styling: Tailwind CSS (opzionale / in sviluppo)
📌 Funzionalità principali
👤 Autenticazione utenti
Registrazione
Login / Logout
Recupero password
Verifica email
Autenticazione a due fattori (2FA)
📰 Social Feed (in sviluppo)
Creazione post
Visualizzazione feed utenti
Relazioni tra utenti e contenuti
🎯 Game Tracker (in sviluppo)
Collegamento account di gioco
Monitoraggio statistiche (es. K/D, rank, match history)
Supporto iniziale:
Valorant
Call of Duty
🧠 Architettura del progetto

Il progetto utilizza un approccio MVC (Model-View-Controller):

Models → gestione dati (User, Post, Game)
Views (Blade) → rendering lato server
Controllers → logica applicativa

Database relazionale utilizzato per garantire:

integrità dei dati
gestione delle relazioni (es. utenti → post → giochi)
⚙️ Installazione
1. Clona il repository
git clone https://github.com/FrancescoGess/gamehub.git
cd gamehub
2. Installa le dipendenze
composer install
npm install
3. Configura l’ambiente

Copia il file .env:

cp .env.example .env

Configura il database:

DB_DATABASE=gamehub
DB_USERNAME=root
DB_PASSWORD=root
DB_PORT=8889
4. Genera la chiave
php artisan key:generate
5. Migrazioni database
php artisan migrate
6. Avvia il progetto
php artisan serve
npm run dev

Visita:

http://127.0.0.1:8000
🧹 Struttura principale
app/
 ├── Models/
 ├── Http/
 │   ├── Controllers/
 │   └── Middleware/
resources/
 ├── views/ (Blade)
routes/
 └── web.php
database/
 └── migrations/
🔧 Stato del progetto
Feature	Stato
Autenticazione	✅ Completa
Blade UI	✅ Completa
Social system	🚧 In sviluppo
Game tracker	🚧 In sviluppo
🎯 Roadmap

Sistema post completo

API per integrazione giochi

Profilo utente avanzato

Sistema follow/amici

UI migliorata (Tailwind completo)

Notifiche in tempo reale

🤝 Contributi

I contributi sono benvenuti!
Apri una issue o una pull request per proporre miglioramenti.

📄 Licenza

Questo progetto è open-source e distribuito sotto licenza MIT.

👨‍💻 Autore

Sviluppato da GessLab
Progetto personale per apprendimento e sviluppo full-stack.