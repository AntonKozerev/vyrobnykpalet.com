<?php
$title='aviator-venture.Контакты';
$description='AVIATOR-VENTURE контакты';
$meta='';
$keywords='';

include './res/header.php'; ?>
<main class="main">

    <section class="section" >
        <div class="container">
            <h1> Наши контакты</h1>
        </div>

        </div>
    </section>
    <section class="section">
    <div class="container">
    <h2 class="display-6 text-center mb-4 ">О нас</h2>
    <div class="row featurette">
          <div class="col-md-7 ">
            
            <p class="lead">Добро пожаловать на наш сайт воздушных приключений и экспедиций! На комфортабельных самолетах с опытными пилотами и гидами мы обеспечиваем незабываемые приключения по всему миру. Преимущества наших туров перечислены ниже:</p>
          </div>
          <div class="col-md-5 order-md-1 about">
                <img src="/img/about.jpg" class="img-fluid" alt="О нас">
    
          </div>
        </div>
        </div>
    </section>
    <section class="section">
    <div class="container">
    <h2 class="display-6 text-center mb-4 ">Контакты</h2>
    <div class="row ">
          <div class="col-md-5 order-md-2">
            <h3 >Наш адрес</h3>
            <p > Полярная 143, Стрый, Украина, 78323</p>
            <h3 >Email</h3>
            <p > contacts@aviator-venture.com</p>
            
            <h3 >Телефон</h3>
            <p > 067 43 28 024</p>
            
            
          </div>
          <div class="col-md-7 order-md-1 map ">
                <img src="/img/map.png" class="img-fluid"  alt="Контакты">
    
          </div>
        </div>
        </div>
    </section>

</main>



<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Стрый, Украина",
        "postalCode": "78323",
        "streetAddress": "Полярная 143"
      },
      "email": "contacts@aviator-venture.com",
      "name": "Школа AETOPELAL",
      "telephone": "067 43 28 024"
    }
    </script>
<?php
include './res/footer.php';
?>
