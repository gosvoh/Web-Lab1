<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Web-программирование, лабораторная работа №1</title>
    <link href="img/favicon.ico" rel="icon">
    <link href="stylesheet.css" rel="stylesheet">
</head>
<body>
<div id="header-container" class="container">
    <span class="header-element-left header-element">Вохмин Алексей Валерьевич</span>
    <span class="header-element-center header-element">Вариант №211005</span>
    <span class="header-element-right header-element">Группа академиков </span>
</div>
<div id="workspace-container">
    <div id="parameters-container" class="workspace-element container">
        <h1>Параметры</h1>
        <form id="calculation-form" onsubmit="return validate(this);">
            <div id="X-parameter" class="parameter">
                <label class="parameter-label">X:</label>
                <div id="X-radio">
                    <input type="radio" id="X_-4" value="-4" name="X-parameter">
                    <label for="X_-4">-4</label>

                    <input type="radio" id="X_-3" value="-3" name="X-parameter">
                    <label for="X_-3">-3</label>

                    <input type="radio" id="X_-2" value="-2" name="X-parameter">
                    <label for="X_-2">-2</label>

                    <input type="radio" id="X_-1" value="-1" name="X-parameter">
                    <label for="X_-1">-1</label>

                    <input type="radio" id="X_0" value="0" name="X-parameter" checked="checked">
                    <label for="X_0">0</label>

                    <input type="radio" id="X_1" value="1" name="X-parameter">
                    <label for="X_1">1</label>

                    <input type="radio" id="X_2" value="2" name="X-parameter">
                    <label for="X_2">2</label>

                    <input type="radio" id="X_3" value="3" name="X-parameter">
                    <label for="X_3">3</label>

                    <input type="radio" id="X_4" value="4" name="X-parameter">
                    <label for="X_4">4</label>
                </div>
            </div>
            <div id="Y-parameter" class="parameter">
                <label for="Y-text" class="parameter-label">Y:</label>
                <input id="Y-text" type="text" name="Y-parameter" placeholder="[-5 ... 3]" autocomplete="off" required
                       maxlength="10">
            </div>
            <label id="warning-message-Y">Warning message</label>
            <div id="R-parameter" class="parameter">
                <label class="parameter-label">R:</label>
                <div id="R-radio" class="radio-toolbar">
                    <input type="radio" id="R_1" value="1" name="R-parameter">
                    <label for="R_1">1</label>

                    <input type="radio" id="R_1.5" value="1.5" name="R-parameter">
                    <label for="R_1.5">1.5</label>

                    <input type="radio" id="R_2" value="2" name="R-parameter" checked="checked">
                    <label for="R_2">2</label>

                    <input type="radio" id="R_2.5" value="2.5" name="R-parameter">
                    <label for="R_2.5">2.5</label>

                    <input type="radio" id="R_3" value="3" name="R-parameter">
                    <label for="R_3">3</label>
                </div>
            </div>
            <p>Введите данные</p>
            <button id="submit-button" type="submit">Отправить</button>
        </form>
    </div>
    <div id="chart-container" class="workspace-element container">
        <h1>Область</h1>
        <canvas id="chart-canvas"></canvas>
    </div>
</div>
<div id="meta-container" class="container">
    <?php include 'check.php' ?>
</div>
<script src="js/validation.js"></script>
<script src="js/init.js"></script>
</body>
</html>