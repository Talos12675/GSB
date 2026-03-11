# Commandes pour démarrer le projet Laravel GSB

## 1. Exécuter les migrations de base de données
php artisan migrate

## 2. Exécuter les seeders pour remplir la base de données
php artisan db:seed

## 3. Compiler les assets (SCSS/CSS/JS) avec Vite
npm run build
npm run dev

## 4. Démarrer le serveur de développement Laravel
php artisan serve

## Commandes supplémentaires utiles

# Vider le cache de configuration
php artisan config:clear

# Vider le cache des vues
php artisan view:clear

# Vider le cache des routes
php artisan route:clear

# Créer un lien symbolique pour le stockage (si nécessaire)
php artisan storage:link

# Vérifier les migrations en attente
php artisan migrate:status

# Rollback des migrations (si nécessaire)
php artisan migrate:rollback