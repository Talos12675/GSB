# GSB - Application Laravel

## Installation

1. Cloner le repository
2. Installer les dépendances PHP : `composer install`
3. Installer les dépendances Node.js : `npm install`
4. Copier le fichier .env.example vers .env et configurer la base de données
5. Générer la clé d'application : `php artisan key:generate`
6. Exécuter les migrations : `php artisan migrate`
7. (Optionnel) Lancer les seeders : `php artisan db:seed`

## Développement

### Compilation des assets

Pour le développement avec rechargement automatique :
```bash
npm run dev
```

Cela lance Vite en mode développement avec hot module replacement (HMR) sur `http://localhost:3000`.

### Construction pour la production

```bash
npm run build
```

### Surveillance des changements

```bash
npm run watch
```

### Aperçu de la construction

```bash
npm run preview
```

## Structure des assets

- `resources/css/app.scss` : Fichier SCSS principal avec Tailwind CSS
- `resources/css/variables.scss` : Variables SCSS globales
- `resources/js/app.js` : Point d'entrée JavaScript
- `resources/js/bootstrap.js` : Configuration Axios

## Fonctionnalités

- Authentification visiteur (matricule + année d'embauche)
- Gestion des rapports de visite
- Consultation des praticiens
- Consultation des médicaments
- Interface responsive avec Bootstrap 5 et Tailwind CSS

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
