# pruebatecnicaPHP
Prueba tecnica de PHP -


## Rutas para consumir la API
### en mi pc no cree un virtualhost por la prisa pero en caso de la ruta eliminaria casi todo y quedaria en /contacto
1. Hice la validacion de una forma que funciona para todos, puede validar los campos en el edit y el store. no permite seguir si falta al menos uno de los campos. 
2. tambien agregue una validacion segun el metodo de la peticion, solo permite las post y get, pero hay alguna que es Post y trata de enviarla con otra le dira que no soporta ese metodo. 
3. Agregue exepciones en caso de no haber encontrado datos o poner algun dato mal. 

### PETICIONES GET
#### Endpoint que trae todos los contactos 
- http://localhost/api/contacto
~~~
En caso de respuesta 200. 
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
en caso de Respuesta 204 
~~~
{
    "Status": 204,
    "Contacto": "No encontro datos"
}
~~~


#### Endpoint que trae un Contacto por codigo
- http://localhost/api/contacto/3

En caso de respuesta 200. 
~~~
{
    "Status": 200,
    "Contacto": [
        {
            "id": "3",
            "nombre": "Oscarina",
            "apellido": "Numero2",
            "email": "oscarina@gmail.com"
        }
    ]
}
~~~
en caso de respuesta 204.
~~~
{
    "Status": 204,
    "Contacto": "No encontrado"
}
~~~

#### Endpoint que Elimina un Contacto por id 
http://localhost/api/contacto/destroy/1

en caso de respuesta 200. 
~~~
"Eliminado"
~~~
en caso de respuesta 204. 
~~~
{
    "Status": 204,
    "Contacto": "No encontrado"
}
~~~

### PETICIONES POST
#### Endpoint que inserta los contactos 
http://localhost/api/contacto/insert

Datos a enviar en formato JSON recibidos en $body 
~~~
{
    "nombre" : "Arianna ",
    "apellido": "Mayi", 
    "email":"Arianna@gmail.com"
}
~~~

en caso de respusta 200. 
~~~
{
    "Status": 200,
    "Contacto": "Contacto Insertado"
}
~~~
en caso de faltar algun campo

~~~
[
    "Campo nombre vacio",
    "Campo apellido vacio"
]
~~~



#### Endpoint que actualiza los contactos 
http://localhost/api/contacto/update 

Datos a enviar en formato JSON recibidos en $body 
~~~
{
    "id":"1",
    "nombre" : "Arianna ",
    "apellido": "Mayi", 
    "email":"Arianna@gmail.com"
}
~~~

en caso de respusta 200. 
~~~
{
    "Status": 200,
    "Contacto": "Contacto Insertado"
}
~~~
en caso de faltar algun campo

~~~
[
    "Campo nombre vacio",
    "Campo apellido vacio"
]
~~~



