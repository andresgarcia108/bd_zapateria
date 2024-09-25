# sistemas para una zapateria 

## Modelo Entidad_relacion

![modelo entidad_relacion](img/screen.jpg "Modelo entidad-relacion")

## Modelo Fisico de la BD

![modelo fisico](img/screen01.jpg "modelo fisico de la Bd")

## tabla fabricante

![tabla fabricante](img/fabricante.jpg "tabla fabricante")

## articulo 
![articulo](img/articulo.jpg "articulo")

## consultas a la bd

1. Mostrar la lista de todos datos de los fabricantes
![consulta](img/consulta1.jpg "consulta2")

`SELECT * FROM fabricante;`

2. Mostrar la lista de nombres de los fabricantes 

`SELECT nombre_fabricante AS fabricante FROM fabricante;`

![consulta](img/consulta2.jpg "consulta2")

3. Mostrar los nombres de los productos.

`SELECT nombre_articulo FROM * articulo`

![consulta3](img/consulta3.jpg "consulta3")

4. mostrar los precios de los nombres de los productos

`SELECT nombre_articulo AS Nombre, precio_articulo AS Precio FROM Articulo;`

![consulta4](img/consulta4.jpg)

5. Obtener los nombres de los articulos cuyo precio es mayor que 50000


![consulta5](img/consulta5.jpg)

6. Obtener los nombres de los articulos cuyos precio estan entre 5000 y 40000

![consulta6](img/consulta6.jpg)

### Forma 1

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo >=5000 AND precio_articulo <=40000;`

### Forma 2

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo BETWEEN 5000 AND 40000;`
