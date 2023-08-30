<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite([
    'resources/css/user/reset.css',
    'resources/css/user/style_header.css',
    'resources/css/user/index.blade.css'
    ])
</head>

<body>
    @include('templates.header')
    <div class="flex">
        <div onclick="location.href = '/property/demo'" class="link">
            <img alt="no-image" src="../../img/ibm.jpg">
        </div>
        <div class="menu" id="MN" width="auto">
            <div class="table">
                <p class="tableHead">企業名</p>
                <p class="tableData">日本アイ・ビー・エム（株）北九州事業所</p>
            </div>

            <div class="table">
                <p class="tableHead">場所</p>
                <p class="tableData">〒802-0001 福岡県北九州市小倉北区浅野２丁目１４−２</p>
            </div>

            <div class="table">
                <p class="tableHead">URL</p>
                <div class="tableData">
                    <a href="https://www.ibm.com/jp-ja/about/office">https://www.ibm.com/jp-ja/about/office</a>
                </div>
            </div>

            <div class="table">
                <p class="tableHead">説明</p>
                <p class="tableData">
                    電話番号:0120-339080（フリーダイヤル）<br>
                    最寄駅: JR 小倉駅北口 徒歩3分
                </p>
            </div>
        </div>
    </div>
    <div class="flex">
        <img alt="no-image" src="/img/no-image.jpg">
        <div class="menu" id="MN" width="auto">
            <div class="table">
                <p class="tableHead">企業名</p>
                <p class="tableData">ハッカソン</p>
            </div>

            <div class="table">
                <p class="tableHead">場所</p>
                <p class="tableData">〒802-0077 福岡県北九州市小倉北区馬借１丁目５−２５ ホラヤビル </p>
            </div>

            <div class="table">
                <p class="tableHead">URL</p>
                <div class="tableData">
                    <a href="https://photos.app.goo.gl/kTYw7XLrSX21xjMx8">https://photos.app.goo.gl/kTYw7XLrSX21xjMx8</a>
                </div>
            </div>

            <div class="table">
                <p class="tableHead">説明</p>
                <p class="tableData">説明</p>
            </div>
        </div>
    </div>
    <div class="flex">
        <img alt="no-image" src="../../img/no-image.jpg">
        <div class="menu" id="MN" width="auto">
            <div class="table">
                <p class="tableHead">企業名</p>
                <p class="tableData">ハッカソン</p>
            </div>

            <div class="table">
                <p class="tableHead">場所</p>
                <p class="tableData">〒802-0077 福岡県北九州市小倉北区馬借１丁目５−２５ ホラヤビル </p>
            </div>

            <div class="table">
                <p class="tableHead">URL</p>
                <div class="tableData">
                    <a href="https://photos.app.goo.gl/kTYw7XLrSX21xjMx8">https://photos.app.goo.gl/kTYw7XLrSX21xjMx8</a>
                </div>
            </div>

            <div class="table">
                <p class="tableHead">説明</p>
                <p class="tableData">説明</p>
            </div>
        </div>
    </div>
</body>

</html>