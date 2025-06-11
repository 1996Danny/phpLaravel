<?php
return [
    'paths' => ['/*'], // Aplica la configuración CORS a todas las rutas del servidor
    // 'allowed_methods' => ['*'], // Permite cualquier método HTTP (GET, POST, PUT, DELETE, etc.)
    // 'allowed_origins' => [''], // Permite solicitudes desde cualquier origen; puedes reemplazar '' con 'http://localhost:8080' para mayor seguridad
    // 'allowed_headers' => ['*'], // Permite cualquier encabezado en la solicitud (Content-Type, Authorization, etc.)
    // 'supports_credentials' => false, // Si se pone en "true", se permiten cookies y autenticación entre dominios, pero puede ser un riesgo de seguridad
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173'], // Puerto de Vite
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];