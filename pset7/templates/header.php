<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/"><img alt="C$50 Finance" src="/img/logo.gif"/></a>
                <?php
                    if (isset($_SESSION["id"]))
                    {
                ?>
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="/">Home</a></li>
                    <li role="presentation"><a href="quote.php">Quote</a></li>
                    <li role="presentation"><a href="buy.php">Buy</a></li>
                    <li role="presentation"><a href="sell.php">Sell</a></li>
                    <li role="presentation"><a href="history.php">History</a></li>
                    <li role="presentation"><a href="deposit.php">Deposit</a></li>
                    <li role="presentation"><a href="logout.php">Log out</a></li>
                </ul>
                <?php
                    }
                ?>
            </div>

            <div id="middle">
