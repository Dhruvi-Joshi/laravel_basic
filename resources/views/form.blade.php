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
        <form action="{{url('/')}}/register" method="post">
            @csrf
            <!-- <pre>
                @php
                    print_r($errors->all());
                @endphp
            </pre> -->
       <div class="container">
            <h1 class="text-center">Registration</h1>
            <!-- <div class="form-group">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}"/>
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>

                <div class="form-group">
                <label for="" class="form-label">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('email')}}"/>
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
                </div>

                <div class="form-group">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId"/>
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
                </div>

                <div class="form-group">
                <label for="" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId"/>
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </span>
                </div> -->
                <x-input type="text" name="name" label="enter name"/> 
                <x-input type="email" name="email" label="enter email"/> 
                <x-input type="password" name="password" label="enter password"/> 
                <x-input type="password" name="password_confirmation" label="enter confirm password"/> 
            <button class="btn btn-primary">Submit</button>
       </div>
</form>
    </body>
</html>
