<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/member.css">
    <title>登録画面</title>
</head>

<body>
  
<div class="top">
    <div class="registerLink" style="text-align:right;">
        <a href="/register"> >>登録　</a>   
    </div>
    <div>
        <table class="table" border="1">
            <tr>
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                <th> </th>
            </tr>
            @foreach($member as $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->tel}}</td>
                    <td>{{$value->email}}</td>
                    <td><a href="/edit/{{$value->id}}"> >>編集 </a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
    


</body>
</html>