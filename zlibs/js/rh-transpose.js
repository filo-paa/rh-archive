$(document).ready(function(){
	if ($(".ch").length > 0) {
		p_ch=[];
		$(".ch").each(function(k,v){
			p_ch.push(this);
			this.innerText = this.innerText.trimEnd();
		})
		capo = $("p.capo")[0];
		
		capo_val = Number(capo.innerText.split(" ")[1]);
	}
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
		this.innerText = new_array.trimEnd();
		//trimEnd() removes the extra whitespace at the end
		//it avoids cumulation whenever transposeMe() is called multiple times
		//as it keeps adding whitespace at the end on top of the old one
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
	if ($(window).width() < 768){
		e.preventDefault();
		$(this).click();
	}
})
