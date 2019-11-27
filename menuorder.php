<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Food ordering</title>
</head>
<style>
    body{
    background-image: url("menu.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
    .list-group{
        margin-top: 150px;
        background-color: white;
    }
    .list-group-item{
        padding: 5px;
    }
    h3{
        text-align: center;
    }
    .col#btn{
        margin-top: 150px;
        padding: 20px;
    }
    .active{
        color: orange;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="list-group" id="leftList">
                    <h3>Available Option</h3>
                    <a href="#" class="list-group-item list-group-item-action"><pre><img src="home_splash_bg.jpg" width="50px" height="50px"> Pizza                         <strong>$50</strong></pre></a>
                    <a href="#" class="list-group-item list-group-item-action"><pre><img src="images.jpg" width="50px" height="50px"> Burgur                          <strong>$50</strong></pre></a>
                    <a href="#" class="list-group-item list-group-item-action"><pre><img src="chicken-biryani_1570717879.jpg" width="50px" height="50px"> chiken-chilly                  <strong>$50</strong></pre></a>
                    <a href="#" class="list-group-item list-group-item-action"><pre><img src="classic-sandwich-bread.jpg" width="50px" height="50px"> Sandwitch                 <strong>$50</strong></pre></a>
                </div>
            </div>
            <div id="btn" class="col">
                <br><br>
                <div class="row"><button type="button" class="btn btn-block btn-success" id="addToCart">Add to cart </button></div><br>
                <div class="row"><button type="button" class="btn btn-block btn-success" id="removeFromCart"> Remove from cart</button></div>
            </div>
            <div class="col">
                <div class="list-group" id="rightList">
                        <h3>Your Cart</h3>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
        integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#leftList a').click(function(){
                $('#leftList a').removeClass('active');
                $(this).toggleClass('active');
            });

            $('#rightList a').click(function(){
                $('#rightList a').removeClass('active');
                $(this).toggleClass('active');
            });

            $('#addToCart').click(function(){
                if($('#leftList').length){
                    var sol = $('#leftList').find('a.active')
                    $('#rightList').append(sol);
                }
            });

            $('#removeFromCart').click(function(){
                if($('#rightList').length){
                    var sl = $('#rightList').find('a.active')
                    $('#leftList').append(sl);
                }
            });
        });
    </script>
</body>

</html>