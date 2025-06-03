# 🐾 PetStore - Sistema de Gestión para Tiendas de Mascotas

<div align="center">

![PetStore Logo](https://img.shields.io/badge/PetStore-Sistema%20de%20Gestión-orange?style=for-the-badge&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzNiAzNiI+PHBhdGggZmlsbD0iI0ZGQUMzMyIgZD0iTTMzLjE0OCAyNi4xNDZjLTEuNDI0IDEuNzE0LTIuNzQ3IDEuMjY3LTQuMTY1IDEuMDM1Yy0uNzMxLS4xMi0xLjQyOS0uMjMzLTIuMTQ2LS4xNzFjLTIuMTQyLjE4OC0zLjY3MSAyLjIzOS0zLjk1OCAyLjY3OWMtMS4yNTggMS45MTYtMy40NzggMi43LTUuOTY4IDIuMWMtMi4zMTMtLjU1OS0zLjQ4My0yLjU4Ni00LjU3LTQuMzhjLS41NzctLjk1MS0xLjA1My0xLjY2OC0xLjUxNi0xLjgyN2MtLjMxMi0uMTA2LS45ODUuMDIzLTEuNjMzLjE0N2MtMS4yODkuMjQ2LTIuODg4LjU1Mi00LjE3Mi0uMzEzYy0xLjQxNy0uOTU0LTEuODQ0LTMuMTc3LS41OTUtNS43MzFjMS42OTYtMy40NyA2LjUzLTUuMzI5IDExLjQ3Ni00LjcwNGMuNzMuMDkyIDEuNDc2LS4yNTQgMi4xOTUtLjU4N2MuNzg3LS4zNjcgMS42MDEtLjc0NiAyLjQwOS0uNzQ2Yy44MDggMCAxLjYyMi4zNzkgMi40MDkuNzQ2Yy43MTkuMzM0IDEuNDY1LjY3OSAyLjE5NS41ODdjNC45NDYtLjYyNSA5Ljc4IDEuMjM0IDExLjQ3NiA0LjcwNGMxLjI0OSAyLjU1NC44MjIgNC43NzctLjU5NSA1LjczMXYuMDMxWk0xNy45OTcgMEMxNC43MzYgMCAxMi4wNzIgNi43MTUgMTIuMDcyIDl2LjM4YzAgMS4zNTcuOTI1IDIuNDggMi4xNDQgMi43NzFsMS43MTQuNDI4Yy42MTUuMTU0IDEuMjU2LjE1NiAxLjg3Mi4wMDZsLjMzLS4wOGMuNjQtLjE1NCAxLjMxNi0uMTU0IDEuOTU3LS4wMDFsLjMxLjA3NWMuNjE1LjE1IDEuMjU2LjE0OCAxLjg3Mi0uMDA2bDEuNzE0LS40MjhjMS4yMTktLjI5MSAyLjE0NC0xLjQxNCAyLjE0NC0yLjc3MVY5YzAtMi4yODUtMi42NjQtOS03LTlabS0xLjQ5NCAxOWMtLjUyMSAwLTEuMDI2LS4xNDktMS40NjEtLjQzMS0xLjQ2NS0uOTUtMi41ODYtMi4xOTUtMy4zMzQtMy42OTVjLS4zMDQtLjYwOC0uNjA4LTEuMzMtLjA4Mi0xLjk2MmMuNDk3LS41OTYgMS4xMjctLjUxMiAxLjY5NS0uNDM1Yy41ODUuMDggMS4xMTEuMTUxIDEuNTgzLS4xMjNjLjU4OS0uMzQzLjk2NS0xLjA3OCAxLjM0Ni0xLjgyNmMuMjY2LS41MjIuNTg0LTEuMTQ0Ljk0OS0xLjM5OGMuNzQ4LS41MiAxLjQzNi0uMzYzIDIuMDguMDg5Yy4xNDkuMTA1LjI5My4yMTkuNDM0LjMzNmMuMzcyLjMwOS43MTkuNDQ5IDEuMTMuMzdjLjUzMy0uMTAzIDEuMDIzLS42MDkgMS41MjUtMS4xMjljLjQxOC0uNDMzIDEuMjU1LS4yMDMgMS42NDkuMjEyYy4zOTUuNDE1LjUwNyAxLjA4Ny4yNiAxLjU3MmMtMS43NCAzLjQtNC4yMTQgNi4zMjEtNy4xNTcgNi45NTNjLS4yLjA0LS40MDMuMDYtLjYwNS4wNmwtLjAxMi40MzhaTS4yOTQgMzIuNTk0QzIuNzc3IDMwLjE5MyA2LjM5NyAyOS4xNyA5Ljg2NSAyOS4yMTJjLjkzOC4wMTEgMS42MjMuODIzIDEuNTI1IDEuNzU2LS4wOTguOTM0LS45MiAxLjY3OC0xLjg1OCAxLjY2N2MtMi42NDQtLjAzMi01LjQ0LjczMy03LjM0OCAyLjU5Yy0uNjk5LjY4MS0xLjgyLjY3NC0yLjUxLS4wMTYtLjY5LS42OS0uNjgyLTEuODA5LjAwNi0yLjQ5OGwuNjE0LS4xMTdaTTI2LjQ3IDMyLjYzNWMtMS45MDgtMS44NTctNC43MDQtMi42MjItNy4zNDgtMi41OWMtLjkzOC4wMTEtMS43Ni0uNzMzLTEuODU4LTEuNjY3cy41ODctMS43NDUgMS41MjUtMS43NTZjMy40NjgtLjA0MiA3LjA4OC45OCA5LjU3MSAzLjM4Mi42ODcuNjg5LjY5NiAxLjgwOC4wMDYgMi40OThzLTEuODExLjY5Ny0yLjUxLjAxNmwtLjYxNC0uMTE3WiIvPjwvc3ZnPg==)
![Version](https://img.shields.io/badge/Versión-1.0.0-blue?style=for-the-badge)
![License](https://img.shields.io/badge/Licencia-MIT-green?style=for-the-badge)

</div>

## 📋 Descripción

PetStore es un sistema completo de gestión para tiendas de mascotas desarrollado con una arquitectura monolítica. Esta aplicación web permite administrar inventario de productos, gestionar clientes, procesar ventas y mantener registros de mascotas.

Desarrollado utilizando tecnologías estándar de la web como PHP, HTML, CSS y JavaScript, con una interfaz de usuario moderna gracias a Bootstrap y una base de datos robusta en PostgreSQL.

## ✨ Características principales

- 🏪 Gestión completa de inventario de productos para mascotas
- 👥 Administración de clientes y sus mascotas
- 💰 Procesamiento de ventas y facturación
- 📊 Reportes y estadísticas de ventas
- 📱 Diseño responsive adaptable a diferentes dispositivos
- 🔒 Sistema de autenticación y gestión de usuarios

## 🛠️ Tecnologías utilizadas

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

</div>

## 🗂️ Estructura del proyecto

```
├── assets/              # Recursos estáticos (CSS, JS, imágenes)
├── config/              # Configuraciones de la aplicación y base de datos
├── controllers/         # Controladores PHP para la lógica de negocio
├── database/            # Scripts SQL y migraciones
├── includes/            # Componentes reutilizables y funciones helper
├── models/              # Modelos para interactuar con la base de datos
├── views/               # Vistas y plantillas de la interfaz de usuario
├── .htaccess            # Configuración de Apache
├── index.php            # Punto de entrada de la aplicación
└── README.md            # Documentación del proyecto
```

## 📋 Requisitos previos

- XAMPP (con PHP 7.4 o superior)
- PostgreSQL 12 o superior
- Navegador web moderno (Chrome, Firefox, Edge)
- Git (opcional, para clonar el repositorio)

## 🚀 Instalación y configuración

### 1. Configurar XAMPP

1. Descarga e instala [XAMPP](https://www.apachefriends.org/es/index.html) si aún no lo tienes.
2. Inicia los servicios de Apache y PostgreSQL desde el panel de control de XAMPP.

### 2. Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/pet-store.git
cd pet-store
```

### 3. Configurar la base de datos

1. Accede a pgAdmin o a tu cliente PostgreSQL preferido.
2. Crea una nueva base de datos llamada `petstore`.
3. Importa el esquema y datos iniciales desde `database/schema.sql`.

### 4. Configurar el servidor web

1. Mueve o copia el proyecto al directorio `htdocs` de XAMPP (generalmente en `C:\xampp\htdocs\` en Windows o `/Applications/XAMPP/htdocs/` en macOS).
2. Accede a la aplicación a través de tu navegador: `http://localhost/pet-store`

## 🖥️ Uso

1. Accede a la aplicación mediante `http://localhost/pet-store`
2. Inicia sesión con las credenciales predeterminadas:
   - Usuario: `admin`
   - Contraseña: `admin123`
3. Desde el panel de administración podrás gestionar todos los aspectos de la tienda de mascotas.

## 🧪 Pruebas

Para ejecutar las pruebas automatizadas del sistema, utiliza el siguiente comando desde la raíz del proyecto:

```bash
php tests/run.php
```

## 🤝 Contribución

Las contribuciones son bienvenidas. Para contribuir:

1. Haz un Fork del proyecto
2. Crea una rama para tu característica (`git checkout -b feature/nueva-caracteristica`)
3. Realiza tus cambios y haz commit (`git commit -m 'Añadir nueva característica'`)
4. Sube los cambios a tu fork (`git push origin feature/nueva-caracteristica`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.

## 📧 Contacto

Si tienes preguntas o sugerencias, no dudes en contactar al equipo de desarrollo:
- Email: tu-email@ejemplo.com
- GitHub: [tu-usuario](https://github.com/tu-usuario)

---

<div align="center">

⭐️ **PetStore** 
</div>
