<?
	if($message) {
		$statusMessage = "<div class='alert alert-success'>$message</div>";
	}
	if($error) {
		$statusMessage = "<div class='alert alert-danger'>$error</div>";
	}
	if($statusMessage) {
		echo $statusMessage;
	}
?>
<div class="jumbotron">
	<h1>Web development</h1>
		<p>
			Hi!<br>
			Thank you for coming to my page. You can watch technologies which I'm using
		</p>
	<!-- <a class="btn btn-warning" href="?c=projects" role="button">To projects</a> -->
</div>

<div>
	<ul id="myInfo" class="nav nav-tabs">
		<li class="active"><a href="#tech" data-toggle="tab">Technologies</a></li>
		<li><a href="#lang" data-toggle="tab">Languages and speed</a></li>
		<li><a href="#age" data-toggle="tab">Age</a></li>
	</ul>

	<div id="myInfoContent" class="tab-content clearfix">
		<div class="tab-pane fade in active" id="tech">
			<img class="technologiesMap" src="v/css/images/technologies.png" alt="technologies">
		</div>
		
		<div class="tab-pane fade" id="lang">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Language</th>
						<th>Level</th>
						<th>Blind typing method</th>
						<th>Speed</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>English</td>
						<td>Upper intermediate</td>
						<td>True</td>
						<td>209 symb/minute <a href="http://vse10.ru/en345944/" class="label label-default" target="_blank">Silver</a></td>
					</tr>
					<tr>
						<td>Russian</td>
						<td>Native speaker</td>
						<td>True</td>
						<td>334 symb/minute <a href="http://vse10.ru/ru345944/" class="label label-warning" target="_blank">Gold</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="tab-pane fade" id="age">
			<p class="text-center bg-info">
				Today is <?= date('j') . ' of ' . date('F Y') . ' and it means that I am '?>
				<b><?= (date('Y', (strtotime("now") - strtotime("23 December 1987"))) - 1970)?></b>
			</p>
		</div>
	</div>
</div>

<div class="feedback form-container clearfix">
	<form method="post" role="form" class="col-sm-6 col-sm-offset-6">
			<label for="name">Offer a job for me</label>	
		<div class="form-group">
			<input type="text" name="name" placeholder="Name" class="form-control" id="name" required>
		</div>
		<div class="form-group">
			<input type="email" name="contactInfo" placeholder="Email" class="form-control" id="contactInfo" required>
		</div>
		<div class="form-group">
			<textarea name="question" id="question" cols="30" rows="5" placeholder="Your offer" class="form-control" required></textarea>
		</div>
		<button type="submit" class="btn btn-success pull-right">Send offer</button>
	</form>
</div>