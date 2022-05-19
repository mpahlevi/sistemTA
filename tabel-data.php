<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    setInterval(function(){
        setInterval(function(){
            $("#ceksuhu").load('ceksuhu.php');
            }, 1000);
        });
    </script>
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.html">SISTEM KONTROL DAN <br>MONITORING KUALITAS AIR</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="monitoring.html">MONITORING</a></li>
				<li class="active"><a href="tabel-data.php">DATABASE</a></li>
			</ul>
		</div>
	</header>

	<!-- service -->
	<section class="service">
	<div class="container">
	<h3>Tabel Database</h3>
	<table id="myTable">
    <thead>
        <tr>
            <th>ID</th>
            <!-- <th>Sensor</th>
            <th>Location</th> -->
            <th>Value 1</th>
            <th>Value 2</th>
            <th>Value 3</th>
            <th>Value 4</th>
            <th>Value 5</th>
            <th>Value 6</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // require 'koneksi.php';
        $servername = "localhost";

    // REPLACE with your Database name
    $dbname = "u7786689_pahlevi";
    // REPLACE with Database user
    $username = "u7786689_user_pahlevi";
    // REPLACE with Database user password
    $password = "sukses2022";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, value1, value2, value3, value4, value5, value6, reading_time FROM SensorData ORDER BY id DESC"; // sensor & location is not available
    $sensordata = $conn->query($sql);
    $result = mysqli_fetch_array($sensordata);

    while($row = mysqli_fetch_array($sensordata))
    {
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['value1']."</td>
        <td>".$row['value2']."</td>
        <td>".$row['value3']."</td>
        <td>".$row['value4']."</td>
        <td>".$row['value5']."</td>
        <td>".$row['value6']."</td>
        <td>".$row['reading_time']."</td>
    </tr>";
    }

    ?>
    </tbody>

    <script>
    $(document).ready(function(){
        $('#myTable').DataTable({
    "order": [[ 1, "desc" ]], 
});
    });
</script>

</table>
	</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>By Pahlevi - 2022.</small>
		</div>
	</footer>
</body>
</html>