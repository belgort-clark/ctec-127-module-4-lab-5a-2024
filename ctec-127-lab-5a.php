<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 5a - Temperature Converter</title>
</head>

<body>

    <?php
    // function to calculate converted temperature
    function convertTemp($temp, $unit1, $unit2)
    {
        // Conversion formulas
        // - Celsius to Fahrenheit = T(°C) × 9/5 + 32
        // - Celsius to Kelvin = T(°C) + 273.15
        // - Fahrenheit to Celsius = (T(°F) - 32) × 5/9
        // - Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
        // - Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
        // - Kelvin to Celsius = T(K) - 273.15

        // You need to develop the logic to convert the temperature based on the selections and input made

    } // end function

    // Logic to check for POST and grab data from $_POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Store the original temp and units in variables
        // You can then use these variables to help you make the form sticky
        // then call the convertTemp() function
        // Once you have the converted temperature you can place PHP within the converttemp field using PHP
        // I coded the sticky code for the originaltemp field for you

        $originalTemperature = $_POST['originaltemp'];
        $originalUnit = $_POST['originalunit'];
        $conversionUnit = $_POST['conversionunit'];
        $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
    } // end if

    ?>
    <div class="container mt-0 mt-lg-5">
        <div class="row">
            <div class="col-12 col-md-12 mx-auto text-center mb-5 p-5 bg-black text-white bg-black text-white shadow">
                <header>
                    <!-- Form starts here -->
                    <h1 class="display-4 fw-bold">Temperature Converter</h1>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 mx-auto bg-white p-5 shadow rounded rounded-3 mb-5">
                <main>
                    <section class="bg-light p-3 border mb-3 shadow-sm">
                        <h2 class="border-bottom rounded-end-pill pill p-3 mb-3 shadow-sm">How to Use - Step by Step</h2>
                        <ol>
                            <li>Enter a temperature in the <span class="fw-bold">Temperature to Convert</span> field</li>
                            <li>Select <span class="fw-bold">Temperature Unit</span> from the dropdown</li>
                            <li>Select <span class="fw-bold">Convert to</span> and select which unit you want to convert the temperature to</li>
                            <li>Click the <span class="fw-bold">Convert</span> button to perform the conversion</li>
                            <li>Look in the <span class="fw-bold">Converted Temperature</span> field to see the result</li>
                        </ol>
                    </section>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <!-- Error bucket to be displayed here -->

                        <div class="mb-3">
                            <label for="temp" class="form-label fw-bold h3 mt-3">Temperature to Convert</label>
                            <br>
                            <!-- You could have also used a Ternary on the line below -->
                            <input type="text" class="form-control shadow-sm" value="<?= isset($_POST['originaltemp']) ? $_POST['originaltemp'] : ""; ?>" name="originaltemp" size="14" maxlength="7" id="temp">
                        </div>
                        <div class="mb-3">
                            <label for="originalunit" class="form-label h3 fw-bold">Temperature Unit</label>
                            <select name="originalunit" class="form-select shadow-sm" id="originalunit">
                                <option value="-">Make a selection</option>
                                <option value="celsius">Celsius</option>
                                <option value="fahrenheit">Fahrenheit</option>
                                <option value="kelvin">Kelvin</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-5">
                            <label for="conversionunit" class="form-label h3 fw-bold">Convert to</label>
                            <select name="conversionunit" class="form-select shadow-sm" id="conversionunit">
                                <option value="-">Make a selection</option>
                                <option value="celsius">Celsius</option>
                                <option value="fahrenheit">Fahrenheit</option>
                                <option value="kelvin">Kelvin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="convertedtemp" class="form-label fw-bold h3">Converted Temperature</label>
                            <br>
                            <input type="text" class="form-control bg-light shadow-sm border-0" value="" name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>
                        </div>
                        <div class="mb-3 mt-5">
                            <input type="submit" value="Convert" class="btn btn-dark fs-3 shadow-sm">
                        </div>
                    </form>
                </main>
            </div>
        </div>
        <div class="col-12 mt-5 text-center">
            <footer class="my-5">
                <p>&copy; by CTEC 127<br>Student YOUR NAME MUST GO HERE</p>
            </footer>
        </div>
    </div>
</body>

</html>