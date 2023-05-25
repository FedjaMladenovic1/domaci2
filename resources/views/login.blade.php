<h1>User Login</hl>
<form action="user" method= "POST" >
    @csrf
    <input type="text" name="user" placeholder="enter user name" > <br> <br>
    <input type="password" name="password" placeholder="enter user password"> <br> <br>
    <button type="submit" >Login</button>
</from> 