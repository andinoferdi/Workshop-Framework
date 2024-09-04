<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Effects</title>
</head>

<body>

    <p>Jika Anda mengklik tombol “Sembunyikan”, saya akan menghilang.</p>

    <button id="hide">Sembunyikan</button>
    <button id="show">tampilkan</button><br><br>
    <button>Klik untuk memudarkan kotak masuk/keluar</button><br><br>

    <div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
    <div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
    <div id="div3" style="width:80px;height:80px;background-color:blue;"></div>

</body>

</html>
<script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $("p").hide();
        });
        $("#show").click(function() {
            $("p").show();
        });
        $("button").click(function() {
            $("#div1").fadeToggle();
            $("#div2").fadeToggle("slow");
            $("#div3").fadeToggle(3000);
        });
    });
</script>
