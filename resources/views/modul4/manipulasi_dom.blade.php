<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Manipulasi Dom</title>
</head>

<body>

    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <p id="test1">Ini paragraf.</p>
    <p id="test2">Ini Paragraf lain</p>
    <p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>

    <button id="btn1">Set Text</button>
    <button id="btn2">Set HTML</button>
    <button id="btn3">Set Value</button>
    <button id="btn4">Add classes to elements</button>
</body>

</html>
<style>
    .important {
        font-weight: bold;
        font-size: xx-large;
    }

    .red {
        color: rgb(255, 0, 0);
    }
</style>

<script>
    $(document).ready(function() {
        $("#btn1").click(function() {
            $("#test1").text("Disini Saya");
        });
        $("#btn2").click(function() {
            $("#test2").html("<b>Menggunakan JQuerry</b>");
        });
        $("#btn3").click(function() {
            $("#test3").val("Saya Senang Sekali");
        });
        $("#btn4").click(function() {
            $("h1, h2, p").addClass("red");
        });
    });
</script>
