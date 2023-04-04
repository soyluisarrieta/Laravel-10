# Mis apuntes
---

## Instalaciones previas

1. XAMPP con PHP v8.2
2. Composer
3. NodeJS
4. Git
5. Visual Studio Code
6. Extensiones:
   1. "Laravel Blade formatter" por Shuhei Hayashibara
   2. "Laravel Blade Snippets" por Winnie Lin
   3. "Laravel goto view" por codingyu
   4.  PHP intelephense


## Laravel
---

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



