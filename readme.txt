Authentication =>   
    1) Session Based Authentication
    2) Manually Authentication with Auth Class
    3) Starter Kit
        /
     Laravel Breeze
     Larvel Jetstream
     Larvel Fortif
    4)Api Authentication

*****Step of Authentication 
    class UserController extends UserController
    {
        public function login (request $req)
        {
            $cendential = $request -> validate(
                [
                    'email'=> 'required|email'
                    'password'=>'required',
                ]
            )
            if(Auth::attempt($credentials))
            {
                return view('dashboard');
            }
        }
    }
    *** Auth -> is User Table

*** File Confiq/auth.php
  => Auth::user()
  => Auth::id()
  => Auth:check()
  => Auth::guest()
  => Auth::logout()

----> change the table of auth form db 
    go to auth.php file guards=>web=>provider=>'users'