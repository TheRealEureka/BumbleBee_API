# Bumble🐝 API

API pour le projet [Bumble🐝](https://github.com/TheRealEureka/BumbleBee)

Endpoints : 
    
## User
### GET /user
Retourne les informations de tout les utilisateurs
### GET /user/:id
Retourne les informations de l'utilisateur avec l'id `:id`
### GET /user/:id/party
Retourne les informations des parties de l'utilisateur avec l'id `:id`
### POST /user
Créer un utilisateur
### POST /user/:id/flower
Ajoute une fleur à l'utilisateur avec l'id `:id`
### POST /user/:id/party
Ajoute une partie à l'utilisateur avec l'id `:id`
### PATCH /user/:id
Modifie les informations de l'utilisateur avec l'id `:id`
### PATCH /user/:id/flower
Modifie les informations d'une fleur de l'utilisateur avec l'id `:id`
### PATCH /user/:id/party
Modifie les informations d'une partie de l'utilisateur avec l'id `:id`
### DELETE /user/:id
Supprime l'utilisateur avec l'id `:id`
### DELETE /user/:id/flower
Supprime une fleur de l'utilisateur avec l'id `:id`
### DELETE /user/:id/party
Supprime une partie de l'utilisateur avec l'id `:id`

## Flower
### GET /flower
Retourne les informations de toutes les fleurs
### GET /flower/:id
Retourne les informations de la fleur avec l'id `:id`
### POST /flower
Créer une fleur
### PATCH /flower/:id
Modifie les informations de la fleur avec l'id `:id`
### DELETE /flower/:id
Supprime la fleur avec l'id `:id`

## Party
### GET /party
Retourne les informations de toutes les parties
### GET /party/:id
Retourne les informations de la partie avec l'id `:id`
### GET /party/:id/user
Retourne les informations des utilisateurs de la partie avec l'id `:id`
### GET /party/:id/nectar
Retourne le nectar de la partie avec l'id `:id`
### GET /party/:id/pollen
Retourne le pollen de la partie avec l'id `:id`
### GET /party/:id/nectar/user/:userid
Retourne le nectar de l'utilisateur `userid` de la partie avec l'id `:id`
### GET /party/:id/pollen/user/:userid
Retourne le pollen de l'utilisateur `userid` de la partie avec l'id `:id`
### POST /party
Créer une partie
### PATCH /party/:id
Modifie les informations de la partie avec l'id `:id`
### DELETE /party/:id
Supprime la partie avec l'id `:id`


  