<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <a href="login.php">Login</a>
        <h1>
            Registration form
        </h1>
        <form method="post" action="main.php">
            <fieldset>
                <legend>Basic Information:</legend>
                <label>First Name: </label>
                <input type="text" name="fName">
                <br>
                <label>Last Name: </label>
                <input type="text" name="lName">
                <br>

                <label >Gender: </label> 
                <input type="radio" name="gender" value="male">
                <label >Male</label>               
                <input type="radio" name="gender" value="female">
                <label >Female</label>
                <br>
                <label>Date of Birth: </label>
                <input type="date" name="dob">
                <br>
                <label>Religion: </label>
                <select name="Religion">
                    <option></option>
                    <option>Islam</option>
                    <option>Hindu</option>
                    <option>Christan</option>
                    <option>Buddha</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Contact Information:</legend>
                <label >Present Address: </label>
                <input type="textarea" name="preAddress">
                <br>
                <label">Permanent Address: </label>
                <input type="textarea" name="perAddress" >
                <br>
                <label">Phone: </label>
                <input type="tel" name="phoneNo" >
                <br>
                <label >Email: </label>
                <input type="email" name="email">
                <br>
                <label >Personal Website Link: </label>
                <input type="website" name="website">
                <br>
            </fieldset>
            <fieldset>
                <legend>Account Information:</legend>
                <label >Username: </label>
                <input type="text" name="username">
                <br>
                <label">Password: </label>
                <input type="password" name="pass" >
                <br>
            </fieldset>
                <input type="submit" name="submit">
        </form>
    </body>
</html>
