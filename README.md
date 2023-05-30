# Clinfile-test

## PHP exercices
```
for the php exercises I made a kind of application which groups the classes necessary for the resolution and an index.php file as an entry point to view the results
```bash

## Installation
To  install dependencies with `Composer` first:

```bash
$ composer init
```
To  update dependencies with `Composer` first:

```bash
$ composer dump-autoload
```

## Using Docker
To run project using Docker:

Just run:

```bash
$ docker-compose  --build
```
```bash
$ docker-compose  up -d
```
Go to [http://localhost:8660/](http://localhost:8665) to show solution for php exercices 1 et 2


Exercice 1 : autre méthode 

```php
function locateUniverseFormula() {
 $path = realpath('/tmp/documents/');
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
{
if(strstr($filename, 'universe-formula')){
 return "$filename";
 }

}
 }

```
## Javascript exercices

Exercice 1 

```javascript

function findSmallestAbsoluteValue(ts) {
    if (ts.length > 0) {
        for (let i = 0; i < ts.length; i++) {
            ts[i] = Math.abs(ts[i]);
        }
    ts.sort(function(a, b) {
        return a - b;
    });
    return ts[0];
  }
}
```
Exercice 2

```
$ cette fonction prend une chaîne de caractères et un séparateur en entrée, divise la chaîne en un tableau en utilisant le séparateur, supprime les doublons et retourne le tableau résultant. Elle obtient une liste d'éléments uniques à partir d'une chaîne de caractères séparée par un certain motif.
```
