# Proyecto final - Puesta en producción segura

## OLD

Se trata de una imagen vulnerable a intección SQL y a XSS

La imagen usada para la versión vulnable se construye a partir del Dockerfile que se en `new/`
Esa misma imagen es la que se encuentra en Docker hub con el tag [versión 12](https://hub.docker.com/r/ikersolozabal/proyecto_final_pups)

## new

Se trata de la misma imagen, con los errores de seguridad corregidos.
Además, se han implementado medidas se seguridad en los archivos de configuración.
También se ha habilitado ssl para que la web sea segura

Se ha configurado también los virtual host para que responda al dominio `practicafinalpups.es`

La imagen usada para esta versión corregida se consutrye con el Dockerfile que se encuentra en  `new/`
Esa misma imagen es la que se encuentra en Docker hub con el tag [versión 18](https://hub.docker.com/r/ikersolozabal/proyecto_final_pups)


> En ambas imagenes se ha usado docker-compose.yml para correr el servicio en `Docker swarm` con el objetivo de implementar alta disponibilidad 
