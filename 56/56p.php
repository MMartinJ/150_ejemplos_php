<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        document.addEventListener('DOMContentLoaded', function(){


            const miform = document.getElementById('miform');
            miform.addEventListener('submit', function(event){
                event.preventDefault();
                const nombre = document.getElementById('nombre').value;
                
                const ajax = new XMLHttpRequest();
                
                ajax.open('POST','resultadoajax.php',true);
                ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                ajax.onreadystatechange = function(){
                    if(ajax.readyState === 4 && ajax.status === 200){
                        
                        document.getElementById('respuesta').textContent = ajax.responseText;
                    }
                };

                ajax.send('nombre='+ encodeURIComponent(nombre));
            });
        });
    </script>
</head>
<body>
    <form id="miform" action="resultadoajax.php" method="">
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Enviar">
    </form>

    <div id="respuesta" ></div>
</body>
</html>