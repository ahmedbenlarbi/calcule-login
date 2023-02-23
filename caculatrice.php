<!--<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>calculatrice</title>
    </head>

    <body>
        <form action="caculate.php" method="post">
            <fieldset style="background: #f6f8ff; border: 2px solid #4238ca;">
                <legend>Calculer</legend>
                <input type="number" name="number1" id="number1"> <br /><br />
                <input type="text" name="operation" id="operation" maxlength="1"> <br /><br />
                <input type=" number" name="number2" id="number2"> <br /><br />
                <button type="submit">Submit</button>
            </fieldset>

            <p id="resultat"></p>
        </form>
    </body>

    </html>
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculatrice.css">
    <title>calculatrice</title>
</head>


<body>
    <div class="wrapper">
        <section class="screen">
            0
        </section>
        <section class="calc-buttons">
            <div class="calc-buttons-row">
                <button class="calc-button double">
                    C
                </button>
                <button class="calc-button double">
                    &larr;
                </button>
                <button class="calc-button double">
                    &divide;
                </button>
            </div>
            <div class="calc-buttons-row">
                <button class="calc-button ">
                    7
                </button>
                <button class="calc-button ">
                    8
                </button>
                <button class="calc-button ">
                    9
                </button>
                <button class="calc-button ">
                    &times;
                </button>
            </div>
            <div class="calc-buttons-row">
                <button class="calc-button ">
                    4
                </button>
                <button class="calc-button ">
                    5
                </button>
                <button class="calc-button ">
                    6
                </button>
                <button class="calc-button ">
                    &minus;
                </button>
            </div>
            <div class="calc-buttons-row">
                <button class="calc-button ">
                    1
                </button>
                <button class="calc-button ">
                    2
                </button>
                <button class="calc-button ">
                    3
                </button>
                <button class="calc-button ">
                    &plus;
                </button>
            </div>
            <div class="calc-buttons-row">
                <button class="calc-button triple">
                    0
                </button>
                <button class="calc-button ">
                    &equals;
                </button>
            </div>

        </section>


    </div>
    <script src="calculatrice.js"></script>
</body>

</html>