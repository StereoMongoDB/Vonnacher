<!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    /* Estilos del mensaje de aviso */
                    .aviso-container {
                        display: none;
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: #f44336;
                        color: white;
                        padding: 20px;
                        border-radius: 5px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        z-index: 1000;
                    }
            
                    /* Estilos del botón de cerrar */
                    .cerrar-btn {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        cursor: pointer;
                        color: white;
                        font-size: 18px;
                    }
                </style>
            </head>
            <body>
            
            <!-- Contenedor del mensaje de aviso -->
            <div id="aviso" class="aviso-container">
                <span class="cerrar-btn" onclick="cerrarAviso()">&times;</span>
                <p><strong>Error:</strong> Los datos ingresados son incorrectos. Por favor, verifique los datos ingresados</p>
            </div>
            
            <!-- Resto de tu código HTML -->
            
            <!-- Script JavaScript para mostrar y ocultar el mensaje de aviso -->
            <script>
                function mostrarAviso() {
                    document.getElementById('aviso').style.display = 'block';
                }
            
                function cerrarAviso() {
                    document.getElementById('aviso').style.display = 'none';
                }
            </script>
            
            </body>
            </html>