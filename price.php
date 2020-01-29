<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--My Css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Courtview Cleaners Price</title>
</head>

<body>
    <!--Navigation-->
    <?php require_once('assets/partials/nav.php'); ?>

    <h1 class="center">Estimated Cost of Service*</h1>
    <p class="center">*Subject to change. Taxes not included.</p>

    <br>

        <table border="1">
            <tr>
                <th>Garment</th>
                <th>Dry Clean</th>
                <th>Repair Replace</th>
                <th>Stain Removal</th>
                <th>Quantity</th>
                <th>Est. Cost</th>
            </tr>

            <tr>
                <td>Shirt</td>
                <td>
                    <label>
                        <input type="radio" name="shirtdc" value="8" onclick="service(this)">
                        ($8)
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="shirtr" value="3" onclick="service(this)">
                        ($3)
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="shirts" value="5" onclick="service(this)">
                        ($5)
                    </label>
                </td>
                <td>
                    <input id="quan" type="number" name="quantity" min="0" max="100" value="0" onchange="service(this)">
                </td>
                <td class="est"></td>
            </tr>

            <tr>
                <td>Suit Bottom</td>
                <td>
                    <label>
                        <input type="radio" name="suitbdc" value="9" onclick="service(this)">
                        ($9)
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="suitbr" value="5" onclick="service(this)">
                        ($5)
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="suitbs" value="5" onclick="service(this)">
                        ($5)
                    </label>
                </td>
                <td>
                    <input id="quan" type="number" name="quantity" min="0" max="100" value="0" onchange="service(this)">
                </td>
                <td class="est"></td>
            </tr>

            <tr>
                <td>Suit Jacket</td>
                <td>
                    <label>
                        <input type="radio" name="suittdc" value="10" onclick="service(this)">
                        ($10)
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="suittr" value="8" onclick="service(this)">
                        ($8)
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="suitts" value="7" onclick="service(this)">
                        ($7)
                    </label>
                </td>
                <td>
                    <input id="quan" type="number" name="quantity" min="0" max="100" value="0" onchange="service(this)">
                </td>
                <td class="est"></td>
            </tr>
        </table>

        <p>Total Estimated Cost <b>$</b>
            <b id="total"></b>
        </p>

    <!--calculate-->
    <script>
        function service(z) {
            var a = $(z).parents('tr').find("input[type=radio]");

            var b = 0;
            for (var c = 0; c < a.length; c++) {
                console.log(a[c].checked);
                if (a[c].checked == true) {
                    b += Number($(a[c]).val());
                };
            };
            console.log(b);
            var d = $(z).parents('tr').find("input[type=number]").val();
            var e = b * d;
            console.log(e);

            $(z).parents('tr').find(".est").html(e);

            f = 0;

            g = $('.est');
            for (var c = 0; c < g.length; c++) {
                if ($(g[c]).html() != '') {
                    f += Number($(g[c]).html());
                }

            };
            console.log(f);
            $('#total').html(f);


        };

    </script>

    <!--Footer-->
    <?php require_once('assets/partials/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
