<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Eddy Lu</title>
		<script src="//code.jquery.com/jquery-1.12.4.js"></script>
		<style>
			#stats th {
				border: 0px;
				border-collapse: collapse;
				background-color: #333333;
				color: white;
			}
			#stats td {
				border: 0px;
				border-collapse: collapse;
			}
			#stats tr:nth-child(even) {
				background-color: #eee;
			}
		</style>
	</head>
	<body>
		<div id="page_wrapper">
			<?php include 'header.php';?>
			<div id="body_wrapper">
				<div id="container">
					Statistics of the last 20 views on this website:
					<br /><br />
					<table id="stats">
						<tr>
							<th>Date</th>
							<th>IP Address</th>
							<th>Page Visited</th>
						</tr>
						<?php include 'statTableRetriever.php';?>
					</table>
					<br />
					<span style="font-style: italic;">*IP Address not displayed for privacy</span>
					<br /><br />
					Total number of views from different IP Addresses since December 17, 2014:
					<br />
					<?php include 'statViewsRetriever.php';?>
					<br /><br />
					Total number of views since December 17, 2014:
					<br />
					<?php include 'statDistinctViewsRetriever.php';?>
				</div>
				<?php include 'footer.php';?>
			</div>
		</div>
    </body>
</html>