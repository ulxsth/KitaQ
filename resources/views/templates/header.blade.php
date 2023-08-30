<header class="site-header">
    <div class="wrapper site-header__wrapper">
        <div class="status__wrap">
            <a href="#" class="brand">(企画名)</a>
            <div class="status">
                <p class="user_name">[ユーザー名]</p>
                <div class="circle_enterprise"></div>
                <p class="account">企業</p>
            </div>
        </div>
        <nav class="nav">
            <button class="nav__toggle" aria-expanded="false" type="button" onclick="toggleChange()">
                Menu
            </button>
            <ul class="nav__wrapper">
                <li class="nav__item"><a href="#"><span class="small">企業情報</span>登録</a></li>
                <li class="nav__item"><a href="#"><span class="small">企業情報</span>更新</a></li>
                <li class="nav__item"><a href="/corporate/index">企業検索</a></li>
                <li class="nav__item"><a href="#">ログアウト</a></li>
            </ul>
        </nav>
    </div>
</header>
<script>
    function toggleChange() {
        var navToggle = document.querySelector(".nav__toggle");
        var navWrapper = document.querySelector(".nav__wrapper");

        if (navWrapper.classList.contains("active")) {
            navToggle.setAttribute("aria-expanded", "false");
            navToggle.setAttribute("aria-label", "menu");
            navWrapper.classList.remove("active");
        } else {
            navWrapper.classList.add("active");
            navToggle.setAttribute("aria-label", "close menu");
            navToggle.setAttribute("aria-expanded", "true");
        }
    }
</script>