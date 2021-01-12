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

                        <h2> Edit Form </h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('citizens.update',$citizen->citizen_id)}}">
                            @csrf
                            {{-- @method('PATCH') --}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input name="citizen_fullname" type="text"  value="{{$citizen->citizen_fullname}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_fullname')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">City</label>
                                <input name="citizen_city" type="text" value="{{$citizen->citizen_city}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_city')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NID</label>
                                <input name="citizen_nid" type="text"  value="{{$citizen->citizen_nid}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_nid')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                                <input name="citizen_mobile" type="text"  value="{{$citizen->citizen_mobile}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_mobile')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input name="citizen_address"  value="{{$citizen->citizen_address}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            @error('citizen_address')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
 			                @enderror
                            <div class="mb-3">
                            <select name="citizen_gender"class="form-select" aria-label="Default select example">
                                <option selected>{{$citizen->citizen_gender}}</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                
                              </select>
                            </div>
                            @error('citizen_gender')
 			               <p style="color: red;font-size:0.7rem">{{$message}}</p>
                             @enderror
                             
                            <div class="mb-3  text-center ">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>


        

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

