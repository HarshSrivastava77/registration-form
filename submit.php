<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-page">
    <div class="form-card" style="max-width: 520px; margin: 0 auto;">
        <div class="form-header">
            <h1>Application Submitted</h1>
            <p>Here is the information you have registered for your friend.</p>
        </div>

        <div class="output-box">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($_POST['address'] ?? '', ENT_QUOTES, 'UTF-8')); ?></p>
        </div>

        <div class="form-footer" style="margin-top: 18px; justify-content: flex-end;">
            <a href="index.html" style="text-decoration: none;">
                <button type="button">Back to Form</button>
            </a>
        </div>
    </div>
</div>

</body>
</html>
