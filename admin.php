<!DOCTYPE html>
<html lang ="en">
<head>
    
        <title>Document</title>
        <link rel="stylesheet" href="style.css">  
<style>
    *{
        margin: 0px;
        padding: 0px;
        font-family: century;
    }
   header{
   background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(IMAGES/3.jpg);
   height: 122vh;
   background-size: cover;
   background-position: center;
   min-height: 100px;
   
   }
   ul{
    float: right;
    list-style-type: none;
    margin-top: 30px;
    min-height: 400px;
    margin-right: 60px;
    font-size: 17px;
   }
   ul li{
    display: inline-block;
   }
   ul li a{
    text-decoration: none;
    color: #fff;
    padding: 5px 20px;
    border: 1px solid transparent;
    transition:  0.5 ease;
   }
   
   ul li a:hover{
    background-color: #fff;
    color: #000;
   }
   ul li.active a{
    background-color: #fff;
    color: #000;
   }
   .title{
    position: absolute;
    top: 30%;
    left: 50px;
    text-align: center;
   }
   .title h1 {
    color: #fff;
    font-size: 50px;
   }
   /* Sidenav closed by default */
.sidenav {
    height: 100%;
    width: 0; /* Width set to 0 when closed */
    position: fixed;
    top: 0;
    left: 0;
    background-color: #111111;
    overflow-x: hidden;
    transition: 0.5s;
    z-index: 1050;
}


.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
/* Styles for open sidenav */
.sidenav.open {
    width: 260px; /* Width when open */
}

/* Close button style */
.sidenav .closebtn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 36px;
    color: #eb1d1d;
    cursor: pointer;
    z-index: 1060;
}

.sidenav .closebtn:hover {
    color: #f1f1f1;
}

</style>
</hea>
<body>
    <header>

            
   
    
    <div class ="main">
        <ul>
           <li class="active" ><a href="admin.html">Admin Menu</a>
</li>
<li><a href="register.html">Register</a></li>
<li><a href="login.html">Login</a></li>
    <li><a href="admnMm.html">Admin Main. Menu</a></li>
    <li><a href="userMm.html">User Main.Menu</a></li>
    <li><a href="librarymenu.html">Library Menu</a></li>
    <li><a href="librarianMenu.html">Librarian Menu</a></li>
 </ul>
    </div>
    <div class="title">
        <h1>LIBRARY MANAGEMENT APPLICATION <br>
     ACCRA TECHNICAL UNIVERSITY</h1>
    </div>
    <ul>
    <div class="subMain">
    <li><a href="addNewB.html">Add a New Book</a></li>
<li><a href="find.html">Readers Opt(Find a Book)</a></li>
<li><a href="readersOption.html">Readers Opt(Edit a Book)</a></li>
<li><a href="today's.html">Today's Issue Inquiry</a></li>
<li><a href="issueReturnBook.html">Issue Return a Book</a></li>
<li><a href="userReport.html">User Report</a></li>
<li><a href="bookCodeReport.html">Book Code Report</a></li>
<li><a href="aboutMenu.html">Book Type & About Menu</a></li>
    </header>
    
    <div id="mySidenav" class="sidenav">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
            <li><a href="#" onclick="showDashboard()">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="department_list.php">Departments</a></li>
            <li><a href="attendance.php">Attendance</a></li>
            <li><a href="leave.php">Leave</a></li>
            <li><a href="training.php">Training</a></li>
            <li><a href="evaluation.php">Evaluation</a></li>
            <li><a href="list_vacations.php">Vacations</a></li>
            <li><a href="admin_search.php">Search Employees</a></li>
            <li><a href="admin_report.php">Generate Report</a></li>
            <li><a href="admin_update_auth.php">Update User Roles</a></li>
</ul>
</div>
</body>
</html>
