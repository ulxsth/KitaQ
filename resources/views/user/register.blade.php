<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/user/reset.css">
    <link rel="stylesheet" href="../../css/user/style_header.css">
    <link rel="stylesheet" href="../../css/user/register.blade.css">
    <script src="../../js/header.js"></script>
</head>

<body>
    <div class="login__wrap">
        <form action="#" method="post">
            <div class="user">
                <p class="login">ログイン</p>
                <input type="text" name="user" required placeholder="ユーザー名" class="txt">
                <input type="text" name="pass" required placeholder="パスワード" class="txt">
                <div class="center">
                    <input type="submit" name="submit" value="ログイン" class="submit">
                </div>
            </div>
        </form>
        <form action="#" method="post">
            <div class="user">
                <p class="login">はじめての方はこちら</p>
                <input type="text" name="user" required placeholder="ユーザー" class="txt">
                <input type="text" name="pass" required placeholder="パスワード" class="txt">
                <label class="rdo"><input type="radio" name="enterprise" onclick="checkRdo(this, 1)">企業アカウントとして登録</label>
                <div class="center">
                    <input type="submit" name="submit" value="新規登録" class="submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>