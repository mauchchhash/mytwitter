<!-- LOGIN -->
<div id='log-in' class='{{ ( Request::route()->getName()==='login' ) || ( Request::route()->getName() == '' )? 'active':'' }}'>
  <form method='POST' action='/login'>
    @csrf
    <input type="email" name='email' placeholder="Email Address">
    <input type="password" name= 'password' placeholder="Password">
    <button type="submit">Login</button>
    <!-- <div class="forget">Forgot your password? <a href="#.">Click Here</a></div> -->
  </form>
</div>
