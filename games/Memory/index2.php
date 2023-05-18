<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <style>
        button {
            width:100px;
            height:100px;
            margin:3px;
            text-Align:center;
            vertical-Align:middle;
            border:1px solid black;
        }
        img {
            width:70px;
            height:70px;
        }
    </style>
</head>
<body>
<center>
    <div id="Div"></div>
        <script>
            var Div = document.getElementById("Div");
            var boutons = document.getElementsByTagName('button');
            function afficherGrille() {
                var gr ="";
                for(var i=1; i <= 5; i++) {
                    for(var j=1; j <= 6; j++) {
                        gr = gr + "<button></button>"
                    }
                    gr = gr + "</br>";
                }
                Div.innerHTML = gr;
                //Div.innerHTML : sers à afficher le "Div" écris plus haut
            }

            function trait() {
                for(var i =0; i <= 29; i++) {
                    boutons[i].onclick = function(e) {
                        var id = e.target.id;
                        e.target.innerHTML ="<img src='logitech.png'>";
                        //traitement (id);
                    };
                }
            }
            afficherGrille();
            trait();
        </script>
</center>
</body>
    