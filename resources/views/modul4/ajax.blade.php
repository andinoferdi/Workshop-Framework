<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Ajax</title>
</head>

<body>
    Alamat IP : <input type="text" id="satu">
    <button id="loadData">Get IP</button>
</body>

</html>

<script>
    $(document).ready(function() {
        $("#loadData").click(function() {
            $.ajax({
                url: 'https://api.ipify.org/?format=json',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#satu').val(data.ip);
                },
                error: function(error) {
                    $('#result').html('Terjadi kesalahan dalam memuat data');
                }
            });
        });
    });
</script>
