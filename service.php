<?php
$title='aviator-venture.Услуги';
$description='AVIATOR-VENTURE услуги';
$meta='';
$keywords='';

include './res/header.php'; ?>
<main class="main">

    <section class="section" >
        <div class="container">
            <h1> Наши услуги</h1>
        </div>

        </div>
    </section>
    
<section class="section">
    <div class="container">
        <h2 class="display-6 text-center mb-4">Цены</h2>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 bg-light">
            <h4 class="my-0 fw-normal">Экспедиции на борту легкомоторных самолетов</h4>
          </div>
          <div class="card-body">
           <h4 class="card-title pricing-card-title"><small class="text-muted fw-light">Цена: </small>от 15 000 грн</h4>
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Наша экспедиция включает полеты на небольших самолетах по самым живописным и уникальным местам мира.</li>
            </ul>
            <a data-toggle="modal" data-target="#exampleModal" class="w-100 btn btn-lg cta-btn js-open-modals bg-light" data-modals="1" href="#succsesOrder">Заказать<i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div><div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 bg-light">
            <h4 class="my-0 fw-normal">Путешествия на борту комфортабельных лайнеров</h4>
          </div>
          <div class="card-body">
           <h4 class="card-title pricing-card-title"><small class="text-muted fw-light">Цена: </small>от 20 000 грн</h4>
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Мы предлагаем путешествия по всему миру на борту комфортабельных лайнеров, с возможностью выбора маршрута и остановок.</li>
            </ul>
            <a data-toggle="modal" data-target="#exampleModal" class="w-100 btn btn-lg cta-btn js-open-modals bg-light" data-modals="1" href="#succsesOrder">Заказать<i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div><div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 bg-light">
            <h4 class="my-0 fw-normal">Опытные пилоты и гиды</h4>
          </div>
          <div class="card-body">
           <h4 class="card-title pricing-card-title"><small class="text-muted fw-light">Цена: </small>от 5 000 грн</h4>
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Все наши пилоты и гиды имеют многолетний опыт работы в авиации и готовы обеспечить безопасность и комфорт наших клиентов во время путешествия.</li>
            </ul>
            <a data-toggle="modal" data-target="#exampleModal" class="w-100 btn btn-lg cta-btn js-open-modals bg-light" data-modals="1" href="#succsesOrder">Заказать<i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      
    </div>
    </div>
</section>

    <div class="modals" data-modals="1">
    <svg class="modals__cross js-modals-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
    <p class="modals__title">Форма заказа</p>
    <div id="divname">
        <form onsubmit='formsend(event)'>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ваше имя" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail11" placeholder="Ваш email" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Телефон" required>
            </div>
            <div style="margin-left:20px;display:flex;align-items:center;" class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <p class="small" style="color: #000;margin-left:10px">Я принимаю <a target="_blank" href="/terms-of-use/" title="Условия обслуживания" rel="nofollow">условия обслуживания</a> и согласны на обработку персональных данных.
             </div>
             <button id="btn-sb" type="submit" class="btn about-btn bg-light"
                     style="margin: 0 auto;display: block;">Заказать<i class="bx bx-chevron-right "></i>
            </button>
        </form>
    </div>
    <script>
        let one = document.getElementById('divname')
        let form = true;
        function formsend(event) {
            event.preventDefault();
            form = false;
            one.innerHTML = `
                        <h3 style="text-align: center; color: #260d1b;">Спасибо!</h3>
                            <p class="text-center">
                            <svg viewBox="0 0 100 100" width="50%" height="auto" style="background-color:rgba(255, 255, 255, 0)">
                                <path stroke-width="7" stroke="#5a3640" fill="none" d="M45.7 10.2L17.6 26.4c-2.7 1.5-4.3 4.4-4.3 7.4v32.4c0 3.1 1.6 5.9 4.3 7.4l28.1 16.2c2.7 1.5 5.9 1.5 8.6 0l28.1-16.2c2.7-1.5 4.3-4.4 4.3-7.4V33.8c0-3.1-1.6-5.9-4.3-7.4L54.3 10.2c-2.7-1.6-5.9-1.6-8.6 0z" style="stroke:rgb(51, 51, 51)"></path>
                                <path fill="#9cafab" d="M47.3 68.4L73.7 42c1.8-1.8 1.8-4.6 0-6.4-1.8-1.8-4.6-1.8-6.4 0L44.1 58.8 32.7 47.4c-1.8-1.8-4.6-1.8-6.4 0-1.8 1.8-1.8 4.6 0 6.4l14.6 14.6c.9.9 2 1.3 3.2 1.3s2.3-.5 3.2-1.3z" style="fill:rgb(171, 189, 129)" ></path>
                                </svg>
                                
                            </p>
                        <p style="text-align: center;color: #260d1b;">Скоро с вами свяжется наш менеджер!</p>    `
        }
    </script>
</div>
<div class="overlay js-overlay-modals"></div>
<script>
    !function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);
    document.addEventListener('DOMContentLoaded', function() {
        var modalsButtons = document.querySelectorAll('.js-open-modals'),
            overlay      = document.querySelector('.js-overlay-modals'),
            closeButtons = document.querySelectorAll('.js-modals-close');
        modalsButtons.forEach(function(item){
            item.addEventListener('click', function(e) {
                e.preventDefault();
                var modalsId = this.getAttribute('data-modals'),
                    modalsElem = document.querySelector('.modals[data-modals="' + modalsId + '"]');
                modalsElem.classList.add('active');
                overlay.classList.add('active');
            });
        });
        closeButtons.forEach(function(item){
            item.addEventListener('click', function(e) {
                var parentmodals = this.closest('.modals');

                parentmodals.classList.remove('active');
                overlay.classList.remove('active');
            });
        });
        document.body.addEventListener('keyup', function (e) {
            var key = e.keyCode;
            if (key == 27) {

                document.querySelector('.modals.active').classList.remove('active');
                document.querySelector('.overlay').classList.remove('active');
            };
        }, false);
        overlay.addEventListener('click', function() {
            document.querySelector('.modals.active').classList.remove('active');
            this.classList.remove('active');
        });
    });
</script> 
    
<section class="section">
    <div  class="container px-4 py-5">
    <h2 class="display-6 text-center mb-4 ">Преимущества</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <h3>Неповторимые впечатления</h3>
        <p>Мы стремимся сделать каждое приключение незабываемым и неповторимым, чтобы наши клиенты получили максимум удовольствия от поездки.</p>
      </div>
      <div class="feature col">
        <h3>Безопасность и комфорт</h3>
        <p>Все наши самолеты оборудованы по последнему слову техники и подвергаются регулярной проверке и обслуживанию. Наши гиды и пилоты имеют многолетний опыт работы и гарантируют безопасность и комфорт наших клиентов во время всего путешествия.</p>
      </div>
      <div class="feature col">
        <h3>Гибкость и индивидуальный подход</h3>
        <p>Мы понимаем, что каждый клиент уникален, поэтому наши программы туров гибки и настраиваются на индивидуальные запросы и предпочтения каждого.</p>
      </div>
    </div>
  </div>
  </section>

</main>



<?php

include './res/footer.php';
?>
