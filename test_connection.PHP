<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Conexi�n a la Base de Datos</title>
</head>
<body>
    <h1>Verificar Conexi�n a la Base de Datos</h1>
    <button id="testConnection">Probar Conexi�n</button>
    <div id="result"></div>

    <script>
        document.getElementById('testConnection').addEventListener('click', function() {
            fetch('test_connection.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('result').innerText = data;
                })
                .catch(error => {
                    document.getElementById('result').innerText = 'Error al verificar la conexi�n: ' + error;
                });
        });
    </script>
</body>
</html>
