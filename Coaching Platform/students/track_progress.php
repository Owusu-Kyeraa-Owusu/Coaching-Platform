<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Tracking</title>
    <link rel="stylesheet" href="../css/track_progress.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <header>
        <a href="../students/dashboard.php" class="back-link"><i class="fas fa-arrow-left"></i></a> <!-- Back arrow icon -->
    </header>
    <header>
        <h1>Progress Tracking</h1>
    </header>
    <main>
        <section class="goal-section">
            <h2>My Counseling Goals</h2>
            <ul>
                <li>
                    <h3>Goal 1</h3>
                    <p>Description of goal 1 progress...</p>
                    <progress value="50" max="100"></progress>
                </li>
                <li>
                    <h3>Goal 2</h3>
                    <p>Description of goal 2 progress...</p>
                    <progress value="30" max="100"></progress>
                </li>
                <!-- Add more goals as needed -->
            </ul>
        </section>
        <section class="goal-section">
            <h2>My Coaching Goals</h2>
            <ul>
                <li>
                    <h3>Goal 3</h3>
                    <p>Description of goal 1 progress...</p>
                    <progress value="70" max="100"></progress>
                </li>
                <li>
                    <h3>Goal 4</h3>
                    <p>Description of goal 4 progress...</p>
                    <progress value="40" max="100"></progress>
                </li>
                <!-- Add more goals as needed -->
            </ul>
        </section>
    </main>
</body>
</html>
