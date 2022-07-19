# Documentation sur la classe User et ses classes filles

## Structure

- User
  - Client
  - Admin
  - SuperAdmin

## Instanciation

Les parametres suivants sont exigés lors de l'instanciation d'un User. On passe forcément par l'une des classes filles donc n'oubliez pas de compléter avec leurs requis par la suite.

Exemple:

```php
$john = new Client(false, false, true, false, 'User', 3, 'John', 'Doe', 'M', 'JDoe', 'jdoe@orange.fr', '2021-08-05');
```

### Requis User

#### Permissions (booléens)

- $isAdmin (compte admin?)
- $isSuperAdmin (compte super admin?)

#### Administration (booléens)

- $validated (compte validé?)
- $deleted (compte supprimé?)

#### BDD

- $table (string) (nom de la table)
- $userId (integer) (id du compte dans la bdd)

#### Informations sur l'utilisateur (strings)

- $firstname (prénom)
- $surname (nom de famille)
- $gender (genre)
- $username (pseudo)
- $email
- $createdDate (date de création de compte) (format: YYYY-mm-dd)

### Requis Client

#### Informations sur le Client (strings)

- $tel (numéro de téléphone)
- $street (rue, numéro de maison)
- $city (ville)
- $zipcode (code postal)
