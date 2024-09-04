<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Informasi Negara</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        /* Gaya dasar untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            /* Menyusun elemen secara vertikal */
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        /* Gaya untuk input dan tombol */
        input[type="text"] {
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
            outline: none;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin-right: 10px;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
            outline: none;
            margin-top: 10px;
            /* Menambahkan margin atas langsung pada tombol */
        }

        button:hover {
            background-color: #0056b3;
        }

        .loader {
            display: none;
            margin-top: 20px;
            text-align: center;
            font-size: 1.2em;
            color: #007bff;
        }

        /* Gaya untuk kotak informasi negara */
        .country-info {
            display: none;
            /* Sembunyikan hasil pencarian sampai ada data */
            margin-top: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .country-info h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .country-info img {
            width: 150px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .country-info p {
            color: #555;
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        /* Gaya untuk pesan kesalahan */
        .error {
            color: red;
            margin-top: 20px;
            text-align: center;
            font-size: 1.1em;
            font-weight: bold;
        }

        /* Gaya untuk tampilan responsif */
        @media (max-width: 768px) {
            input[type="text"] {
                width: 100%;
                margin-bottom: 10px;
            }

            button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <h1>Mencari Informasi Negara</h1>
    <input type="text" id="countryInput" placeholder="Masukkan nama negara">
    <button id="searchButton">Cari</button>
    <div class="loader" id="loader">Memuat...</div>
    <div id="result" class="country-info"></div>
    <div id="error" class="error"></div>

    <script>
        $(document).ready(function() {
            $('#searchButton').click(function() {
                var countryName = $('#countryInput').val().trim();
                if (countryName === "") {
                    $('#error').html("Silakan masukkan nama negara.");
                    return;
                }

                $('#result').empty().hide(); // Sembunyikan hasil pencarian
                $('#error').empty();
                $('#loader').show();

                $.ajax({
                    url: 'https://restcountries.com/v3.1/name/' + countryName,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#loader').hide();
                        if (data.status === 404) {
                            $('#error').html("Negara tidak ditemukan.");
                            return;
                        }

                        var country = data[0];
                        var html = '<h2>' + country.name.common + '</h2>';
                        html += '<img src="' + country.flags.svg + '" alt="Bendera ' + country
                            .name.common + '">';
                        html += '<p><strong>Wilayah:</strong> ' + country.region + '</p>';
                        html += '<p><strong>Subwilayah:</strong> ' + country.subregion + '</p>';
                        html += '<p><strong>Ibukota:</strong> ' + country.capital + '</p>';
                        html += '<p><strong>Populasi:</strong> ' + country.population
                            .toLocaleString() + '</p>';
                        html += '<p><strong>Bahasa:</strong> ' + Object.values(country
                            .languages).join(", ") + '</p>';
                        html += '<p><strong>Mata Uang:</strong> ' + Object.values(country
                            .currencies)[0].name + ' (' + Object.values(country.currencies)[
                            0].symbol + ')</p>';

                        $('#result').html(html).show(); // Tampilkan hasil pencarian
                    },
                    error: function() {
                        $('#loader').hide();
                        $('#error').html('Terjadi kesalahan saat mengambil data negara.');
                    }
                });
            });
        });
    </script>
</body>

</html>
