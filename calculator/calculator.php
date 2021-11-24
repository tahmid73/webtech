<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="app.js"></script>
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
    <table>
        <form action="" name="form1">
        <tr><input type="text"  name="result" readonly value="" "></tr>
        </form>
        <tr>
            <td><input class="operators" type="button" value="C" onclick="form1.result.value=' '"></td>
        </tr>
        <tr>
            <td><input class="button" type="button" value="7" onclick="insert('7')"></td>
            <td><input class="button" type="button" value="8" onclick="insert('8')"></td>
            <td><input class="button" type="button" value="9" onclick="insert('9')"></td>
            <td><input class="operators" type="button" value="/" onclick="insert('/')"></td>
        </tr>
        <tr>
            <td><input class="button" type="button" value="4" onclick="insert('4')"></td>
            <td><input class="button" type="button" value="5" onclick="insert('5')"></td>
            <td><input class="button" type="button" value="6" onclick="insert('6')"></td>
            <td><input class="operators" type="button" value="x" onclick="insert('*')"></td>
        </tr>
        <tr>
            <td><input class="button" type="button" value="1" onclick="insert('1')"></td>
            <td><input class="button" type="button" value="2" onclick="insert('2')"></td>
            <td><input class="button" type="button" value="3" onclick="insert('3')"></td>
            <td><input class="operators" type="button" value="-" onclick="insert('-')"></td>
        </tr>
        <tr>
            <td><input class="button" type="button" value="0" onclick="insert('0')"></td>
            <td><input class="button" type="button" value="." onclick="insert('.')"></td>
            <td><input class="operators" type="button" value="+" onclick="insert('+')"></td>
            <td><input class="operators" type="button" value="=" onclick="equal()">=</b>
        </tr>
    </table>
    </div>
</body>
</html>
