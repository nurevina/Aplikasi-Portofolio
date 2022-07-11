@extends('template.index-admin')
@section('content')

    <!----------form------->
    <div class="row">
        <div class="kiri">
            <img src="img/ppp.png">
        </div>

        <div class="kanan">
            <div class="signin">
                <p>Don't have an account? <a href="form.html" class="signupBtn">Sign up</a></p>
            </div>

            <div class="title">
                <h1>Welcome to Geevent! <img src="img/waving-hand-2.png" width="30px"></h1>
                <p>Sign in</p>
            </div>

            <form name="submitbtn" id="registration" action="reg.php" method="post">
                <div class="form_atas">
                    <p>
                        <label>Email / Username</label><br>
                        <input type="text" id="fullname" name="fullname" placeholder="account@gmail.com" required/><br>
                    </p> <br>
                    <p>
                        <label>Password</label><br>
                        <input type="text" name="address" placeholder="password" required /><br>
                    </p>
                </div>
                <div class="submitbtn">
                    <p>
                        <input type="submit" name="registration" value="submit" />
                    </p>
                </div>
            </form>
        </div>
    </div>
    @endsection