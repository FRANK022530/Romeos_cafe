<style type="text/css">
    
    
</style>


    <p id="dropdownButton" ><i class="fa-solid fa-caret-down"></i></p> 

           <div id="myDropdown" class="dropdown">
           <ul>
               <li> <p><a  href="logout.php">Log out</a></p></li>
               <li> <p class="openModalButton"> Add admin</p></li>
               <li> <p class="openModalButtonnew">ChangePassword</p></li>

              
           </ul>





         
           <div class="modal" id="modal">
            <div class="modal2">
   
    <div class="modal-content">                                                                     
        
        <!-- Content for the modal -->
        <span class="close" id="closeModal">&times;</span>
   <table>
    <tr>
        <td>
            <div class="container1">
                <img src="images/newlogo.jpg">
            </div>
        </td>
        <td>
            <div class="container2">
                <form action="home.php" method="POST">

                <h2>Create Admin Account</h2><br>
                
                <input type="type" name="name" required placeholder="Fullname:">
                
                <input type="type" name="username" required placeholder="Username:">
                
                <input type="password" name="password" required placeholder="Password:">
                <input type="password" name="cpassword" required placeholder="Confirm Password:"><br><br><br>


                <button  type="submit" name="addadmin">NEXT</button>
                
                </form>
        </div>
        </td>
        
    </tr>
</table>
    </div>
    </div>
</div>


   <div class="modalnew" id="modalnew">
            <div class="modal2new">
   
    <div class="modal-content">                                                                     
        
        <!-- Content for the modal -->
        <span class="closenew" id="closeModalnew">&times;</span>

        <table>
    <tr>
        <td>
            <div class="container1">
                <img src="images/newlogo.jpg">
            </div>
        </td>
        <td>
            <div class="container2">
                <form action="process.php" method="POST">
            <h1>Security Question</h1>
          
            <input type="text" name="username" placeholder="Username:">
            
         <select name="question">
             <option value="" disabled selected>Chosen Security Question:</option>
            <option value="Mothers Maiden Name?">Mothers Maiden Name?</option>
            <option value="Name of your Favorite Pet?">Name of your Favorite Pet?</option>
            <option value="Name of your elementary school?">Name of your elementary school?</option>
            <option value="favorite food as a child?">favorite food as a child?</option>
        </select>

       
        <input type="text" name="answer" placeholder="Answer:" required><br><br><br>
<input class="login" type="submit" name="submit" value="SUBMIT">

        </form>
        </div>
        </td>
        
    </tr>
</table>
   
    </div>
    </div>
</div>

<div class="modalnews" id="modalnews">
            <div class="modal2news">
   
    <div class="modal-content">                                                                     
        
        <!-- Content for the modal -->
        <span class="closenews" id="closeModalnews">&times;</span>

       
<table>
    <tr>
        <td>
            <div class="container1">
                <img src="images/logo.jpg">
            </div>
        </td>
        <td>
            <div class="container2">
                <form action="process.php" method="POST">
            <h1>Set Security Question</h1>
           
            <input type="text" name="username" placeholder="Username:" value="<?php echo $username ?>" readonly>
         
         <select name="question">
             <option value="" disabled selected>Chosen Security Question:</option>
            <option value="Mothers Maiden Name?">Mothers Maiden Name?</option>
            <option value="Name of your Favorite Pet?">Name of your Favorite Pet?</option>
            <option value="Name of your elementary school?">Name of your elementary school?</option>
            <option value="favorite food as a child?">favorite food as a child?</option>
        </select>

       
        <input type="text" name="answer" placeholder="Answer:" required><br><br>
<input class="login" type="submit" name="setsecurity" value="SUBMIT">

        </form>
        </div>
        </td>
        
    </tr>
</table>
   
    </div>
    </div>
</div>



<script type="text/javascript">
    


document.getElementById("dropdownButton").addEventListener("click", function() {
  var dropdown = document.getElementById("myDropdown");
  dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
});




var modal = document.getElementById('modal');
var closeModalButton = document.getElementById('closeModal');
var openModalButtons = document.querySelectorAll('.openModalButton');



openModalButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        modal.style.display = 'block';

      
    });
});

closeModalButton.addEventListener('click', function () {
    modal.style.display = 'none';
});

window.addEventListener('click', function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});





var modalnew = document.getElementById('modalnew');
var closeModalButtonnew = document.getElementById('closeModalnew');
var openModalButtonsnew = document.querySelectorAll('.openModalButtonnew');

openModalButtonsnew.forEach(function (button) {
    button.addEventListener('click', function () {
        modalnew.style.display = 'block'; // Corrected from 'modal' to 'modalnew'
    });
});

closeModalButtonnew.addEventListener('click', function () {
    modalnew.style.display = 'none';
});

window.addEventListener('click', function (event) {
    if (event.target == modalnew) { // Corrected from 'modal' to 'modalnew'
        modalnew.style.display = 'none';
    }
});



var modalnews = document.getElementById('modalnews');
var closeModalButtonnews = document.getElementById('closeModalnews');
var openModalButtonsnews = document.querySelectorAll('.openModalButtonnews');

 var success = <?php echo isset($success) && $success ? 'true' : 'false'; ?>;
    if (success) {
        var modalnews = document.getElementById('modalnews');
        modalnews.style.display = 'block';
        // You can add additional JavaScript logic here after the modal is displayed
    }

closeModalButtonnews.addEventListener('click', function () {
    modalnews.style.display = 'none';
});

window.addEventListener('click', function (event) {
    if (event.target == modalnews) { // Corrected from 'modal' to 'modalnew'
        modalnews.style.display = 'none';
    }
});


</script>