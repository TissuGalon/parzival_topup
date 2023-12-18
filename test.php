<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Example</title>
</head>

<body>

    <!-- Dummy data for demonstration -->
    <div id="tampil">
        <div class="item">Item 1</div>
        <div class="item">Item 2</div>
        <div class="item">Item 3</div>
        <div class="item">Item 4</div>
        <div class="item">Item 5</div>
    </div>

    <input type="text" id="searchInput" oninput="searchItems()" placeholder="Search">

    <script>
        function searchItems() {
            // Get input value and convert to lowercase for case-insensitive search
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();

            // Get all items
            const items = document.querySelectorAll('.item');

            // Loop through items to show/hide based on search term
            items.forEach(item => {
                const textContent = item.innerText.toLowerCase();

                // If search term is found in item text, display the item, otherwise hide it
                if (textContent.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

</body>

</html>