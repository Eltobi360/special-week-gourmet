<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Restaurantes</title>
    <!-- Carga de Tailwind CSS para un diseño moderno y responsivo -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Carga de la fuente Inter de Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <!-- Carga de la librería Anime.js v3.2.2 para animaciones -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-black-transparent {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .glass-card {
            background-color: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        /* Estilos para el contenedor de partículas */
        #particles-container {
            position: absolute;
            inset: 0;
            z-index: 10;
            overflow: hidden;
            pointer-events: none;
        }
        /* Estilos para cada partícula */
        .particle {
            position: absolute;
            background-color: #f59e0b; /* Color base ámbar */
            border-radius: 50%;
            opacity: 0;
            transform: scale(0);
            /* --- EL ARREGLO ESTÁ AQUÍ --- */
            width: 10px;
            height: 10px;
        }
    </style>
</head>
<body class="bg-zinc-900 text-white">

    <!-- Header y Navegación -->
    <header class="bg-zinc-800 shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-amber-400">
                Tu Sistema de Gestión
            </a>
            <ul class="flex space-x-6 text-lg">
                <li><a href="#hero" class="hover:text-amber-400 transition-colors">Inicio</a></li>
                <li><a href="#caracteristicas" class="hover:text-amber-400 transition-colors">Características</a></li>
                <li><a href="#demo" class="hover:text-amber-400 transition-colors">Muestra</a></li>
                <li><a href="#contacto" class="hover:text-amber-400 transition-colors">Contacto</a></li>
                <li><a href="{{ route('login') }}" class="hover:text-amber-400 transition-colors">Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección Hero -->
    <section id="hero" class="relative bg-cover bg-center min-h-screen flex items-center justify-center text-center p-4" style="background-image: url('https://placehold.co/1920x1080/1a202c/e2e8f0?text=Sistema+de+Restaurante');">
        <!-- Contenedor de partículas -->
        <div id="particles-container"></div>
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="z-20 max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight text-white">
                Transforma tu Restaurante, Optimiza tu Gestión
            </h1>
            <p class="mt-4 text-xl md:text-2xl text-gray-200">
                Un sistema completo para controlar tu negocio, desde el menú hasta las reservas.
            </p>
            <a href="#caracteristicas" class="mt-8 inline-block px-10 py-5 bg-amber-500 hover:bg-rose-600 text-white font-bold rounded-full shadow-lg transition-transform duration-300 transform hover:scale-105">
                Descubre las Características
            </a>
        </div>
    </section>

    <!-- Sección de Características -->
    <section id="caracteristicas" class="container mx-auto px-4 py-16">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-amber-400">Características Principales</h2>
        <p class="text-center mt-4 text-gray-400 text-lg">Todo lo que necesitas para que tu negocio funcione sin problemas.</p>
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tarjeta de característica: Gestión de Menú -->
            <div class="bg-zinc-800 rounded-2xl shadow-xl overflow-hidden group">
                <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Gestión+de+Menú" alt="Gestión de Menú" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white">Gestión de Menú Digital</h3>
                    <p class="mt-2 text-gray-400 text-sm">Actualiza platos, precios e inventario en tiempo real desde un solo lugar.</p>
                </div>
            </div>
            <!-- Tarjeta de característica: Sistema de Punto de Venta -->
            <div class="bg-zinc-800 rounded-2xl shadow-xl overflow-hidden group">
                <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Punto+de+Venta+POS" alt="Punto de Venta" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white">Punto de Venta (POS)</h3>
                    <p class="mt-2 text-gray-400 text-sm">Procesamiento de pedidos rápido y eficiente con seguimiento de pagos integrado.</p>
                </div>
            </div>
            <!-- Tarjeta de característica: Reservas Online -->
            <div class="bg-zinc-800 rounded-2xl shadow-xl overflow-hidden group">
                <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Reservas+Online" alt="Reservas Online" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white">Sistema de Reservas</h3>
                    <p class="mt-2 text-gray-400 text-sm">Gestiona fácilmente las reservas de clientes y optimiza la capacidad de tus mesas.</p>
                </div>
            </div>
            <!-- Tarjeta de característica: Gestión de Inventario -->
            <div class="bg-zinc-800 rounded-2xl shadow-xl overflow-hidden group">
                <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Control+de+Inventario" alt="Control de Inventario" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white">Control de Inventario</h3>
                    <p class="mt-2 text-gray-400 text-sm">Mantén un seguimiento de tus insumos para nunca quedarte sin existencias.</p>
                </div>
            </div>
            <!-- Tarjeta de característica: Reportes y Análisis -->
            <div class="bg-zinc-800 rounded-2xl shadow-xl overflow-hidden group">
                <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Reportes+y+Análisis" alt="Reportes y Análisis" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white">Reportes y Análisis</h3>
                    <p class="mt-2 text-gray-400 text-sm">Visualiza el rendimiento de tu negocio con informes detallados y gráficos intuitivos.</p>
                </div>
            </div>
            <!-- Tarjeta de característica: Gestión de Personal -->
            <div class="bg-zinc-800 rounded-2xl shadow-xl overflow-hidden group">
                <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Gestión+de+Personal" alt="Gestión de Personal" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white">Gestión de Personal</h3>
                    <p class="mt-2 text-gray-400 text-sm">Asigna turnos, gestiona salarios y optimiza la productividad de tu equipo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Muestra y Demostración -->
    <section id="demo" class="py-16 bg-black-transparent">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-white">Una Mirada a Tu Futuro Restaurante</h2>
            <p class="text-center mt-4 text-gray-300 text-lg">Descubre cómo tu negocio se verá y funcionará con nuestro sistema.</p>

            <!-- Galería de vistas del sistema -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-zinc-800 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-bold text-amber-400 mb-4">Interfaz de Gestión</h3>
                    <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Panel+de+Control" alt="Panel de Control del Sistema" class="w-full h-64 object-cover rounded-xl border border-gray-700">
                    <p class="mt-4 text-gray-400 text-sm">Visualiza tus métricas clave en un panel intuitivo.</p>
                </div>
                <div class="bg-zinc-800 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-bold text-amber-400 mb-4">Gestión de Pedidos</h3>
                    <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Pantalla+de+Pedidos" alt="Pantalla de Pedidos" class="w-full h-64 object-cover rounded-xl border border-gray-700">
                    <p class="mt-4 text-gray-400 text-sm">Organiza y gestiona los pedidos de manera eficiente.</p>
                </div>
                <div class="bg-zinc-800 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-bold text-amber-400 mb-4">Reportes de Ventas</h3>
                    <img src="https://placehold.co/600x400/2d3748/cbd5e0?text=Gráficos+de+Ventas" alt="Gráficos de Ventas" class="w-full h-64 object-cover rounded-xl border border-gray-700">
                    <p class="mt-4 text-gray-400 text-sm">Analiza el rendimiento de tu negocio con gráficos claros.</p>
                </div>
            </div>

            <div class="mt-20">
                <h3 class="text-3xl md:text-4xl font-bold text-center text-amber-400">Ejemplo de Página de Menú</h3>
                <p class="text-center mt-4 text-gray-300 text-lg">Así de elegante se verá la carta de tu restaurante.</p>
                <div class="glass-card mt-8 p-8 rounded-3xl">
                    <div class="flex flex-col md:flex-row items-center justify-between pb-6 border-b border-gray-800 mb-6">
                        <div class="text-center md:text-left">
                            <h4 class="text-4xl font-bold text-white">Menú Delicioso</h4>
                            <p class="mt-1 text-gray-400">Descubre nuestros platillos estrella.</p>
                        </div>
                        <a href="#" class="mt-4 md:mt-0 px-6 py-2 bg-amber-500 hover:bg-rose-600 text-white font-bold rounded-full">Reservar</a>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Ítem de Menú 1 -->
                        <div class="flex items-center space-x-4">
                            <img src="https://placehold.co/100x100/2d3748/cbd5e0?text=Plato+A" alt="Plato A" class="w-24 h-24 object-cover rounded-xl">
                            <div>
                                <h5 class="text-xl font-semibold text-white">Plato con Nombre Largo</h5>
                                <p class="text-gray-400 text-sm">Descripción del plato con ingredientes y detalles.</p>
                            </div>
                            <span class="text-lg font-bold text-amber-400 ml-auto">$15.00</span>
                        </div>
                        <!-- Ítem de Menú 2 -->
                        <div class="flex items-center space-x-4">
                            <img src="https://placehold.co/100x100/2d3748/cbd5e0?text=Plato+B" alt="Plato B" class="w-24 h-24 object-cover rounded-xl">
                            <div>
                                <h5 class="text-xl font-semibold text-white">Otro Plato Delicioso</h5>
                                <p class="text-gray-400 text-sm">Descripción del plato con ingredientes y detalles.</p>
                            </div>
                            <span class="text-lg font-bold text-amber-400 ml-auto">$12.50</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contacto" class="bg-zinc-800 py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-amber-400">Contáctanos</h2>
            <p class="mt-4 text-gray-400">
                Estamos listos para ayudarte a llevar tu negocio al siguiente nivel.
            </p>
            <div class="mt-6 text-xl space-x-6">
                <!-- Iconos de redes sociales (puedes reemplazar con SVGs o FontAwesome) -->
                <a href="#" class="hover:text-amber-400 transition-colors">Facebook</a>
                <a href="#" class="hover:text-amber-400 transition-colors">Instagram</a>
                <a href="#" class="hover:text-amber-400 transition-colors">Twitter</a>
            </div>
            <p class="mt-8 text-sm text-gray-500">
                &copy; 2024 Sistema de Gestión de Restaurantes. Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <!-- Script para la animación de partículas -->
    <script>
        window.onload = function() {
            const particlesContainer = document.getElementById('particles-container');
            const particleCount = 100;

            function getRandomColor() {
                const colors = ['#f59e0b', '#f43f5e', '#ffffff']; // Ámbar, Rosa/Rojo, Blanco
                return colors[Math.floor(Math.random() * colors.length)];
            }

            function createParticles() {
                for (let i = 0; i < particleCount; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'particle';
                    particlesContainer.appendChild(particle);

                    // Animación con anime.js
                    anime({
                        targets: particle,
                        translateX: function() {
                            return anime.random(-particlesContainer.offsetWidth / 2, particlesContainer.offsetWidth / 2);
                        },
                        translateY: function() {
                            return anime.random(-particlesContainer.offsetHeight / 2, particlesContainer.offsetHeight / 2);
                        },
                        scale: function() {
                            return anime.random(0.5, 2);
                        },
                        opacity: [
                            { value: 0, duration: 0 },
                            { value: 1, duration: 500, easing: 'linear' },
                            { value: 0, duration: 1000, easing: 'easeOutQuad' }
                        ],
                        backgroundColor: getRandomColor(),
                        duration: function() {
                            return anime.random(2000, 5000);
                        },
                        delay: function() {
                            return anime.random(0, 2000);
                        },
                        loop: true
                    });
                }
            }

            // Llamar a la función de creación de partículas
            createParticles();
        };
    </script>

</body>
</html>
