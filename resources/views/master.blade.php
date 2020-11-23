<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lara CS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<style>
    .custom-login {
        height: 500px;
    }
    .carousel-caption {
        color: #ffffff;
        background: #000000;
    }
    .trending-image {
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper {
        margin: 30px;
    }
    .footer {
        clear:both;
    }
    .cart-list-divider {
        border-bottom: 2px solid black;
        margin-bottom: 20px;
    }
    a.dropdown-item.single-item {
        
    }
    .minicart-left {
    height: 50px;
    float: left;
    }
    .minicart-right {
    display: flex;
    flex-direction: column;
    }
    img.minicart-image {
    width: auto;
    height: 100%;
    }
    .dropdown { 
            position: static !important; 
    } 
    @media only screen and (max-width:768px){
        .dropdown-menu {
        width: 100% !important;
    } 
    }
    .dropdown-menu { 
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)!important; 
        margin-top: 0px !important; 
        width: 30%;
        left: 70%;
    } 
    .dropdown-item:not(:first-child) {
    border-top: 2px solid black;
    }
</style>
</html>