$(document).ready(function(){
	p_ch=[];
	$("p.ch").each(function(k,v){
		p_ch.push(this);
	})
	 capo = $("p.capo")[0];
	capo_val = Number(capo.innerText.split(" ")[1]);
})

function transposeMe(amount){
	let capo_val = Number(capo.innerText.split(" ")[1]);
	let sum = capo_val - Number(amount);
	if ((sum==12)||(sum==-12)){
		sum=0;
	}
	capo.innerText = "Capo: " + sum;
	$.each(p_ch,function(){
		let new_array = "";
		let ch_array = this.innerText.split(" ");
		for (let i = 0; i < ch_array.length; i++) {
			let ch = ch_array[i];
			let new_chord = transposeChord(ch,amount);
			new_array = new_array.concat(transposeChord(ch,amount) + " ");
			}
		this.innerText = new_array;
		})
		new_array=[];
}
function transposeChord(chord, amount) {
	var scale = ["C", "C#", "D", "Eb", "E", "F", "F#", "G", "Ab", "A", "Bb", "B"];
	return chord.replace(/[CDEFGAB]#?b?/g,function(match) {
		var i = (scale.indexOf(match) + amount) % scale.length;
        return scale[ i < 0 ? i + scale.length : i ];
		});
}

$('.no-zoom').bind('touchend', function(e) {
  e.preventDefault();
  // Add your code here. 
  $(this).click();
  // This line still calls the standard click event, in case the user needs to interact with the element that is being clicked on, but still avoids zooming in cases of double clicking.
})