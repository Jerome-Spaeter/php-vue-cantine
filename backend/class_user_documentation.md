# Documentation sur la classe User et ses classes filles

## Structure

- User
  - Client
  - Admin
  - SuperAdmin

## Instanciation

Les parametres suivants sont exigés lors de l'instanciation d'un User.
**Veuillez à tout prix respecter l'ordre.**

Exemple:

```php
        $john = new Client(2, true, false, 'user', 3, 'John', 'Doe', 'M', 'JDoe', 'jdoe@orange.fr', '2021-08-05', '0123456789', '2 rue des marchands', 'paris', '111111');

        $jane = new Admin(1, true, false, 'user', 2, 'Jane', 'Duck', 'F', 'JDuck', 'jduck@id-formation.fr', '2021-07-02');
```

### Requis Client

#### Permissions Client (integer)

- $accountType (0: super admin, 1: admin, 2: client)

#### Administration Client (booléens)

- $validated (compte validé?)
- $deleted (compte supprimé?)

#### BDD Client

- $table (string) (nom de la table)
- $userId (integer) (id du compte dans la bdd)

#### Renseignements personnels Client (strings)

- $firstname (prénom)
- $surname (nom de famille)
- $gender (genre)
- $username (pseudo)
- $email
- $createdDate (date de création de compte) (format: YYYY-mm-dd)
- $tel (numéro de téléphone)
- $street (rue, numéro de maison)
- $city (ville)
- $zipcode (code postal)

### Requis Admin & SuperAdmin

#### Permissions Admin & SuperAdmin (integer)

- $accountType (0: super admin, 1: admin, 2: client)

#### BDD Admin & SuperAdmin

- $table (string) (nom de la table)
- $userId (integer) (id du compte dans la bdd)

#### Renseignements personnels Admin & SuperAdmin (strings)

- $firstname (prénom)
- $surname (nom de famille)
- $gender (genre)
- $username (pseudo)
- $email
- $createdDate (date de création de compte) (format: YYYY-mm-dd)
