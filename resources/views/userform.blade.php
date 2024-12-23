<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Form Registration</title>
</head>

<body>
    <form method="post" action="{{ route('userstore')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputDate">Date</label>
            <input name="date" type="date" class="form-control" id="inputDate">
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select name="state" id="inputState" class="form-control">
                    <option value="" selected>Choose...</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="pune" >Pune</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputFile">Profile Image</label>
                <input name="profileimage" type="file" class="form-control" id="inputFile">
            </div>
            <div class="form-group col-md-2">
                <label for="inputGender">Gender</label>
                <br>
                <label><input name="gender"  type="radio" value="Male" class="form-control">Male
                </label>
                
                <label><input name="gender" type="radio"  value="Female" class="form-control">Female
                </label>
            </div>

        </div>
        <button name="submit" type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <style>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </style>
</body>

</html>