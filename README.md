# Mis apuntes

Autor del curso: [Victor Arana de Coders Free](https://codersfree.com/cursos/aprende-laravel-desde-cero)

## Instalaciones previas

1. XAMPP con PHP v8.2
2. Composer
3. NodeJS
4. Git
5. Visual Studio Code
6. Extensiones:
   1. "Laravel Snipperts" por WinnieLin
   2. "Laravel Blade formatter" por Shuhei Hayashibara
   3. "Laravel Blade Snippets" por Winnie Lin
   4. "Laravel goto view" por codingyu
   5. PHP intelephense

## Laravel

### Crear nuevo proyecto

Via Composer

```bash
composer create-project laravel/laravel example-app
```

Via Laravel primero se debe configurar el comando `laravel` para el proyecto

```bash
composer global require laravel/installer

laravel new example-app
```

El comando `laravel new example-app` es una opción más rápida y sencilla, ya que el instalador de Laravel utilizará Composer internamente para descargar e instalar Laravel y sus dependencias.

### Rutas

Retornar cadenas

```php
Route::get('/', function () {
  return "Hola mundo";
});
```

Rutas estáticas

```php
Route::get('/cursos/create', function () {
  return "Esta es la vista crear un curso";
});
```

Rutas dinámicas

```php
Route::get('/cursos/{curso}', function ($curso) {
  return "Bienvenido al curso $curso";
});
```

Rutas dinámicas anidadas y opcionales

```php
Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
  if($categoria){
    return "Bienvenido al curso $curso de la categoría $categoria";
  } else {
    return "Bienvenido al curso $curso";
  }
});
```

El orden de las rutas importa porque por ejemplo en las rutas dinámicas se establece un parámetro y si va antes que una ruta estática con el mismo patrón, podría tomar por ejemplo '/cursos/create' como un parámetro en la ruta '/cursos/{curso}'.

Para solucionar esto, la ruta estática debe ir antes que la dinámica para que Laravel no siga leyendo las demás rutas en caso de que coincida.
