<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('save')}}" method="post">
        @csrf
      <label>Enter Product Name</label>  <input type="text" name="pro_name"/>
      <input type="submit" value="insert"/>
    </form>

</body>
</html>