
function changeColor(signal,color){
	var element = document.querySelector('#' + signal);

	element.classList.remove('green','yellow','red');
	element.classList.add(color);
	
}
 var intervalId;
	function submitForm(event) {
	// Prevent default form submission
		event.preventDefault(); 
	
		// Perform form validation here
   	
	var inputs = document.querySelectorAll('.sequence');
    var values = [];

    // Check for duplicate values
    var duplicateValues = false;
    inputs.forEach(function(input) {
        var value = parseInt(input.value);
        if (values.includes(value)) {
            duplicateValues = true;
            return;
        }
        values.push(value);
    });

    if (duplicateValues) {
        alert('Duplicate values in Sequence are not allowed.');
        return;
    }
   
    
    // Serialize the form data
    var formData = $('#myForm').serialize();
   
    // Send the Ajax request
    $.ajax({
        type: 'POST',
        url: CI_ROOT + 'api/start', // Replace 'your_controller' with the name of your controller
        data: formData,
		dataType : 'json',
        success: function(response) {
            // Handle the success response here
			$('#start-button').prop('disabled', true);
			var timerGreen = parseInt(response.interval_green);
			changeSignals(response.seq_a, response.seq_b, response.seq_c, response.seq_d, response.interval_green, response.interval_yellow);
			interval = setInterval(function() {
            	changeSignals(response.seq_a, response.seq_b, response.seq_c, response.seq_d, response.interval_green, response.interval_yellow);
        	}, 4*timerGreen); 
		},
        error: function(xhr, status, error) {
            // Handle errors here
            console.error('Error:', error);
        }
    });
}
// changeSignals();

function stopSignals(){
	clearInterval(interval);
	$('#start-button').prop('disabled', false);
	element.classList.add(color);
}

function changeSignals(seq_a,seq_b,seq_c,seq_d, timer_green, timer_yellow){

		var seqA = parseInt(seq_a);
        var seqB = parseInt(seq_b);
        var seqC = parseInt(seq_c);
        var seqD = parseInt(seq_d);
        var timerGreen = parseInt(timer_green);
        var timerYellow = parseInt(timer_yellow);


		setTimeout(() => {
			setTimeout(() => {
				changeColor('A','yellow');
			}, 0);
			setTimeout(() => {
				changeColor('A','green');
			}, timerYellow);
			setTimeout(() => {
				changeColor('A','red');
			}, timerGreen + timerYellow);
		}, (seqA-1)*timerGreen);
		setTimeout(() => {
			setTimeout(() => {
				changeColor('B','yellow');
			}, 0);
			setTimeout(() => {
				changeColor('B','green');
			}, timerYellow);
			setTimeout(() => {
				changeColor('B','red');
			}, timerGreen + timerYellow);
		}, (seqB-1)*timerGreen);
		setTimeout(() => {
			setTimeout(() => {
				changeColor('C','yellow');
			}, 0);
			setTimeout(() => {
				changeColor('C','green');
			}, timerYellow);
			setTimeout(() => {
				changeColor('C','red');
			}, timerGreen + timerYellow);
		}, (seqC-1)*timerGreen);
		setTimeout(() => {
			setTimeout(() => {
				changeColor('D','yellow');
			}, 0);
			setTimeout(() => {
				changeColor('D','green');
			}, timerYellow);
			setTimeout(() => {
				changeColor('D','red');
			}, timerGreen + timerYellow);
		}, (seqD-1)*timerGreen);
}
