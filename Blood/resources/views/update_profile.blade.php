<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Popup Login Form Design | CodingNepal</title>
      <link rel="stylesheet" href="/assets/css/profile.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css%22/%3E
   </head>
   <body>
      <div class="center">
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Update Profile
            </div>
            <form action="#">
               @csrf
               <div class="data">
                  <label>Name</label>
                  <input type="text" required>
               </div>
               <div class="data">
                  <label>Email </label>
                  <input type="text" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" required>
               </div>
               
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Update</button>
               </div>
               
            </form>
         </div>
      </div>
   </body>
</html>