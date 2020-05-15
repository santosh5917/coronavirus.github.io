<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
     <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container text-center text-capitalize text-danger"><h1>covid-19 live update of the india</h1></div>
  
  </div>  
  <div class="row" style="margin:0px">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
    <div class="covidimg virus">
      <img src="img/coronavirus_PNG46.png" alt="virus" height="160" width="160"></div>
  
    </div>
  
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 covidimg">
       <h2 class="text-capitalize ">Let`s Stay safe and fight together against cor<span class="corona_rot"><img src="img/coronavirus_PNG16.png" alt="virus" height="100" width="100"></span>na virus</h2>
    </div>
    </div>
  <div class="container text-center table-responsive">
      <table
        class="table table-responsive-sm  table-bordered table-striped   text-capitalize-info">
           <thead class="text-center thead-light">
        <tr>
          <th class="text-center text-capitalize">LastUpdatedTime</th>
          <th class="text-center text-capitalize">State</th>
          <th class="text-center text-capitalize">Confirmed</th>
          <th class="text-center text-capitalize">Active</th>
          <th class="text-center text-capitalize">Recovered</th>
          <th class="text-center text-capitalize">Deaths</th>
        
        </tr>
        </thead>
        <?php
        $data=file_get_contents('https://api.covid19india.org/data.json');
        $coronaUpdate=json_decode($data, true);

        // echo"<pre>";
        // print_r($coronaUpdate);
        
        // echo"</pre>";
     $stateCounts=count($coronaUpdate['statewise']);
        // echo $coronaUpdate['statewise'][1]['state'];

        $i=1;
        while($i<$stateCounts){
            ?>
            <tr >
            <td><?php echo $coronaUpdate['statewise'][$i]['lastupdatedtime'] ?></td>
            <td><?php  echo $coronaUpdate['statewise'][$i]['state']?></td>
            <td><?php echo $coronaUpdate['statewise'][$i]['confirmed']?></td>
            <td><?php  echo $coronaUpdate['statewise'][$i]['active']?></td>
            <td><?php echo $coronaUpdate['statewise'][$i]['recovered']?></td>
            <td><?php  echo $coronaUpdate['statewise'][$i]['deaths']?></td>
            </tr>
        
            <?php
            $i++;
        }
        ?>
      </table>
    </div>
</body>
</html>