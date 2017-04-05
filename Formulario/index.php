<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--
Johan Santafe Moreno 20151025120
Sebastián Vergara Dueñas 20161025027
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO</title>
    </head>
    <body>
       
        <script>
            function contador(){
                var a =document.getElementById('co');
                longitud=(a.value.length)
                if(longitud<7){
                  alert ("Clave debe ser mayor de 7 caracteres.");
                return 0; 
                }
                alert("Contraseña valida")
                return 1;
            }
        </script>
     
        <style type="text/css">
            #usua{
                
                background-color: lightblue;
                font-family: sans-serif;
                font-size: 30px;
                position: relative;
                top: 50px;
                left: 300px;
            }
            #coo{
                
                background-color: lightblue;
                font-family: sans-serif;
                font-size: 30px;
                position: relative;
                top: 50px;
                left: 600px;
            }
            #bot{
                position: relative;
                top: 100px;
                left: 600px;
                height: 40px;
                font-size: 25px;
            }
            #usu{
                font-size: 30px;
                position: relative;
                top: 50px;
                left: 350px;
            }
            #co{
                font-size: 30px;
                position: relative;
                top: 50px;
                left: 650px;
            }
            #boto{
                height: 60px;
                font-size: 45px;
                position: relative;
                top: 80px;
                left: 650px;
            }
            #tit{
                background-color: lightblue;
                font-family: sans-serif;
                font-size: 50px;
                position: relative;
                left: 600px;
                
            }
           
        </style>
     
        <form onsubmit="return contador()" action="ingreso.php">
            <label id="tit">FORMULARIO</label>
            <label id="usua">Ususario:</label><input type="text" name="usuario" id="usu"><br>
            <label id="coo">Contraseña:</label><input type="password" name="pass" id="co"><input type="button" value="Revisar Contraseña" onclick="contador()" id="bot"><br>
            <input type="submit" value="Aceptar" id="boto">
       
        </form>
    </body>
</html>