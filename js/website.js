(function($){
	var score = 0;
	$box = $('#box');
	var myVar = setInterval(color, 750);
	document.getElementById('box').style.backgroundColor = "red";
	$("#apisub").submit(function (e){
		e.preventDefault();
		$('.apistuff').html('');
		var regionStuff = document.getElementById("region");
		var summStuff = document.getElementById("fsumm");
		var summ = summStuff.value;
		var region = regionStuff.value;
		var API_KEY = 'f997e34a-6afc-4245-b202-6ee678aa6c6f';
		var summData;
		var matchData;
		if(summ != ''){
			$.ajax({
				url: 'https://na.api.pvp.net/api/lol/'+region+'/v1.4/summoner/by-name/' + summ + '?api_key=' + API_KEY,
            type: 'GET',
            dataType: 'json',
            data: {
				
            },
				 success: function (data) {
					 summData = data;
					 var SUMMONER_NAME_NOSPACES = summ.replace(" ", "");

					SUMMONER_NAME_NOSPACES = summ.toLowerCase().trim();
					summonerID = data[SUMMONER_NAME_NOSPACES].id;
					
					region = region.toLowerCase();
					$.ajax({
						url: 'https://na.api.pvp.net/api/lol/'+region+'/v2.2/matchlist/by-summoner/' + summonerID + '?api_key=' + API_KEY,
						type: 'GET',
						dataType: 'json',
						data: {

						},
						success: function (data) {
							matchData = data;
							for(i = 0; i < 10; i++){
								matches = matchData['matches'];
								matchID = matches[i].matchId
								
								$.ajax({
									url: 'https://na.api.pvp.net/api/lol/'+region+'/v2.2/match/' + matchID + '?api_key=' + API_KEY,
									type: 'GET',
									dataType: 'json',
									data: {

									},
									success: function (data) {
										for(j = 0; j < 10; j++){
											if(data['participantIdentities'][j]['player'].summonerId == summonerID){
												apisect = document.getElementById('API');
												var won = data['participants'][j]['stats'].winner;
												if(won){
													$( ".apistuff" ).append( '<h3><font color="green">VICTORY</font></h3>' );
												}
												else{
													$( ".apistuff" ).append( '<h3><font color="red">LOSS</font></h3>' );
												}
												$( ".apistuff" ).append( '<h4>Stats</h4><h5>Kills: '+data['participants'][j]['stats'].kills+'</h5><h5>Deaths: '+data['participants'][j]['stats'].deaths+'</h5> <h5>Assists: '+data['participants'][j]['stats'].assists+'</h5>'   );
											}
										}
				
									}
								});
							}
							
				
						}
					});
				}
			});
        }
	});
	
		$("#tophide").click(function(){
			$("top").toggle();
		});
	    $("#midhide").click(function(){
			$("mid").toggle();
		});
		$("#jghide").click(function(){
			$("jg").toggle();
		});
	    $("#supphide").click(function(){
			$("supp").toggle();
		});
	    $("#adchide").click(function(){
			$("adc").toggle();
		});
		
		$('#box').click(function(){
			if(box.style.backgroundColor=="red"){
				score++;
				var scoreDiv = document.getElementById('score');
				scoreDiv.innerHTML = "<p>Score: "+score+"</p>";
			}
			else{
				if(score != 0){
					score--;
					var scoreDiv = document.getElementById('score');
					scoreDiv.innerHTML = "<p>Score: "+score+"</p>";
				}
			}
		});
		
		function color(){
				var random = Math.floor((Math.random() * 5) + 1);
				$box.fadeOut('fast');
				if(random == 1){
					document.getElementById('box').style.backgroundColor = "red";
					$box.fadeIn('fast');
				}
				if(random == 2){
					document.getElementById('box').style.backgroundColor = "blue";
					$box.fadeIn('fast');
				}
				if(random == 3){
					document.getElementById('box').style.backgroundColor = "green";
					$box.fadeIn('fast');
				}
				if(random == 4){
					document.getElementById('box').style.backgroundColor = "yellow";
					$box.fadeIn('fast');
				}
				if(random ==5 ){
					document.getElementById('box').style.backgroundColor = "purple";
					$box.fadeIn('fast');
				}
		};
})(jQuery);