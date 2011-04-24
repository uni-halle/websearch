<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Uni Halle Web Search</title>

     <link rel="stylesheet" href="style.css">

</head>

<body>

	<!-- begin: #col3 static column -->
    <div id="col3" class="clearfix">
        <div id="col3_content" class="clearfix">             

            <!-- begin: inhalt -->
            
            <h1>Suche</h1>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            
            <form method="get" action="" id="search"  class="clearfix">
	            
	            <fieldset id="mainsearch">
		            <input type="hidden" value="0" name="offset" />
		            
		            <p>
		            	<label for="words">Suchwort eingeben</label>
			            <input type="text" id="words" name="words" autocomplete="off" />
			            
			    		<input type="submit" value="Suchen" alt="submit" title="Suchen" />
		    		</p>
		    	</fieldset>

		    	<p><a id="showadvanced" href="#advancedsearch">&#8595; Erweiterte Suche &#8595;</a></p>
		    	
		    	<fieldset id="advancedsearch" class="clearfix">
		    		<p>
			    		<label for="config">Durchsuche</label>
			    		<select name="config">
					        <optgroup label="gesamte ...">
					            <option value="htdig.std.search" >Kernpräsenz</option>
					            <option value="htdig.all.search" >Universität</option>
					        </optgroup>
					        <optgroup label="nur ...">
					            <option value="htdig.kommvz.virtual" >Kommunikationsverzeichnis</option>
					            <option value="htdig.presse.virtual" >Pressemitteilungen</option>
					            <option value="htdig.studium.virtual" >Studieng&auml;nge</option>
					        </optgroup>
					    </select>
				    </p>
				    <p>
					    <label for="method">Suche nach</label>
					    <select name="method">
					        <option value="and" >allen Begriffen</option>
					        <option value="or" >mindestens einem Begriff</option>
					        <option value="boolean" >booleschem Ausdruck</option>
					    </select>
				    </p>
				    
	    		</fieldset>
	    		
	    	</form>

           <div id="suchergebnisse">
                        
              <h2>Suchergebnisse (  -  von  )</h2>
              
               <ul class="pagination">
					<li>1</li>
            	 	<li><a href="#">2</a></li>
            	 	<li><a href="#">3</a></li>
            	 	<li><a href="#">4</a></li>
            	 	<li><a href="#">5</a></li>
            	 	<li><a href="#">6</a></li>
            	 	<li><a href="#">7</a></li>
            	 	<li><a href="#">>></a></li>
          		</ul>
          		
          		<ul class="sortierung">
          			<li class="label">Sortierung:</li>
          			<li class="active"><a href="#">&#8744; Relevanz</a></li>
          			<li><a href="#">&#8744; Datum</a></li>
          			<li><a href="#">&#8744; Titel</a></li>
          		</ul>

				<div class="ergebnis">
					<h3><a href="#" title="">Super Suchergebnis</a> <span class="datum">13.06.2010</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ...</p>
					<p><a href="#">http://uni-halle.de/supersuchergebnis</a></p>
				</div>
				
				<div class="ergebnis">
					<h3><a href="#" title="">Super Suchergebnis</a> <span class="datum">13.06.2010</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ...</p>
					<p><a href="#">http://uni-halle.de/supersuchergebnis</a></p>
				</div>
				
				<div class="ergebnis">
					<h3><a href="#" title="">Super Suchergebnis</a> <span class="datum">13.06.2010</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ...</p>
					<p><a href="#">http://uni-halle.de/supersuchergebnis</a></p>
				</div>
              
              	<ul class="pagination">
					<li>1</li>
	        	 	<li><a href="#">2</a></li>
	        	 	<li><a href="#">3</a></li>
	        	 	<li><a href="#">4</a></li>
	        	 	<li><a href="#">5</a></li>
	        	 	<li><a href="#">6</a></li>
	        	 	<li><a href="#">7</a></li>
	        	 	<li><a href="#">>></a></li>
	      		</ul>

           </div>
           
	    </div>
	    <!-- end: #col3_content -->
	    
	    <div id="sidebar">
	    	
	    	<div id="suchvorschlaege">
	    			
    			<h2>Häufige Suchen</h2>
    			
	    		<a href="index.php?words=Bachelor">Bachelor</a>
	    		<a href="index.php?words=Beine">Beine</a>
	    		<a href="index.php?words=Grosse">Grosse</a>
	    		<a href="index.php?words=Informatik">Informatik</a>
	    		<a href="index.php?words=Ivo">Ivo</a>
	    		<a href="index.php?words=Martin">Martin</a>
	    		<a href="index.php?words=Medizin">Medizin</a>
	    		<a href="index.php?words=Salz">Salz</a>
	    		<a href="index.php?words=Schule">Schule</a>
	    		<a href="index.php?words=Semmel">Semmel</a>
	    		<a href="index.php?words=Sieben">Sieben</a>
	    		<a href="index.php?words=Solche">Solche</a>
	    		<a href="index.php?words=Sondern">Sondern</a>
	    		<a href="index.php?words=Student">Student</a>
	    		<a href="index.php?words=Studium">Studium</a>
	    		<a href="index.php?words=Säure">Säure</a>
	    		<a href="index.php?words=bioinf">bioinf</a>
	    		<a href="index.php?words=bioinformatik">bioinformatik</a>
	    		<a href="index.php?words=test">test</a>
	    		<a href="index.php?words=und">und</a>
	    		
	    	</div>
           
       		<div id="suchhilfe">
	    		
	    		<h2>Suchhilfen</h2>
	    		
                <p>Folgende Wörter wurden oft mit <em>Suchwort</em> kombiniert:
                <a href="index.php?words=Suchwort eingeben">eingeben</a></p>
                
                <p>Folgende Wörter wurden oft mit <em>eingeben</em> kombiniert:
                <a href="index.php?words=eingeben Suchwort">Suchwort</a></p>
                
                <p>Nutzer die nach <em>Suchwort</em> gesucht haben, haben auch oft nach folgenden Begriffen gesucht:
                <a href="index.php?words=eingeben">eingeben</a></p>
                
                <p>Nutzer die nach <em>eingeben</em> gesucht haben, haben auch oft nach folgenden Begriffen gesucht:
                <a href="index.php?words=Suchwort">Suchwort</a></p>
                        
           </div>
       
       	</div>
	    
    </div>
	<!-- end: #col3 -->
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="effects.js"></script>

</body>

</html>