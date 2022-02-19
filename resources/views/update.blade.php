<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('saving',$data->pro_id)}}" method="post">
   @csrf
        <input type="text" name="proid" value=" {{ $data->pro_id }}" />
        <input type="text" name="proname" value=" {{ $data->pro_name }}"/>
<input type="submit" value="Save" />
    </form>
</body>
</html>