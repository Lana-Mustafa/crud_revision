<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-title text-center mt-2">

                        <h2> Create Form </h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('citizens.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input name="citizen_fullname" type="text"  value="{{old('citizen_fullname')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_fullname')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">City</label>
                                <input name="citizen_city" type="text" value="{{old('citizen_city')}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_city')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NID</label>
                                <input name="citizen_nid" type="text" value="{{old('citizen_nid')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_nid')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                                <input name="citizen_mobile" type="text" value="{{old('citizen_mobile')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_mobile')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input name="citizen_address" value="{{old('citizen_address')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_address')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                            <select name="citizen_gender"class="form-select" aria-label="Default select example">
                                <option selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                
                              </select>
                            </div>
                            @error('citizen_gender')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
                             @enderror
                             
                            <div class="mb-3  text-center ">
                                <button type="submit" class="btn btn-info">Create</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-12">

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">City</th>
                            <th scope="col">NID</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Address</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    
            @foreach($citizens as $citizen)
                            <tr>

                                <th scope="row">{{$citizen->citizen_id}}</th>
                                <td>{{$citizen->citizen_fullname}}</td>
                                <td>{{$citizen->citizen_gender}}</td>
                                <td>{{$citizen->citizen_city}}</td>
                                <td>{{$citizen->citizen_nid}}</td>
                                <td>{{$citizen->citizen_mobile}}</td>
                                <td>{{$citizen->citizen_address}}</td>
                                <td><a href="{{route('citizens.edit',$citizen->citizen_id)}}" role="button" class="btn btn-warning ">Edit</a></td>
                                <form method="post" action="{{route('citizens.destroy',$citizen->citizen_id)}}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                <td> <button class="btn btn-danger " value="DELETE"  >Delete</button></td>
                                </form>

                            </tr>
                  @endforeach    


                    </tbody>
                </table>
            </div>







        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

