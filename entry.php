<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks-Entry</title>
</head>
<body>
    <form action="includes/startentry.inc.php" method = "POST">
        <label for="">Class</label>
        <select name="class" id="">
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <label for="">Section</label>
        <select name="section" id="">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
        </select>
        <label for="">Subject</label>
        <select name="subject" id="">
            <option value="English">English</option>
            <option value="Hindi">Hindi</option>
            <option value="Maths">Maths</option>
            <option value="Science">Science</option>
            <option value="SST">SST</option>
        </select>
        <label for="">Exam</label>
        <select name="exam" id="">
            <option value="FA1">FA1</option>
            <option value="OD1">OD1</option>
            <option value="OA">Online Assessment</option>
        </select>
        <button type = "submit">Submit</button>
    </form>
</body>
</html>