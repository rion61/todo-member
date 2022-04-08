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
    <h4>会員登録</h4>
    <form action="/memberRegister" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="名前">
        </div>
        <div>
            <input type="text" name="tel" placeholder="電話番号">
        </div>
        <div>
            <input type="text" name="email" placeholder="メールアドレス">
        </div>
        <input type="submit" value="登録">
    </form>
</div>

</body>
</html>