# Proyecto final - Puesta en producción segura

## Old - Web vulnerable (v12)

Se trata de una imagen vulnerable a inyección SQL y a XSS

La imagen usada para la versión vulnable se construye a partir del Dockerfile que se en `old/`
Esa misma imagen, es la que se encuentra en Docker hub con el tag [versión 12](https://hub.docker.com/r/ikersolozabal/proyecto_final_pups)

## New - Web corregida (v18)

Se trata de la misma web que la versión `old`, pero con los errores de seguridad corregidos.
Además, se han implementado medidas se seguridad en los archivos de configuración. Y se ha habilitado la conexión mediante `https`.

Se han configurado también los virtual hosts para que responda al dominio `proyectofinalpups.es`, redireccionando automaticamente las peticiones `http` al puerto `443`

La imagen usada para esta versión corregida se construye con el Dockerfile que se encuentra en  `new/`
Esa misma imagen, es la que se encuentra en Docker hub con el tag [versión 18](https://hub.docker.com/r/ikersolozabal/proyecto_final_pups)

> En ambas imagenes se ha usado docker-compose.yml para correr el servicio en `Docker swarm` con el objetivo de implementar alta disponibilidad 
