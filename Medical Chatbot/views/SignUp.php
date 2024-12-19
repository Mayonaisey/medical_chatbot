<!DOCTYPE html>
<html>
   <head>
     <title>Sign Up</title>
   </head>
   <body>
     <h1>Sign Up</h1>
     <form action="/addUser" method="post">
       <label>First Name:</label><br>
       <input type="text" name="FName" required><br>

       <label>Last Name:</label><br>
       <input type="text" name="LName" required><br>

       <label>Email:</label><br>
       <input type="email" name="Email" required><br>

       <label>Password:</label><br>
       <input type="password" name="Password" required><br>

       <label>Hobby:</label><br>
       <input type="text" name="Hobby"><br>

       <input type="submit" value="Submit" name="Submit">
       <input type="reset">
     </form>
   </body>
</html>
