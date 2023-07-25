<?php
// Initialize the marks array
$marksArray = [];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted subject and marks
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    // Add the subject and marks to the array
    $marksArray[] = ['subject' => $subject, 'marks' => $marks];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subject Marks</title>
</head>
<body>
    <h1>Subject Marks</h1>

    <form method="POST" action="">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br>

        <label for="marks">Marks:</label>
        <input type="number" id="marks" name="marks" required><br>

        <button type="submit">Submit</button>
    </form>

    <?php if (!empty($marksArray)): ?>
        <h2>Submitted Marks:</h2>
        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marksArray as $mark): ?>
                    <tr>
                        <td><?php echo $mark['subject']; ?></td>
                        <td><?php echo $mark['marks']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
