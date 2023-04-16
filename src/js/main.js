//Line -- header

var canvas = document.getElementById('graph');
var ctx = canvas.getContext('2d');

ctx.beginPath();
ctx.strokeStyle = "#167ffb";
ctx.lineWidth = "10";
ctx.moveTo(15, 25);
ctx.lineTo(450, 25);
ctx.lineCap = 'round';
ctx.stroke();