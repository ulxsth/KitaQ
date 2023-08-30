<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite([
    'resources/css/user/reset.css',
    'resources/css/user/style_header.css',
    'resources/css/user/register.blade.css'
    ])
</head>

<body>
    @include('templates.header')
    <div class="login__wrap">
        <form action="#" method="post">
            <div class="user">
                <p class="login">ログイン</p>
                <input type="email" name="mail" required placeholder="メールアドレス" class="txt">
                <input type="text" name="pass" required placeholder="パスワード" class="txt">
                <div class="center">
                    <input type="submit" name="submit" value="ログイン" class="submit">
                </div>
            </div>
        </form>
        <form action="#" method="post">
            <div class="user">
                <p class="login">はじめての方はこちら</p>
                <input type="email" name="mail" required placeholder="メールアドレス" class="txt">
                <input type="text" name="user" required placeholder="ユーザー名" class="txt">
                <input type="text" name="pass" required placeholder="パスワード" class="txt">
                <label class="rdo"><input type="checkbox" name="enterprise">企業アカウントとして登録</label>
                <div class="center">
                    <input type="submit" name="submit" value="新規登録" class="submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>