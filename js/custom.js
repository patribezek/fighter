

// RELOJ

var count = 7200;
var counter = setInterval(timer, 1000); //1000 will  run it every 1 second

function timer() {
	count = count - 1;
	if (count == -1) {
		clearInterval(counter);
		return;
	}

	var seconds = count % 60;
	var minutes = Math.floor(count / 60);
	var hours = Math.floor(minutes / 60);
	minutes %= 60;
	hours %= 60;

	if (minutes < 10){
		minutes = "0" + minutes; 
	}
	if (hours < 10){
		hours = "0" + hours; 
	}

    document.getElementById("timer").innerHTML = hours+ ":" + minutes + ":" + seconds; // watch for spelling
}

// fin reloj

console.log('tetas');