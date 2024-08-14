<!---
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Sales Data</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Sales Data</h1>
    <div id="daily-sales">Daily Sales: Loading...</div>
    <div id="weekly-sales">Weekly Sales: Loading...</div>

    <script>
        // Function to fetch and update sales data
        function fetchSales(type, elementId) {
            $.ajax({
                url: 'fetch_sales.php',
                method: 'GET',
                data: { type: type },
                dataType: 'json',
                success: function(data) {
                    var totalSales = data.total_sales || 'No data';
                    $('#' + elementId).text(type.charAt(0).toUpperCase() + type.slice(1) + ' Sales: ' + totalSales);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch ' + type + ' sales:', status, error);
                }
            });
        }

        // Set different intervals for daily and weekly sales
        var dailySalesInterval = 24 * 60 * 60 * 1000; // 24 hours
        var weeklySalesInterval = 7 * 24 * 60 * 60 * 1000; // 7 days

        // Fetch data immediately and set intervals
        fetchSales('daily', 'daily-sales');
        setInterval(function() { fetchSales('daily', 'daily-sales'); }, dailySalesInterval);

        fetchSales('weekly', 'weekly-sales');
        setInterval(function() { fetchSales('weekly', 'weekly-sales'); }, weeklySalesInterval);
    </script>
</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate and Store Random Data</title>
    <script src="script.js" defer></script>
</head>
<body>
    <button id="generate-button">Generate and Save Data</button>

    <script>
        document.getElementById('generate-button').addEventListener('click', function() {
            // Generate a random string
            const randomString = randomNumber(10);
            console.log('Generated Random String:', randomString);

            // Send the random string to the server
        });
    </script>
</body>
</html>
