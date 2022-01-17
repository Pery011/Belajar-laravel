<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <title>Document</title>
</head>
<body>
    <div class="container">
      @if(session('status'))
      <script
      Swal.fire({
         icon: "success",
          title: 'sukses !',
         text: "{{session('status')}}!"  
        }) 
      </script>
      @endif
     <h1> <div><font color="red"><marquee behavior ="alternate"> Data Dosen </marquee></font></div></h1>
     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nidn</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">No Hp</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($lecturers as $index => $item)
    <tr>
      <td scope="row">{{$index + 1}}</td>
      <td>{{$item->No}}</td>
      <td>{{$item->Nidn}}</td>
      <td>{{$item->Name}}</td>
      <td>{{$item->Address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
    
</body>
</html>