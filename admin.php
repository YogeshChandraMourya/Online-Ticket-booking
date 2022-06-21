<!doctype html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
   <title>E-Ticket Booking</title>
   <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="logo.png"alt="">
            </div>
            <ul class="nav-area">
                <li><a href="#section1">Home</a></li>
                <li><a href="#section2">Add place</a></li>
                <li><a href="#section3">Update Tickets</a></li>
                <li><a href="#section4">Remove place</a></li>
            </ul>
        </div>
        <div id="section1">
            <h1>ADD PLACE</h1>
            <div class="contact-form">
                <form action="addplace.php" method="POST">
                <label for="State">Name of the Place: </label>
                <input type="text" size="30" maxlength="40"name="NameofthePlace">
                Location<input type="text" size =30 maxlength=40 name="Location">
                <br>
                <br> Available time From<input type="time"name="AvailabletimeFrom">Am 
                <br>
                <br>
                Available time upto <input type="time" name="Availabletimeupto" id="">Pm
                <br>
                <br>
                Cost of ticket for Child<input type= "number" min=100 maxlength=5000 name="CostofticketforChild">
                <br>
                <br>
                Cost of ticket for Adult<input type= "number" min=100 maxlength=5000 name="CostofticketforAdult">
                <br>
                <br>
                Availabe tickets <input type="number" min=10 maxlength=500 name="Availabletickets">
                <input type="Submit" value="Update">  
                </form>
                </div>            
        </div>
        <div id="section2">
        <h1>ADD PLACE</h1>
            <div class="contact-form">
                <form action="addplace.php" method="POST">
                <label for="State">Name of the Place: </label>
                <input type="text" size="30" maxlength="40"name="NameofthePlace">
                Location<input type="text" size =30 maxlength=40 name="Location">
                <br>
                <br> Available time From<input type="time"name="AvailabletimeFrom"> 
                <br>
                <br>
                Available time upto <input type="time" name="Availabletimeupto" id="">
                <br>
                <br>
                Cost of ticket for Child<input type= "number" min=100 maxlength=5000 name="CostofticketforChild">
                <br>
                <br>
                Cost of ticket for Adult<input type= "number" min=100 maxlength=5000 name="CostofticketforAdult">
                <br>
                <br>
                Availabe tickets <input type="number" min=10 maxlength=500 name="Availabletickets">
                <input type="Submit" value="Update">  
                </form>
            </div>    
         </div>
        <div id="section3">
            <h1>UPDATE TICKETS</h1>
            <div class="contact-form">
                <form action="update.php"method="POST">
                Name of the Place<input type= "text" size=100 maxlength=50 name="NameofthePlace">
                <br>
                <br>
                Cost of ticket for Child<input type= "number" min=100 maxlength=5000 name="CostofticketforChild">
                <br>
                <br>
                Cost of ticket for Adult<input type= "number" min=100 maxlength=5000 name="CostofticketforAdult">
                <br>
                <br>
                <input type="Submit" name="update" value="Update">
            </form>   
            </div>
        </div> 
        <div id="section4">
            <h1>REMOVE PLACE</h1>
            <div class="contact-form">
                <form action="delete.php" method="POST">
                Enter the place to remove<input type="text" size="30" maxlength="40" name="NameofthePlace"><br>
                <input type="Submit" name="delete" value="Update">
            </form>   
            </div>
        </div> 
        
    </header>
</body>
</html>