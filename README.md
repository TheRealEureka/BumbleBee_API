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
### GET /user/:id/flower
Retourne les informations des fleurs de l'utilisateur avec l'id `:id`
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
  