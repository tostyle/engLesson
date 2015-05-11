<?php include('header.php'); ?>
  <form class="form-signin">
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="username" class="sr-only">Username</label>
    <input type="text" 
          name="username" 
          id="username" 
          class="form-control" 
          placeholder="Enter Username" 
          required="" 
          autofocus="">
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required="">
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
<?php include('footer.php'); ?>
