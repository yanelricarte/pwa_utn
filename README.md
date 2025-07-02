# 💾 Catálogo de Productos en CodeIgniter 4

Proyecto de ejemplo desarrollado con CodeIgniter 4 para trabajar operaciones **CRUD** (alta, baja, modificación, visualización) sobre productos en un sistema de stock.

> 🌱 Recurso pedagógico para estudiantes que comienzan a trabajar con frameworks MVC en PHP.

---

## 🔧 Tecnologías utilizadas

* **PHP 8+**
* **CodeIgniter 4**
* **MySQL / MariaDB**
* **HTML + CSS**

---

## 🌟 Objetivos del proyecto

* Aplicar el patrón **MVC** (Modelo-Vista-Controlador)
* Conectar con base de datos usando **Models** de CI4
* Crear vistas estilizadas con CSS propio
* Comprender el ruteo mediante `Routes.php`
* Enviar y recibir datos mediante formularios

---

<details>
<summary>📁 Estructura general del proyecto</summary>

```text
/app
 ├── Controllers
 │    ├── Home.php
 │    ├── Productos.php
 │    └── StockController.php
 ├── Models
 │    └── ProductosModel.php
 ├── Views
 │    ├── layouts/
 │    │    └── main.php
 │    ├── stock/
 │    │    ├── index.php
 │    │    ├── detalle.php
 │    │    └── form.php
 │    ├── home/
 │    │    └── index.php
 │    └── productos.php
/public
 ├── css/
 │    └── estilos.css
 └── index.php
```

</details>

---

<details>
<summary>🚦 Rutas configuradas en <code>app/Config/Routes.php</code></summary>

```php
$routes->get('/',                        'Home::index');
$routes->get('stock',                    'StockController::index');
$routes->get('stock/verDetalle/(:num)',  'StockController::verDetalle/$1');
$routes->get('stock/editar/(:num)',      'StockController::actualizarStockForm/$1');
$routes->post('stock/actualizar/(:num)','StockController::actualizarStock/$1');
$routes->get('productos/crear',          'StockController::actualizarStockForm/0');
$routes->post('productos/guardar',       'StockController::actualizarStock/0');
```

</details>

---

<details>
<summary>🧠 ¿Qué aprendimos en esta clase?</summary>

* Crear un controlador y vincularlo a una vista.
* Usar un modelo para acceder a la base de datos.
* Aplicar el uso de layouts para mantener una estructura común.
* Armar formularios para editar y actualizar datos.
* Pasar parámetros por **URL** (ej. `/stock/verDetalle/5`).
* Preparar rutas para operaciones **pendientes** (crear y borrar).

</details>

---

<details>
<summary>📚 Conceptos clave trabajados</summary>

### ¿Qué es CodeIgniter?

CodeIgniter es un framework PHP liviano, basado en el patrón Modelo-Vista-Controlador (MVC), que facilita el desarrollo rápido de aplicaciones web con una estructura clara y organizada.

### ¿Qué es el patrón MVC?

* **Modelo (Model):** Maneja la lógica de datos y las consultas a la base de datos.
* **Vista (View):** Es la parte visual de la aplicación, lo que el usuario ve.
* **Controlador (Controller):** Recibe las solicitudes del usuario, coordina con el modelo y carga la vista correspondiente.

### ¿Qué hace cada parte del proyecto?

* **Controladores:** Manejan la lógica del flujo de la app. Ej: `StockController` gestiona la visualización, edición y detalle de productos.
* **Modelos:** Acceden a los datos. `ProductosModel` trabaja sobre la tabla `productos`.
* **Vistas:** Son los archivos `.php` que representan las páginas que el usuario ve. Están organizadas en carpetas como `stock/`, `home/`, etc.
* **Rutas:** Se definen en `Routes.php` y permiten mapear URLs con métodos de los controladores.

</details>

---

<details>
<summary>📌 Paso a paso</summary>

1. Creamos el controlador `Home.php` y la vista inicial `/views/home/index.php`.
2. Creamos la base de datos y la tabla `productos`.
3. Creamos el modelo `ProductosModel.php` conectado a dicha tabla.
4. Creamos el controlador `StockController` para listar, ver detalle y editar productos.
5. Creamos las vistas `stock/index.php`, `stock/detalle.php`, y `stock/form.php`.
6. Estilizamos las vistas con CSS desde `/public/css/estilos.css`
7. Definimos rutas limpias y claras desde `Routes.php`
8. Dejamos preparados los botones y formularios para:

   * Agregar nuevo producto (a implementar)
   * Eliminar producto (a implementar)

</details>

---

<details>
<summary>🚀 Instalación y ejecución en local</summary>

```bash
# 1. Clonar el repositorio
git clone https://github.com/tu_usuario/ci4-catalogo-productos.git

# 2. Ingresar al proyecto
cd ci4-catalogo-productos
```

**Configurar el archivo `.env`:**

```bash
database.default.hostname = localhost
database.default.database = nombre_basededatos
database.default.username = tu_usuario
database.default.password = tu_password
database.default.DBDriver = MySQLi
```

**Importar el archivo `.sql`** con la tabla `productos`.

**Levantar el servidor:**

```bash
php spark serve
```

**Navegar a:**

* `http://localhost:8080/` → página inicial
* `http://localhost:8080/stock` → listado de productos

</details>

---

<details>
<summary>🚧 Próximos pasos</summary>

* [ ] **Alta de productos:** Crear nuevos productos desde un formulario. Incluir validaciones básicas como nombre obligatorio, precio positivo, etc.
* [ ] **Eliminar producto:** Agregar botón para borrar productos. Mostrar confirmación previa.
* [ ] **Mensajes flash:** Notificar al usuario cuando se realiza una acción (creación, edición, eliminación).
* [ ] **Validaciones en servidor:** Asegurar que los datos enviados desde formularios sean válidos antes de guardar en base.
* [ ] **Feedback visual:** Mostrar errores en los formularios de forma clara y amigable.
* [ ] **Estilos adicionales:** Mejorar detalles visuales, transiciones, mensajes, botones.
* [ ] **Testeo con datos reales:** Agregar productos de prueba y probar todo el flujo completo.
* [ ] **Documentar funciones faltantes:** Dejar anotado en el código qué partes podrían expandirse en una próxima clase.

</details>

---

## 📘 Recursos para estudiantes

Este proyecto sirve como guía para:

* Introducción práctica a MVC con PHP
* Comprensión de flujo de datos entre vistas y controladores
* Práctica de rutas limpias y formularios
* Uso básico de modelos con base de datos MySQL

---

## 🧑‍💻 Autoría y licencia

Proyecto desarrollado con fines educativos por \[Nombre del docente o institución].
