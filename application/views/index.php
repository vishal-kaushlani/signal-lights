<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signal Lights</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('resources/css/style.css');?>" rel="stylesheet">
</head>
<body>
	<section id="main">
		<div class="signal d-flex justify-content-around align-items-center">
			<div class="signal-lights red" id="A"></div>
			<div class="signal-lights red" id="B"></div>
			<div class="signal-lights red" id="C"></div>
			<div class="signal-lights red" id="D"></div>
		</div>
	</section>
	<section id="form">
		<div class="container mt-5">
			<?php echo form_open('', array('id' => 'myForm', 'onsubmit' => 'submitForm(event);')); ?>
			<h2>Sequence</h2>
			<div class="row">
				<div class="mb-3 col-3 text-center">
					<label for="SEQ-A" class="form-label">A</label>
					<input type="number" class="form-control sequence" max="4" id="SEQ-A" required name="SEQ_A">
				</div>
				<div class="mb-3 col-3 text-center">
					<label for="SEQ-B" class="form-label">B</label>
					<input type="number" class="form-control sequence" id="SEQ-B" required name="SEQ_B">
				</div>
				<div class="mb-3 col-3 text-center">
					<label for="SEQ-C" class="form-label">C</label>
					<input type="number" class="form-control sequence" id="SEQ-C" required name="SEQ_C">
				</div>
				<div class="mb-3 col-3 text-center">
					<label for="SEQ-D" class="form-label">D</label>
					<input type="number" class="form-control sequence" id="SEQ-D" required name="SEQ_D">
				</div>
			</div>
				
				<h2>Intervals</h2>
				<div class="mb-3">
					<label for="green-interval" class="form-label">Green Interval</label>
					<input type="number" class="form-control" id="green-interval" required name="GREEN_TIMER">
				</div>
				<div class="mb-3">
					<label for="yellow-interval" class="form-label">Yellow Interval</label>
					<input type="number" class="form-control" id="yellow-interval" required name="YELLOW_TIMER">
				</div>
				
				<div class="d-flex justify-content-center">
					<button type="submit" class="btn btn-success btn-lg me-5" id="start-button">Start</button>
					<button type="button" class="btn btn-primary btn-lg" id="stop-button" onclick="stopSignals()">Stop</button>
				</div>
			</form>
		</div>
		<p>Note : the stop button will clear the interval and will stop repeatation in animation.</p>
	</section>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url('resources/js/script.js')?>"></script>
	<script>
		var CI_ROOT = '<?php echo base_url()?>';
	</script>
</body>
</html>
