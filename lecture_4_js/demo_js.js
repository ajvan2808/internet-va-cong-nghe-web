// Tim nghiem cua PT
var a = 1;
var b = -2;
var c = 1;

var delta, x1, x2 =0;
delta = b*b -4*a*c;
if (delta == 0)
{
	x1 = -b / (2*a);
	document.write("PT co nghiem kep = " + x1);
} else if(delta < 0) {
	document.write("PT co vo nghiem");
} else {
	document.write('PT co 2 nghiem');
    x1 = (-b - Math.sqrt(delta)) / (2 * a);
	x2 = (-b + Math.sqrt(delta)) / (2 * a);
	document.write('PT co x1 nghiem', x1);
	document.write('PT co x2 nghiem',x2);
}
