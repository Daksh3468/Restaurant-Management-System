<?php

session_start();

?>

<?php

if(!isset($_SESSION['name'])){
    header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soups</title>
    <link rel="stylesheet" href="pizza.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                <label for="" class="list-group-item list-group-item-action py-2 ripple"><?php echo $_SESSION['name'] ?></label>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                    </a>
                    <a href="index.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Orders</span>
                    </a>
                    <a href="logout.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-lock fa-fw me-3"></i><span>Log out</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>

                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="/img/Starbucks_Corporation_Logo_2011.svg.png" height="30" alt="MDB Logo" loading="lazy" />
                    Hotel Management System
                </a>

                <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
<form action="" method="post">
    <!--Main Navigation-->
    <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Soup 1</div>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas cum quos dolorum sint neque, saepe praesentium adipisci aliquid tenetur nulla excepturi aspernatur est!
          </div>
          <div class="cnt">
            <div class="wrapper">
                <span class="minus1" id="minus1">-&nbsp;</span>
                <input type="text" name="1item" id="1item" value="0" class="num">    
                <!-- <span class="num">00</span> -->
                <span class="plus1" id="plus1">&nbsp;+</span>
            </div>
            <div id="price1" class="wrapper" value="110">
                <h3 id="print_price1" style="font-size: 25px; margin: inherit;">0</h3>
            </div>
            <div class="add">
                <button type="button" class="btn btn-success btn-lg" id="add1">Add</button>
            </div>
        </div>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate delectus amet nulla ipsum ipsam, corrupti doloremque sint porro quod cum commodi, suscipit non ullam eos? Qui, asperiores iste, atque quae, illum sit suscipit quia obcaecati cupiditate commodi maiores doloribus tenetur perspiciatis praesentium nisi alias tempore reprehenderit vero ea temporibus? Amet!
          </div>
          <div class="cnt">
            <div class="wrapper">
                <span class="minus2" id="minus2">-&nbsp;</span>
                <input type="text" name="qty" id="2item" value="0" class="num">     
                <!-- <span class="num">00</span> -->
                <span class="plus2" id="plus2">&nbsp;+</span>
            </div>
            <div id="price2" class="wrapper" value="250">
                <h3 id="print_price2" style="font-size: 25px; margin: inherit;">0</h3>
            </div>
            <div class="add">
                <button type="button" class="btn btn-success btn-lg" id="add2">Add</button>
            </div>
        </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At saepe beatae distinctio maxime optio. Id qui praesentium possimus perferendis rerum! Exercitationem quis incidunt similique repudiandae.
          </div>
          <div class="cnt">
            <div class="wrapper">
                <span class="minus3" id="minus3">-&nbsp;</span>
                <input type="text" name="qty" id="3item" value="0" class="num">     
                <!-- <span class="num">00</span> -->
                <span class="plus3" id="plus3">&nbsp;+</span>
            </div>
            <div id="price3" class="wrapper" value="300">
                <h3 id="print_price3" style="font-size: 25px; margin: inherit;">0</h3>
            </div>
            <div class="add">
                <button type="button" class="btn btn-success btn-lg" id="add3">Add</button>
            </div>
        </div>
        </li>
      </ol>

      <button type="button" class="btn btn-success btn-lg" id="total" name="total">Total Price</button>
      </form>
      
    <script type="text/javascript">
        var incrementButton1 = document.getElementsByClassName('plus1');
        var decrementButton1 = document.getElementsByClassName('minus1');
        var incrementButton2 = document.getElementsByClassName('plus2');
        var decrementButton2 = document.getElementsByClassName('minus2');
        var incrementButton3 = document.getElementsByClassName('plus3');
        var decrementButton3 = document.getElementsByClassName('minus3');
        var final_value_1;
        var final_value_2;
        var final_value_3;
        var total_price1;
        var total_price2;
        var total_price3;

        for (var i = 0; i < incrementButton1.length; i++) {
            var button = incrementButton1[i];
            button.addEventListener('click', function (event) {

                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) + 1;
                input.value = newValue;
                final_value_1 = input.value;
                final_value_1 = final_value_1 * document.getElementById('price1').getAttribute('value');
                document.getElementById("print_price1").innerHTML = final_value_1;  
                // alert(final_value);
            })
        }

        for (var i = 0; i < decrementButton1.length; i++) {
            var button = decrementButton1[i];
            button.addEventListener('click', function (event) {

                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) - 1;

                if (newValue >= 0) {
                    input.value = newValue;
                    
                }
                else {
                    input.value = 0;
                }    
                final_value_1 = input.value;
                final_value_1 = final_value_1 * document.getElementById('price1').getAttribute('value');
                document.getElementById("print_price1").innerHTML = final_value_1;
                // alert(final_value);
                
            })
        }

        for (var i = 0; i < incrementButton2.length; i++) {
            var button = incrementButton2[i];
            button.addEventListener('click', function (event) {

                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) + 1;
                input.value = newValue;
                final_value_2 = input.value;
                final_value_2 = final_value_2 * document.getElementById('price2').getAttribute('value');
                document.getElementById("print_price2").innerHTML = final_value_2;  
                // alert(final_value);
            })
        }

        for (var i = 0; i < decrementButton2.length; i++) {
            var button = decrementButton2[i];
            button.addEventListener('click', function (event) {

                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) - 1;

                if (newValue >= 0) {
                    input.value = newValue;
                    
                }
                else {
                    input.value = 0;
                }    
                final_value_2 = input.value;
                final_value_2 = final_value_2 * document.getElementById('price2').getAttribute('value');
                document.getElementById("print_price2").innerHTML = final_value_2;
                // alert(final_value);
                
            })
        }

        for (var i = 0; i < incrementButton3.length; i++) {
            var button = incrementButton3[i];
            button.addEventListener('click', function (event) {

                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) + 1;
                input.value = newValue;
                final_value_3 = input.value;
                final_value_3 = final_value_3 * document.getElementById('price3').getAttribute('value');
                document.getElementById("print_price3").innerHTML = final_value_3;  
                // alert(final_value);
            })
        }

        for (var i = 0; i < decrementButton3.length; i++) {
            var button = decrementButton3[i];
            button.addEventListener('click', function (event) {

                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) - 1;

                if (newValue >= 0) {
                    input.value = newValue;
                    
                }
                else {
                    input.value = 0;
                }    
                final_value_3 = input.value;
                final_value_3 = final_value_3 * document.getElementById('price3').getAttribute('value');
                document.getElementById("print_price3").innerHTML = final_value_3;
                // alert(final_value);
                
            })
        }


        total.onclick = function(){
            total_price1 = final_value_1;
            total_price2 = final_value_2;
            total_price3 = final_value_3;
            
            alert(total_price1 + total_price2 + total_price3);
            

            final_value_1 = 0;
            document.getElementById("print_price1").innerHTML = final_value_1;
            document.getElementById("1item").value = "0";
            
            final_value_2 = 0;
            document.getElementById("print_price2").innerHTML = final_value_2;
            document.getElementById("2item").value = "0";

            final_value_3 = 0;
            document.getElementById("print_price3").innerHTML = final_value_3;
            document.getElementById("3item").value = "0";

        }
        
    </script>


</body>

</html>