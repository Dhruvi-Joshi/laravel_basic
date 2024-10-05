<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>
       <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">gender</th>
                        <th scope="col">dob</th>
                        <th scope="col">country</th>
                        <th scope="col">status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer as $value)
                    <tr class="">
                        <td scope="row">{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->gender}}</td>
                        <td>{{$value->dob}}</td>
                        <td>{{$value->country}}</td>
                        <td>
                            @if($value->status=="1")
                                Active  
                            @else
                                Inactive
                            @endif
                        </td>

                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        
       </div>
    </body>
</html>
