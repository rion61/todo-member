<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>登録画面</title>

</head>
<body>
    <div style="width: 500px; text-align:center; margin: 100px auto;">
    <h4>会員登録 会員ID:{{$member->id}}</h4>
    <form action="/memberEdit" method="post">
        @csrf
        <input class="form-control" type="text" name="id" value="{{$member->id}}" hidden>
        <div class="form-group">
            <input class="form-control" type="text" name="name" value="{{$member->name}}">
            <input class="form-control" type="text" name="tel" value="{{$member->tel}}">
            <input class="form-control" type="text" name="email" value="{{$member->email}}">
            <button type="submit" class="btn btn-secondary">編集</button>
        </div>
   
        <div class="form-group">
            <a href="/memberDelete/{{$member->id}}"><button type="button" class="btn btn-secondary">削除</button></a>
            <!-- <button type="submit" class="btn btn-secondary" formaction="{{ url('/memberDelete') }}">
                削除
            </button> -->
        </div>
    </from>
</div>


</body>
</html>