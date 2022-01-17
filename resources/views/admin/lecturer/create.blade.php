<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="container"> 
     <h1> <div><font color="red"><marquee behavior ="alternate"> DOSEN </marquee></font></div></h1>
<form action="{{route('store-lecturer')}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleInputnidn" class="form-label">Nidn</label>
    <input type="text" name="nidn" class="form-control" id="input nidn">
  </div>
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="inputname">      
  </div>

  <div class="mb-3">
    <label for="exampleInputaddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputaddress">      
  </div>

  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputphone">      
  </div>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
    
</body>
</html>