<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="../css/resource_page.css">
</head>
<body>
    <div class="container">
        <header>
            <a href="../coaches/dashboard.php" class="back-link"><i class="fas fa-arrow-left"></i></a>
            <h1>Resources</h1>
        </header>
        <main id="resourceContainer">
            <div class="resource">
                <h2>Resource 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor odio eget elit feugiat, et tempus lectus dignissim.</p>
                <input type="file" name="resource1">
                <button onclick="deleteResource(this)">Delete Resource</button>
            </div>
            <!-- Add more resource divs dynamically -->
        </main>
        <button onclick="addResource()">Add Resource</button>
    </div>

    <script>
        let resourceCounter = 1; // Counter for tracking resource IDs
        
        // Function to add a new resource div
        function addResource() {
            resourceCounter++;
            const newResourceDiv = `
                <div class="resource">
                    <h2>Resource ${resourceCounter}</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor odio eget elit feugiat, et tempus lectus dignissim.</p>
                    <input type="file" name="resource${resourceCounter}">
                    <a href="#">Read More</a>
                    <button onclick="deleteResource(this)">Delete Resource</button>
                </div>
            `;
            document.getElementById('resourceContainer').insertAdjacentHTML('beforeend', newResourceDiv);
        }

        // Function to delete a resource div
        function deleteResource(button) {
            button.parentNode.remove();
        }
    </script>
</body>
</html>
