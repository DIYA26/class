<!DOCTYPE html>
<html>
    <head>
        <title>
            Form
        </title>
    <script type="text/javascript" src="regValidations.js"></script>
    </head>
<body>
    <h4> Fill the form carefully.</h4>
    <h1><strong>JAJU COACHING CLASSES</strong>
        
    </h1>
    <form name="regform" method="post" action="signupuser.php" onSubmit="return check();" >
        
        <fieldset>
            <legend>Personal Information</legend>
        <label > First Name</label>
        <input type="text" name="fname" required>
        <br><br>
        <label>Last Name</label>
        <input type="text" name="lname">
        <br><br>
        <label>Gender</label>
        <input type="radio" name="gender" value="Male">
        Male
        <input type="radio" name="gender" value="Female">
        Female
        <br><br>
        </fieldset>
        <br><br>
        <fieldset>
            <legend> Academic Information</legend>
        
        <br><br>
        <label>Class</label>
        <select name="class">
            <option value="6">6</option> 
            <option value="7">7</option> 
            <option value="8">8</option> 
            <option value="9">9</option> 
            <option value="10">10</option> 
             
        </select>
        <label>School name</label>
        <select name="sname">
            <option value="Residential">Residential</option> 
            <option value="Vikhe">Vikhe</option> 
            <option value="Bharade">Bharade</option> 
        </select>
        <br><br>
        </fieldset>
        <br><br>
        <fieldset>
        <legend>Login Information</legend>
        <label > Email Id</label>
        <input type="text" name="email" required>
        <label > Username</label>
        <input type="text" name="uname" required>
        <label > Password</label>
        <input type="password" name="pw" required>
        <br><br>
        <label > Confirm Password</label>
        <input type="password" name="cpw" required>
        <br><br>
        </fieldset>
        <br><br>
        <input type="submit" value="submit">
        <br><br>

       
    </form>
</body>
</html>