/*

cap_amount  A
double_amount  B
target_return  C
cd  D
loan_intrest E
term F
port_value G
roi L


G = (A * (1 + D / 100) ^ F +  A * (1 + C / 100) ^ F )  -  I 

I =  H * K

K = 12 * F

H = A  * (( J * (1 + J) ^ K)  /  (((1 + J) ^ K) – 1)))

J = E / 100 / 12 

L = (G – I - A) / A

*/

jQuery(function($){
					
   $('#cap_amount').change(function(){
	var a = $(this).val();
	var b = 2 * $(this).val();
	var c = $('#target_return').val();
	var d = $('#cd').val();
	var e = $('#loan_intrest').val();
	var f = $('#term').val();
	
	$('#double_amount').val(b);	
		var k = (parseFloat(12) * parseFloat(f)); 
		
		var j = (parseFloat(e)/parseFloat(100)/parseFloat(12));  
		
		var ha = parseFloat(j * Math.pow((1 + j),k));
		
		var hc = parseFloat(Math.pow((1 + j),k));
		
		var hb = (parseFloat(hc) - 1);
		
		var hd =  (parseFloat(a)  * (parseFloat(ha) / parseFloat(hb)));  

		var h = hd ? hd : 0;
		
		var i = parseFloat(h) * parseFloat(k);
		
		var ga = parseFloat(a) *  Math.pow((1 + parseFloat(d) / 100) , parseFloat(f));
		
		var gb = parseFloat(a) * Math.pow((1 + parseFloat(c) / 100) ,parseFloat(f)); 
		
		var g = ((parseFloat(ga) + parseFloat(gb) )  -  parseFloat(i)).toFixed(2);
		
		var l = ((g - i - a) / a).toFixed(2);
		
		$('#port_value').val(g);
		$('#roi').val(l);
		

	});
   
    $('#cd').change(function(){
	var a = $('#cap_amount').val();
	var b = 2 * $('#cap_amount').val();
	var c = $('#target_return').val();
	var d = $('#cd').val();
	var e = $('#loan_intrest').val();
	var f = $('#term').val();
	
	$('#double_amount').val(b);	
		var k = (parseFloat(12) * parseFloat(f)); 
		
		var j = (parseFloat(e)/parseFloat(100)/parseFloat(12));  
		
		var ha = parseFloat(j * Math.pow((1 + j),k));
		
		var hc = parseFloat(Math.pow((1 + j),k));
		
		var hb = (parseFloat(hc) - 1);
		
		var hd =  (parseFloat(a)  * (parseFloat(ha) / parseFloat(hb)));  

		var h = hd ? hd : 0;
		
		var i = parseFloat(h) * parseFloat(k);
		
		var ga = parseFloat(a) *  Math.pow((1 + parseFloat(d) / 100) , parseFloat(f));
		
		var gb = parseFloat(a) * Math.pow((1 + parseFloat(c) / 100) ,parseFloat(f)); 
		
		var g = ((parseFloat(ga) + parseFloat(gb) )  -  parseFloat(i)).toFixed(2);
		
		var l = (((g - i - a) / a).toFixed(2)) * 100;
		
		$('#port_value').val(g);
		$('#roi').val(l);

	});
	
   $('#loan_intrest').change(function(){
	var a = $('#cap_amount').val();
	var b = 2 * $('#cap_amount').val();
	var c = $('#target_return').val();
	var d = $('#cd').val();
	var e = $('#loan_intrest').val();
	var f = $('#term').val();
	
	$('#double_amount').val(b);	
		var k = (parseFloat(12) * parseFloat(f)); 
		
		var j = (parseFloat(e)/parseFloat(100)/parseFloat(12));  
		
		var ha = parseFloat(j * Math.pow((1 + j),k));
		
		var hc = parseFloat(Math.pow((1 + j),k));
		
		var hb = (parseFloat(hc) - 1);
		
		var hd =  (parseFloat(a)  * (parseFloat(ha) / parseFloat(hb)));  

		var h = hd ? hd : 0;
		
		var i = parseFloat(h) * parseFloat(k);
		
		var i = i ? i : 0;
		
		var ga = parseFloat(a) *  Math.pow((1 + parseFloat(d) / 100) , parseFloat(f));
		
		var gb = parseFloat(a) * Math.pow((1 + parseFloat(c) / 100) ,parseFloat(f)); 
		
		var g = ((parseFloat(ga) + parseFloat(gb) )  -  parseFloat(i)).toFixed(2);
		
		var l = (((g - i - a) / a).toFixed(2)) * 100;
		
		$('#port_value').val(g);
		$('#roi').val(l);

	});
   
     $('#term').change(function(){
	var a = $('#cap_amount').val();
	var b = 2 * $('#cap_amount').val();
	var c = $('#target_return').val();
	var d = $('#cd').val();
	var e = $('#loan_intrest').val();
	var f = $('#term').val();
	
	$('#double_amount').val(b);	
	var k = (parseFloat(12) * parseFloat(f)); 
		
		var j = (parseFloat(e)/parseFloat(100)/parseFloat(12));  
		
		var ha = parseFloat(j * Math.pow((1 + j),k));
		
		var hc = parseFloat(Math.pow((1 + j),k));
		
		var hb = (parseFloat(hc) - 1);
		
		var hd =  (parseFloat(a)  * (parseFloat(ha) / parseFloat(hb)));  

		var h = hd ? hd : 0;
		
		var i = parseFloat(h) * parseFloat(k);
		
		var ga = parseFloat(a) *  Math.pow((1 + parseFloat(d) / 100) , parseFloat(f));
		
		var gb = parseFloat(a) * Math.pow((1 + parseFloat(c) / 100) ,parseFloat(f)); 
		
		var g = ((parseFloat(ga) + parseFloat(gb) )  -  parseFloat(i)).toFixed(2);
		
		var l = (((g - i - a) / a).toFixed(2)) * 100;
		
		$('#port_value').val(g);
		$('#roi').val(l);

	});
   
   
   
});














