
<?php include ("Templates/header.php")?>
   
 <div class="heading">
       <h1>Welcome to the Computer Studies Report Form Section</h1> <br> <br>
       </div>
   <div class="container">
     
        <div class="title">Teacher Registration</div>
        
    <div class="content">
    <form action="index.php" method="post">
            <div class="user-details">
            <div class="input-box">
               <span class="details">First Name</span> 
               <input type="text" name="fName" placeholder="Enter first name" required>
                
            </div>
            
            <div class="input-box">
               <span class="details">Surname</span> 
               <input type="text" name="surname" placeholder="Enter surname" required> 
            </div>
            
            <div class="input-box">
               <span class="details">School</span> 
               <input type="text" name="school" placeholder="Enter school name" required> 
            </div>
            
            <div class="input-box">
               <span class="details">Subject</span> 
               <input type="text" name="subject" placeholder="Enter subject" required> 
            </div>
    
            <div class="input-box">
               <span class="details">Enter Password</span> 
               <input type="password" name="password" placeholder="Enter your Password" required> 
            </div>
            
                <div class="input-box">
               <span class="details">Confirm Password</span> 
               <input type="password" name="cpassword" placeholder="Confirm your Password" required> 
            </div>
        </div>
        
        <div class="class-details">
           <input type="radio"  name="class" id="cdot-1">
           <input type="radio"  name="class" id="cdot-2">
           <input type="radio" name="class" id="cdot-3">
           
            <span class="class-title">Class</span>
            <div class="category1">
                <label for="cdot-1">
                    <span class="cdot cone"></span>
                    <span class="clas">9A</span>
                </label>
                
                <label for="cdot-2">
                    <span class="cdot ctwo"></span>
                    <span class="clas">9B</span>
                </label>
                
                <label for="cdot-3">
                    <span class="cdot cthree"></span>
                    <span class="clas">9C</span>
                </label>
            </div>
        </div>
        
        <div class="gender-details">
           <input type="radio"  name="gender" id="dot-1">
           <input type="radio"  name="gender" id="dot-2">
           <input type="radio" name="gender" id="dot-3">
           
            <span class="gender-title">Gender</span>
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                </label>
                
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
                
                <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Other</span>
                </label>
            </div>
        </div>
        
    <div class="button">
        
        <input type="submit" value="Register">
    </div>
    </form>
    </div>
    </div>
    
