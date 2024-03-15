<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="{{asset('resources/css/reset.css')}}">
    @vite(['resources/sass/app.scss', 'resources/css/admin/nav.css'])
</head>
<body >
    <style>
        .band_admin{
            margin-top: 100px;
            position: relative;
        }
        .band_admin .circle{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-image: linear-gradient(#A51DD0, #D3A0E3);
            position: absolute;
            animation: go_up 5s linear infinite;
        }
        .circle:nth-child(1){
            top: 60px;
            left: 80px;
            
        }

        @keyframes go_up {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }
        
    </style>
    
<div class="container-fluid " style="display: block;">
    <div class="row flex-nowrap">
        @include('admincp.slidebar')
        
        <div class="col py-3 ">
            @include('admincp.nav')

            @yield('content')
                    
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>
    
    $(document).ready(function(){
        $("#check-icon").click(function(){
            $("#menu_big").animate({
            width: "toggle"
            });
        });
    });
    
</script>
<script>
const xValues = [];
const yValues = [];
generateData("Math.sin(x)", 1, 10, 0.5);

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      pointRadius: 2,
      borderColor: "rgba(0,0,255,0.5)",
      data: yValues
    }]
  },    
  options: {
    legend: {display: false},
    title: {
      display: true,
    //   text: "y = sin(x)",
      fontSize: 16
    }
  }
});
function generateData(value, i1, i2, step = 1) {
  for (let x = i1; x <= i2; x += step) {
    yValues.push(eval(value));
    xValues.push(x);
  }
}
</script>
</html>