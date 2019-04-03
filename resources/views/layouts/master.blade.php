<html>
<head>
<style>
            body {
                background-color: blue;
                position:relative;

            }
            .box1{
                background-color:green;
                width:80%;
                float:right;
                height:100%;


            }
            .boxside{
                background-color:yellow;
                width:20%;
                float:left;
                height:100%;
            }
</style>
</head>
<body>
<div class="box1">@yield('content')</div>
<div class="boxside">@include('layouts.sidebar')</div>
    
</body>
</html>