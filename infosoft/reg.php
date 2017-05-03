<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration form </title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/infoSoft.css">
    


</head>


   
   
   
   <body>
    

       
 
       
       
       
       
       
       
       
       
       
       
     <header>
        <div class="container-fluid">
            <div class="container">

                <div class="row">

                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        <div class="header-left">

                            <ul class="header-list">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Newsroom</a></li>
                                <li><a href="#">Resources</a></li>
                                <li><a href="#">Investors</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="reg.php">Registration</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                        <div class="header-right">


                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
            <div class="container">
                <h1><u>Register Your Details</u></h1><br>
    <form action="phpcode.php" method="POST">
       <div class="row">
        <div  class="col-md-2">First Name : </div>
        <div  class="col-md-6"><input type="text" name="fname" ></div>
        </div>
        
         <br>
         <div class="row">
             <div class="col-md-2">Second Name : </div>
             <div class="col-md-6"><input type="text" name="sname"> </div>
        </div>
                
                
                 <br>
        <div class="row">
        <div class="col-md-2">User Name : </div>
        <div class="col-md-6"> <input type="text" name="uname"></div>
        </div>
           <br>
        
        <div class="row">
        <div class="col-md-2">Password : </div>
        <div class="col-md-6"><input type="password" name="pass">
            </div>
        </div>
          <br>
        
        <div class="row">
            <div class="col-lg-2 col-md-6">Conform Password : </div> 
            <div class="col-lg-6"><input type="password" name="cpass"></div>
        </div>
          <br>
        
         <div class="row">
             <div class="col-md-2">Email id : </div>
             <div class="col-lg-6"> <input type="email" name="email"> </div>
        </div>
                   <br>
        
        
        <div class="row">
            <div class="col-md-2"> Gender : </div>
            <div class="col-md-6">male <input type="radio" name="gend" value="male"> Female <input type="radio" name="gend" value="female"></div>
        </div>
                <br>
        
        <div class="row">
            <div class="col-md-2"> Qualification : </div>
            <div class="col-md-6"> 
            <input type="checkbox" name="chk" value="bsc"> BSC  
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-2">Location </div>
            <div class="col-md-6">
               <select name="sle">            
            <option>Vizianagaram</option>
            <option>Vizag</option>            
        </select>
            </div>
        </div>
        
        <br>
        
        <div class="row">
            <div class="col-md-2">        Address  </div>
            <div class="col-md-6"> <textarea style="width:200px; height:50px;" name="add"></textarea> <br> </div>
        </div>
       
       <br>
       <div class="row">
           <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">    <div style="text-align:center"><input type="submit" name="submit" >            <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">    <div style="text-align:center"><input type="reset" name="reset" ></div>      </div>
</div>      </div>
                </div>
        
       
        
        
    </form>
        </div>
       </div>
       
</body>
</html>
