<?php
header("Cache-Control: no-store, no-cache, no-transform, must-revalidate");
header("Expires: " . date("r"));
?>
<!DOCTYPE html>
<html lang="ru">

<head>
<meta name="google" content="nopagereadaloud" />
    <link href="/favicon.svg" rel="icon"><meta charset="utf-8"><meta name="keywords" content="<?php echo $keywords?>" /><meta name="description" content="<?php echo $description?>"><meta content="width=device-width, initial-scale=1.0" name="viewport"><?=$meta?><meta http-equiv="Cache-Control" content="no-cache"><title><?=$title?></title><meta http-equiv="Cache-control" content="no-transform"><link href="/main/bootstrap.min.css" rel="stylesheet">
        <link href="/main/main.css" rel="stylesheet">
                
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">AVIATOR-VENTURE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-start" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link "  href="/">Главная</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/service/">Заказать</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link " href="/stati/">Блог</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link " href="/kontakty/">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>