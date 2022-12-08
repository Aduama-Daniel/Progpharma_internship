<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Laravel ChartJS Chart Example - ItSolutionStuff.com</title>


</head>

<body>


    @yield('content')
    <div style="width: 400px">
    <canvas id="myChart" height="100px"></canvas>
</div >
    <h2>hii</h2>
</body>



<script type="text/javascript">

      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'Hotels',
          backgroundColor: 'rgb(255, 99, 132, 1)',
          borderColor: 'rgb(0, 0, 0)',
          data: users,
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
      options:{
        scales:{}
      }


</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Laravel ChartJS Chart Example - ItSolutionStuff.com</title>


</head>

<body>


    @yield('content')
    <div style="width: 400px">
    <canvas id="myChart" height="100px"></canvas>
</div >
    <h2>hii</h2>
</body>





</html>
