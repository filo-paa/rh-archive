function transposeMe(amount){
	capo = $("p.capo")[0];
	sum = (Number(capo.innerText.split(" ")[1])-Number(amount));
	if ((sum==12)||(sum==-12)){
		sum=0;
	}
	capo.innerText = "Capo: " + sum;
	$("p.ch").each(function(k,v){
		new_array = "";
		let ch_array = v.innerText.split(" ");
		for (let i = 0; i < ch_array.length; i++) {
			let ch = ch_array[i];
			let new_chord = transposeChord(ch,amount);
			new_array = new_array.concat(transposeChord(ch,amount) + " ");
			}
		this.innerText = new_array;
		})
}
function transposeChord(chord, amount) {
	var scale = ["C", "C#", "D", "Eb", "E", "F", "F#", "G", "Ab", "A", "Bb", "B"];
	return chord.replace(/[CDEFGAB]#?b?/g,function(match) {
		var i = (scale.indexOf(match) + amount) % scale.length;
        return scale[ i < 0 ? i + scale.length : i ];
		});
}