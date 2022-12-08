<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Laravel ChartJS Chart Example - ItSolutionStuff.com</title>




</head>

<body>




<div style="width: 400px">
<canvas id="myChart" height="400px"></canvas>
</div>

<div style="width: 400px">
    <canvas id="line" height="400px"></canvas>
    </div>




</body>





<script type="text/javascript">




    const data = {
      labels: ['mon','tues','wed'],
      datasets: [{
        label: 'Hotels',
        backgroundColor: 'rgb(255, 99, 132,1)',
        borderColor: 'rgb(255, 0, 0)',
        data: ['50','70','90'],
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




    const data2 = {
      labels: ['mon','tues','wed'],
      datasets: [{
        label: 'Hotels',
        backgroundColor: 'rgb(255, 99, 132,1)',
        borderColor: 'rgb(255, 0, 0)',
        data: ['100','70','90'],
      }]
    };





    const config2 = {
      type: 'line',
      data: data2,
      options: {}
    };


    const line = new Chart(
      document.getElementById('line'),
      config2
    );
    options:{
      scales:{}
    }


    </script>














</html>
