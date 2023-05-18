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

            function melangerTableau(a) {
                var lgr = a.length, temp, r;
                while (0 !==lgr) {
                    r = Math.floor(Math.random() * lgr);
                    lgr = lgr - 1;
                    temp = a[lgr];
                    a[lgr] = a[r];
                    a[r] = temp;
                }
                return a;
            }

            function afficherGrille() {
                var gr ="";
                for(var i=1; i <= 5; i++) {
                    for(var j=1; j <= 6; j++) {
                        gr = gr + "<button></button>"
                    }
                    gr = gr + "</br>";
                }
                Div.innerHTML = gr;
            }

            function traitement(id) {
                click = click+1; 
                if(click === 1){
                    exId = id;
                }
                if(click === 2){
                    click = 0;
                    for(var i = 0; i <=29; i++){
                        boutons[i].onclick = function(e) {e.preventDefault();};
                    }
                    ref = setTimeout (function(){topChrono(id,exId);},2000);
                }
            }

            function topChrono(id,exID) {
                if (boutons[id].innerHTML !== boutons[exId].innerHTML){
                    boutons[id].innerHTML = "";
                    boutons[exId].innerHTML = "";
                } else {
                    boutons[id].style.background = "#EECCFB" ;
                    boutons[id].disabled = true ;
                    boutons[exId].style.background = "#EECCFB";
                    boutons[exId].disabled = true ;
                }
                trait ();
            }

            function affecterID(){
                for (var i=0; i<=29;i++){
                    boutons[i].id=i;
                }
            }

            function trait(){
                //Corps de la fonction
                for(var i =0; i <= 29; i++){
                    boutons[i].onclick = function(e) {
                        var id = e.target.id;
                        e.target.innerHTML ="<img src='./images/" + t[id] +"'style='width:90px;height:90px;margin:auto;'>";
                        //e.target.innerHTML ="<img src='logitech.png'>";
                        traitement (id);
                    };
                }
            }

            //Programme Principal
            var t = melangerTableau(["aorus.png","asus.png","bequiet.png","corsair.jpg","hyperX.png","ldlc.png","logitech.png","materiel_net.jpg",
            "msi.png","roccat.png","seagate.png","steelseries.png","razer.jpg","the g lab.jpg","topachat.png",]);
            var exId;
            var ref;
            var click=0;
            var Div = document.getElementById("Div");
            var boutons = document.getElementsByTagName('button');
            afficherGrille();
            affecterID();
            trait();
        </script>
</center>
</body>
    