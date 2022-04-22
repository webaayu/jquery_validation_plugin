<!doctype html>
<html>
    <head>
    <title>Application Form</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="custom02.js"></script>

    </head>
    <body class="body">
        <div class="div">    
            <h2 class="h2">Application Form</h2>
            <form id="my_form" name="my_form" action="form_submit.php" method="POST">
                <div class="new">
                    <div class="component">
                        <label>Full Name</label>
                        <input type="text" id="name" class="inpt" name="name" >
                    </div>
                    
                    <div class="component">
                        <label>Email Address</label>
                        <input id="email" class="inpt" type="text" name="email">
                    </div>
                    
                    <div class="component">
                        <label>Mobile Number</label>
                        <input id="tel" class="inpt" type="text" name="tel">
                    </div>
                    
                    <div class="component">
                        <label>Country</label>
                        <select class="select" id="optn" name="option">
                            <option class="option" value="">select</option>
                            <option class="option" value="India">India</option>
                            <option class="option" value="Australia">Australia</option>
                            <option class="option" value="Canada">Canada</option>
                            <option class="option" value="Britan">Britan</option>
                        </select>   
                    </div>
                    
                    <div class="component">
                        <label for="gender">Gender</label>    
                            <div class="choice" id="sel_rd">
                             <label><input type="radio" id="male" name="gender" value="M"/>Male</label>
                             <label><input type="radio" id="female" name="gender" value="F"/>Female</label>
                        </div>        
                    </div>

                    <div class="component">
                        <label>Hobbies</label>
                        <span id="italic">(optional)</span>
                            <div class="choice">
                                <input type="checkbox" name="check">Sports
                                <input type="checkbox" name="check">Movies
                                <input type="checkbox" name="check">Music
                            </div>
                    </div>          

                    <div class=submt>
                        <button type="submit" id="sub" class="inpt" value="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        
    </body>
</html>
