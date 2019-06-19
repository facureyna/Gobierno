<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart, bar']});


      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
       
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        /*data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);*/
        data.addRows([
          ['Adoptados',<?php echo ($adoptados->adoptados) ?>],
          ['En transito',<?php  echo ($adoptados->en_transito) ?>]
          ]);

        // Set chart options
        var options = {'title':'Animales',
                       'width': '700',
                       'height': '600'};

        // Instantiate and draw our chart, passing in some options.
        var torta = new google.visualization.PieChart(document.getElementById('torta'));
        torta.draw(data, options);
      }
      </script>
      <script type="text/javascript">
      // Set a callback to run when the Google Visualization API is loaded.
       google.setOnLoadCallback(drawBasic);
       for (var varction drawBasic() {
        var data = google.visualization.dataTable(<?= $Rescatistas ?>);

        var options = {
          title: 'Cantidad de animales rescatados por Rescatistas',
          chartArea: {width: '50%'},
          hAxis: {
            title: 'Total Rescatados',
            minValue: 0
          },
          vAxis: {
            title: 'Rescatistas'
          }
        };

        var chart = new google.visualization.BarChart(document.getElementById('barras'));

        chart.draw(data, options);
      }
      </script>
      <script type="text/javascript">
      google.setOnLoadCallback(drawColColors);

      function drawColColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');
      data.addColumn('number', 'Energy Level');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Motivation and Energy Level Throughout the Day',
        colors: ['#9013cd', '#33ac71'],
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('barras_ot'));
      chart.draw(data, options);
    }
      </script>

<!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Estadísticas
            </h1>
            <p class="text-white link-nav"><a href="<?= base_url(); ?>">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <span> estadísticas</span></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start Sample Area -->
    <section class="conteiner">
      <div class="row">
            <div class="col-md-6" id="torta"></div>
            <div class="col-md-6" id="barras"></div>
            <div id="barras_ot"></div> 
      </div> 
    </section>