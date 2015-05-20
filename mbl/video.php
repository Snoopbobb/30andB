<?php include("includes/header.php"); ?>


<div id="content">





            <h1>Upload A Video To Mybaseballlesson.com Now!</h1>
            
            <p>Submit a video below and a current or former professional
			player will evaluate it and give you personal feedback with
			tips, improvements, and comments about the things that 
			you already do well and shouldn’t change.  Your professional
			evaluation will give you the edge to become a better baseball
			player.  Receive a prefessional evaluation today for only
			$19.95!  Members pay only $14.95!</p>
			
			<h1>Video Instructions</h1>
			
			<h2>Pitching Lesson Request - Shooting your video</h2>
			<p>From the windup - Please shoot a short video showing 5 pitches from the side view (if right handed, from the third base side.  If left handed, from the first base side)  Shoot another 5 pitches from the stretch (side view).  Then shoot 5 pitches from behind the mound from either the windup or stretch position.</p>

			<p>Details - please make sure the video shows your entire delivery from head to toe and start to finish.  You can submit 3 separate videos to show the different positions.</p>

			<h2>Hitting Lesson Request</h2>
			<p>Tee work - Please shoot a short video showing 5 swings from the side view, please hold your finish for a couple seconds.   Shoot an additional 5 swings doing soft toss holding your finish for a couple seconds.  Then shoot 5 swings off the tee from behind home plate and hold your finish for a couple of seconds.</p>

			<p>Details - please make sure your entire swing is captured in the video, head to toe and follow through.  You can submit 3 separate videos to show the different drills.</p>
			
			<form action="upload.php" method="post"
			enctype="multipart/form-data">
			<label for="file"><h2>Submit Your Video:</h2></label>
			<input type="file" name="file" id="file" /> 
			<br />
			<input type="submit" name="submit" value="Submit" />
			</form>
			
			
 			

    
<?php include("includes/footer.php"); ?> 



</div><!--Wrapper-->

</body>
</html>

