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
    <title>Pizza</title>
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
        <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/f1.jpg" class="d-block w-100" height="600"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/f2.jpg" class="d-block w-100" height="600"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/f3.jpg" class="d-block w-100" height="600"  alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> -->



        <p class="fs-1">Pizza</p>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" id="item1">
                        Pizza Item #1

                    </button>

                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="cnt">
                        <div class="wrapper">
                            <span class="minus">-</span>
                            <input type="text" name="qty" id="1item" value="0" class="num">     
                            <!-- <span class="num">00</span> -->
                            <span class="plus">+</span>
                        </div>
                        <div id="price1" class="wrapper" value="110">
                            <h3 style="font-size: 55px;">Rs. 110</h3>
                        </div>
                        <div class="add">
                            <button type="button" class="btn btn-success btn-lg" id="add1">Add</button>
                        </div>
                    </div>
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Pizza Item #2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="cnt">
                        <div class="wrapper">
                            <span class="minus">-</span>
                            <input type="text" name="qty" id="2item" value="0" class="num">
                            <!-- <span class="num">00</span> -->
                            <span class="plus">+</span>
                        </div>
                        <div id="price2" class="wrapper" value="180">
                            <h3 style="font-size: 55px;">Rs. 180</h3>
                        </div>
                        <div class="add">
                            <button type="button" class="btn btn-success btn-lg" id="add2">Add</button>
                        </div>
                    </div>
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
                        this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Pizza Item #3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="cnt">
                        <div class="wrapper">
                            <span class="minus">-</span>
                            <input type="text" name="qty" id="3item" value="0" class="num">
                            <!-- <span class="num">00</span> -->
                            <span class="plus">+</span>
                        </div>
                        <div id="price3" class="wrapper" value="250">
                            <h3 style="font-size: 55px;" >Rs. 250</h3>
                        </div>
                        <div class="add">
                            <button type="button" class="btn btn-success btn-lg" id="add3">Add</button>
                        </div>
                    </div>
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
                        exciting happening here in terms of content, but just filling up the space to make it look, at
                        least at first glance, a bit more representative of how this would look in a real-world
                        application.</div>
                </div>
            </div>
        </div>


        
        <div id="items" class="my-4">
            <h2>Your Items</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SNo</th>
                    <th scope="col">Item Title</th>
                    <th scope="col">Total Item</th>
                    <th scope="col">Total Price</th> 
                    <th scope="col">Actions</th> 
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <tr>
                    <th scope="row">1</th>
                    <td>pizza</td>
                    <td>Total item</td> 
                    <td>Total price</td> 
                    <td><button class="btn btn-sm btn-danger">Delete</button></td> 
                  </tr>
                  
                </tbody>
              </table>
        </div>
    </div>




    </main>
    <!--Main layout-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- <script>
        const plus = document.querySelector(".plus"),
            minus = document.querySelector(".minus"),
            num = document.querySelector(".num");
        let a = 0;
        plus.addEventListener("click", () => {
            a++;
            a = (a < 10) ? "0" + a : a;
            num.innerText = a;
        });

        minus.addEventListener("click", () => {
            if (a > 0) {
                a--;
                a = (a < 10) ? "0" + a : a;
                num.innerText = a;
            }
        });

    </script> -->
    <script>
        var incrementButton = document.getElementsByClassName('plus');
        var decrementButton = document.getElementsByClassName('minus');
        var final_value;
        var total_price1;
        var total_price2;
        var total_price3;

        for (var i = 0; i < incrementButton.length; i++) {
            var button = incrementButton[i];
            button.addEventListener('click', function (event) {

                var buttonClicked = event.target;
                var input = buttonClicked.parentElement.children[1];
                var inputValue = input.value;
                var newValue = parseInt(inputValue) + 1;
                input.value = newValue;
                final_value = input.value;
            })
        }

        for (var i = 0; i < decrementButton.length; i++) {
            var button = decrementButton[i];
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
                final_value = input.value;
                
            })
        }

         add1.onclick = function(){
            console.log(final_value);
            console.log(final_value * document.getElementById("price1").getAttribute('value'));
            total_price1 = final_value * document.getElementById("price1").getAttribute('value');
            document.getElementById('1item').value='0';
        }
        add2.onclick = function(){
            console.log(final_value);
            console.log(final_value * document.getElementById("price2").getAttribute('value'));
            total_price2 = final_value * document.getElementById("price2").getAttribute('value');
            document.getElementById('2item').value='0';     
        }
        add3.onclick = function(){
            console.log(final_value);
            console.log(final_value * document.getElementById("price3").getAttribute('value'));
            total_price3 = final_value * document.getElementById("price3").getAttribute('value');
            document.getElementById("3item").value='0';
        }
    </script>



</body>

</html>