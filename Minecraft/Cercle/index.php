<html>
    <head>
        <!--Icone : -->
        <link rel="icon" href="../../Icone/Shellos-Icone.ico">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Minecraft - Cercle</title>

        <style type="text/css">
            body {
                font-size: 11px;
                font-family: monospace;
            }

            table.circle_output td {
                border-collapse: collapse;
            }

            table.circle_output td {
                border: 1px solid white;
                width: 15px;
                height: 15px;
            }

            .filled {
                background: red;
            }

            .cgy0, .cgx0 {
                background: #eee;
            }

            .filled.cgy0, .filled.cgx0 {
                background: #808080;
            }

            #height, #diameter, #scaler {
                width: 150px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.2/mootools.js"></script>
        <script src="Base64.js"></script>
        <script src="range-polyfill.js"></script>
        <script src="number-polyfill.js"></script>
        <script src="renderers/svg.js"></script>
        <script src="renderers/table.js"></script>
        <script src="FileSaver.js"></script>
        <script src="Blob.js"></script>
        <script src="generator.js"></script>

    </head>
    <body>
        <?php
            include '../../Menu/Menu.php'; // Hello Gros Chien //
        ?>

        <noscript><strong>Circle generator requires JavaScript to be turned on!</strong><br /></noscript>
        Width :
        <input tabindex="1" type="number" size="5" id="diameter" value="9" autocomplete="off" autofocus="autofocus">
        <label><input id="linked" type="checkbox" checked="checked" value="1" /> Force Circle</label>
        &mdash;
        Block Count: <span id="blockcount"></span><br />
        Height:
        <input tabindex="2" type="number" size="5" id="height" value="9" autocomplete="off" autofocus="autofocus">
        <select id="thickness">
            <option selected="selected">thick</option>
            <option>thin</option>
            <option>filled</option>
        </select>

        Download:
        <button type="button" id="downloadSVG">SVG</button>
        <button type="button" id="downloadPNG">PNG</button>
        <br />
        Scale :
        <input type="range" min="50" max="3000" value="720" id="scaler" data-poly-scale=".1" />
        <br />

        <div id="result"></div>

    </body>
</html>