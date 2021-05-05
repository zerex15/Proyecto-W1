<?php include_once("../proyecto/static/layouts/header.php") ?>
<style>
#container-index{
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm33.414-6l5.95-5.95L45.95.636 40 6.586 34.05.636 32.636 2.05 38.586 8l-5.95 5.95 1.414 1.414L40 9.414l5.95 5.95 1.414-1.414L41.414 8zM40 48c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zM9.414 40l5.95-5.95-1.414-1.414L8 38.586l-5.95-5.95L.636 34.05 6.586 40l-5.95 5.95 1.414 1.414L8 41.414l5.95 5.95 1.414-1.414L9.414 40z' fill='%23001d72' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
width: 100%;
height: 800px;
}
#texto1{
    text-align: center;
    font-size: 200px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: bold;
    padding: 50px;
}
#btn-login, #btn-registro{
    align-items: center;
    text-align: center;
    padding: 30px;
    margin-top: -20px;
}

#btn-ingreso{
    background-color: teal;
    border-radius: 20px;
    font-size: 45px;
    color: white;
    font-family: 'Times New Roman', Times, serif;
}
#btn-registrar{
    background-color: paleturquoise;
    border-radius: 20px;
    font-size: 45px;
    font-family: 'Times New Roman', Times, serif;
}
</style>

<div class="container" id="container-index">
<div id="texto1">
<h1>Bienvenidos a Ela-Riendo</h1>
<hr>
</div>
    <div id="ingreso">
        <div id="btn-login">
            <button onclick="location.href='/proyecto/pages/login.php'" id="btn-ingreso">ingresar</button>
        </div>
        <div id="btn-registro">
            <button onclick="location.href='/proyecto/pages/registro.php'" id="btn-registrar">Registrarme</button>
        </div>
    </div>

</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<?php include_once("../proyecto/static/layouts/footer.php") ?>