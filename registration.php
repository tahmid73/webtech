<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>
            Registration form
        </h1>
        <form action="#">
            <fieldset>
                <legend>Basic Information</legend>
                <label>First Name:</label>
                <input type="text" name="fName">
                <br>
                <label>Last Name:</label>
                <input type="text" name="lName">
                <br>

                <label >Gender</label> 
                <input type="radio" name="Male">
                <label >Male</label>               
                <input type="radio" name="Female">
                <label >Female</label>
                <br>
                <label>Date of Birth</label>
                <input type="date" name="dob">
                <br>
                <label>Religion</label>
                <select name="Religion">
                    <option>Islam</option>
                    <option>Hindu</option>
                    <option>Christan</option>
                    <option>Buddha</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Contact Information:</legend>
                <label >Present Address</label>
                <input type="textarea" name="preAddress">
                <br>
                <label">Permanent Address</label>
                <input type="textarea" name="perAddress" >
                <br>
                <label">Phone:</label>
                <input type="tel" name="phoneNo" >
                <br>
                <label >Email:</label>
                <input type="email" name="email">
                <br>
                <label >Personal Website Link:</label>
                <input type="website" name="website">
                <br>
            </fieldset>
                <input type="submit" name="submit">
        </form>
    </body>
</html>
