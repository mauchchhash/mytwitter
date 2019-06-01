<!-- REGISTER -->
<div id='register' class='{{ Request::route()->getName()==='register'? 'active':'' }}'>
  <form method='POST' action='/register'>
    @csrf
    <input type="text" placeholder="Full Name" name='name' required>
    <input type="text" placeholder="Username" name='username' required>
    <input type="email" placeholder="Email Address" name='email' required>
    <input type="password" placeholder="Password" name='password' required>
    <button type="submit">Register</button>
  </form>
</div>
