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
                <label for="name">Enter your name:</label>
                <input type="text" name="name">
                <br>
                <label >Gender</label> 
                <input type="radio" name="Male">
                <label for="gender">Male</label>               
                <input type="radio" name="Female">
                <label for="gender">Female</label>
                <br>
            </fieldset>
            <fieldset>
                <legend>Contact Information:</legend>
                <label for="email">Email:</label>
                <input type="email" name="email">
                <br>
                <label for="phoneNo">Phone:</label>
                <input type="number" name="phoneNo" >
                <br>
            </fieldset>
        </form>
        <fieldset>
                <legend>Academic Information:</legend>
            </fieldset>
    </body>
</html>

<style type="text/css">
    table,tr,td{
        border: 1px solid black;
    }
</style>