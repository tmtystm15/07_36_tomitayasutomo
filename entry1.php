<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録フォーム</title>
    <link rel="stylesheet" href="sanitize.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>映画の記録</h1>
    <form action="insert1.php" method="post">
        <ul>
            <li class="form-item">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="uk-input" required>
            </li>
            <li class="form-item">
                <label for="day">見た日</label>
                <input type="date" name="day" id="day" class="uk-textarea"></input>
            </li>
            <li class="form-item">
                <label for="starring">主演</label>
                <input type="text" name="starring" id="starring" cols="30" rows="10" class="uk-textarea" required></input>
            </li>
            <li class="form-item">
                <label for="director">監督</label>
                <input type="text" name="director" id="director" cols="30" rows="10" class="uk-textarea" required></input>
            </li>
            <li class="form-item">
                <label for="impression">感想</label>
                <textarea name="impression" id="impression" cols="30" rows="10" class="uk-textarea" required></textarea>
            </li>
            <li class="form-item">
                <label for="url">関連URL</label>
                <input type="text" name="url" id="url" class="uk-textarea" required></input>
            </li>

        </ul>
        <input type="submit" value="送信">
    </form>    
</div>
</body>
</html>