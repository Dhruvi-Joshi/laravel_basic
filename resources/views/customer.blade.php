<!doctype html>
<html lang="en">
    <head>
        <title> </title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <form action="{{url('/')}}/customer" method="post">
            @csrf
           
       <div class="container">
            <h1 class="text-center">Registration</h1>
                
                <x-input type="text" name="name" label="enter name"/> 
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
                <x-input type="email" name="email" label="enter email"/> 
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
                <x-input type="password" name="password" label="enter password"/> 
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
                <x-input type="password" name="password_confirmation" label="enter confirm password"/> 
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </span>
                <x-input type="text" name="country" label="enter country"/> 
                <span class="text-danger">
                    @error('country')
                        {{$message}}
                    @enderror
                </span>
                <x-input type="text" name="state" label="enter state"/> 
                <span class="text-danger">
                    @error('state')
                        {{$message}}
                    @enderror
                </span>
                <x-input type="text" name="address" label="enter address"/> 
                <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                </span>
                <span>select gender</span>
                <br>
                <input type="radio" name="gender" value="male">male
                <input type="radio" name="gender" value="female">female
                <input type="radio" name="gender" value="other" >other
                <x-input type="date" name="dob" label="enter birthday date"/>
                <span class="text-danger">
                    @error('dob')
                        {{$message}}
                    @enderror
                </span>
            <br>
            <button class="btn btn-primary">Submit</button>
       </div>
</form>
    </body>
</html>
