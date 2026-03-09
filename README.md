# Hola Mundo con IA (PHP)

## Descripción
Proyecto web desarrollado en PHP que despliega un saludo personalizado y una imagen generada mediante Inteligencia Artificial (Leonardo IA). El objetivo es demostrar la correcta configuración de un entorno de servidor web interpretado.

## Prerrequisitos
* **Servidor Web:** Apache2 (en Linux) o XAMPP (en Windows).
* **Lenguaje:** PHP instalado y configurado.

## Pasos para su ejecución
Para que el servidor pueda interpretar el archivo `.php`, este debe estar alojado en el directorio público del servidor web.

### 1. Ubicación de los archivos
Debes copiar la carpeta de este proyecto dentro de la ruta raíz de tu servidor:
* **Linux (Ubuntu):** `/var/www/html/`
* **Windows (XAMPP):** `C:\xampp\htdocs\`

> *Nota: Puedes renombrar la carpeta del proyecto a tu gusto (ej. `mi_proyecto`).*

### 2. Ejecución en el navegador
Una vez los archivos estén en la carpeta correcta y el servidor Apache esté encendido, accede desde tu navegador usando la siguiente estructura de URL:

```bash
sudo systemctl start apache2
```

### Luego, abre tu navegador y accede a:
`http://localhost/NOMBRE_DE_TU_CARPETA/index.php`

### 3. Usando el Servidor Integrado de PHP
Si prefieres no usar Apache, abre la terminal dentro de la carpeta del proyecto y ejecuta:

```bash
php -S localhost:8000
```
Luego abre en tu navegador: `http://localhost:8000/index.php`

## Datos del Autor

   * **Nombre:** Jose Carlos Roque Iriarte
   * **Correo:** 14007251@galileo.edu
   * **Carnet:** 14007251