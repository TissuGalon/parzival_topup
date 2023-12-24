<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <script>
        async function getData() {
            const url = 'https://prepaid.iak.dev/api/pricelist/game/Arena of Valor/';
            const options = {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: '{"username":"085161787501","sign":"1eeffa87e868d58e7d28a742282cfb93","status":"active"}'
            };

            try {
                const response = await fetch(url, options);
                const data = await response.json();
                console.log(data);

                let StringData = JSON.stringify(data['data']);
                document.getElementById('tampil').innerHTML = StringData;
            } catch (error) {
                console.error(error);
            }
        }
        getData();
    </script>

    <div id="tampil"></div>
</body>

</html>