# pruebatecnicaPHP
Prueba tecnica de PHP -


## Rutas para consumir la API
### en mi pc no cree un virtualhost por la prisa pero en caso de la ruta eliminaria casi todo y quedaria en /contacto
1. Hice la validacion de una forma que funciona para todos, puede validar los campos en el edit y el store. no permite seguir si falta al menos uno de los campos. 
2. 

### PETICIONES GET
Endpoint que trae todos los contactos 
- http://localhost/api/contacto
~~~
{
    "Status": 200,
    "Contacto": [
        {
            "id": "3",
            "nombre": "Oscarina",
            "apellido": "Numero2",
            "email": "oscarina@gmail.com"
        },
        {
            "id": "4",
            "nombre": "Oscarina",
            "apellido": "Tejada",
            "email": "oscarina@gmail.com"
        }
    ]
}
~~~


Endpoint que trae un usuario por codigo
- http://localhost/api/contacto/1

Endpoint que 
http://localhost/api/contacto/
