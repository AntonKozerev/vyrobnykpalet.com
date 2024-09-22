<footer class="text-center text-lg-start bg-light text-muted">

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="/">aviator-venture.com</a>
        
        <div class="credits">
            <a class="text-reset fw-bold" href="/privacy-policy/"> Политика конфиденциальности</a><br>
             <a class="text-reset fw-bold" href="/terms-of-use/">Условия обслуживания</a><br>
             <a class="text-reset fw-bold" href="/cookies/"> Политика Cookies</a>
        </div>
    </div>

</footer>

<div class="cookies text-center  bg-light text-muted">
        <p class="head">COOKIES</p>
        <p>
        Этот сайт использует файлы cookie, нажав принять или остаться в этой истории, вы даете нам разрешение на использование файлов cookie
             <a class="link_cookies" href="/cookies/">Далее...</a>
         </p>
         <a href="#" class="close_cookies button-frst btn btn-default">Я согласен</a>
    </div>
    <script>
        let coockies = document.querySelector(".close_cookies");
        let block_cookies = document.querySelector(".cookies");

        coockies.onclick = function(e) {
            e.preventDefault()
            block_cookies.style.display = "none";
        };
    </script> 
<script src="/scripts/bootstrap.min.js"></script>
<script src="/scripts/main.js"></script>
</body>

</html>
