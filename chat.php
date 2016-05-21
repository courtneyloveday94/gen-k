<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home | Gen-K</title>
		<meta name="description" content="Socialise and listen to the hottest kpop hits.">
	  	<meta http-equiv="cleartype" content="on">
	    <meta name="MobileOptimized" content="320">
	    <meta name="HandheldFriendly" content="True">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://use.typekit.net/ixw4hsx.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	</head>

<body>

    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="index.html"><i class="material-icons">&#xE88A;</i>Home</a></li>
            <li><a href="radio.html"><i class="material-icons">&#xE405;</i>Radio</a></li>
            <li id="current"><a href="chat.html"><i class="material-icons">&#xE0CB;</i>Chat</a></li>
            <li><a href="contact.html"><i class="material-icons">&#xE0E1;</i>Contact</a></li>
        </ul>
    </nav>

    <main id="panel">
    <!-- background -->
        <div id="background">
            <div id="cc_recenttracks_ggbgcjrh" class="cc_recenttracks_list"></div>
        <div id="purple-gradient-overlay"></div>
    </div>
  <!-- end of the background code -->
        <header>
            <button class="toggle-button">☰</button>
            <h1 id="logo">Gen-K</h1>
        </header>
      
        <section id="chat">
            <div id="chat-container">
                <div id="chat-messages"></div>
                <div id="chat-input">
                    <form action="" method="">  
                        <div id="left-buttons">
                            <button id="chat-emoji" class="chat-button"><i class="material-icons">&#xE420;</i></button>
                            <button id="chat-settings" class="chat-button"><i class="material-icons">settings</i></button>
                        </div>
                        <div id="chat-user-input">
                            <label for="chat-username">Username:</label>
                            <input type="text" id="chat-username">
                            <span id="chat-username-message"></span>
              
                            <label for="profile-pic-url">Profile Pic URL:</label>
                            <input type="text" id="profile-pic-url">
                        </div>
                        <div class="usermsg">
                            <input name="usermsg" type="text" id="usermsg" placeholder="Enter message here...">
                        </div>
                        <div id="right-buttons">
                            <input name="submitmsg" type="submit"  id="submitmsg" value="&#xE163;" class="material-icons">
                        </div>
                    </form>
                </div>
            </div>
        </section>
 		
        <section class="radio-widget">
            <div class="radio-widget-container">
                <div class="cc_player" data-username="ggbgcjrh"></div>
                <div class="now-playing"><a href="http://london-ssd.myautodj.com:2199/tunein/ggbgcjrh.pls" id="cc_strinfo_song_ggbgcjrh" class="cc_streaminfo"></a></div>
            </div>
        </section>
    </main>

    <!-- allows access to the album art that will be used as the background image -->
    <script language="javascript" type="text/javascript" src="http://london-ssd.myautodj.com:2199/system/recenttracks.js"></script>
    <script language="javascript" type="text/javascript" src="http://london-ssd.myautodj.com:2199/system/player.js"></script>
    <script language="javascript" type="text/javascript" src="http://london-ssd.myautodj.com:2199/system/streaminfo.js"></script>

    <!-- slideout code. don't touch this -->
    <script src="js/slideout.min.js"></script>
    <script>
        var slideout = new Slideout({
          'panel': document.getElementById('panel'),
          'menu': document.getElementById('menu'),
          'padding': 150,
          'tolerance': 70
        });

        // Toggle button
        document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
        });
    </script>
</body>
</html>