<!DOCTYPE html>
<html lang="en">
<head>
	<title>convForm - example</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="dist/jquery.convform.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('../css/demo.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../css/jquery.convform.css')}}">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<section id="demo">
	    <div class="vertical-align">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">
	                    <div class="card no-border">
	                        <div id="chat" class="conv-form-wrapper">
	                            <form action="" method="GET" class="hidden">
	                                <select conv-question="Hello! ">
	                                    <option value="yes">Yes</option>
	                                    <option value="sure">Sure!</option>
	                                </select>
	                                <input type="text" name="name" conv-question="Alright! First, tell me your full name, please.|Okay! Please, tell me your name first.">
	                                <input type="text" conv-question="Howdy, {name}:0! It's a pleasure to meet you. (note that this question doesn't expect any answer)" no-answer="true">
	                                <select name="programmer" conv-question="So, are you a programmer? (this question will fork the conversation based on your answer)">
	                                    <option value="yes">Yes</option>
	                                    <option value="no">No</option>
	                                </select>
	                                <div conv-fork="programmer">
	                                    <div conv-case="yes">
	                                        <input type="text" conv-question="A fellow programmer! Cool." no-answer="true">
	                                    </div>
	                                    <div conv-case="no">
		                                    <select name="thought" conv-question="Have you ever thought about learning? Programming is fun!">
		                                    	<option value="yes">Yes</option>
		                                    	<option value="no">No..</option>
		                                    </select>
	                                    </div>
	                                </div>
	                                <input type="text" conv-question="This plugin supports multi-select too. Let's see an example." no-answer="true">
	                                <select name="multi[]" conv-question="What kind of music do you like?" multiple>
	                                    <option value="Rock">Rock</option>
	                                    <option value="Pop">Pop</option>
	                                    <option value="Country">Country</option>
	                                    <option value="Classic">Classic</option>
	                                </select>
	                                <input type="text" conv-question="convForm also supports regex patterns. Look:" no-answer="true">
	                                <input conv-question="Type in your e-mail" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
	                                <input conv-question="Now tell me a secret (like a password)" type="password" data-minlength="6" id="senha" name="password" required placeholder="password">
																	<select conv-question="Selects also support callback functions. For example, try one of these:">
																			<option value="google" callback="google">Google</option>
																			<option value="bing" callback="bing">Bing</option>
																	</select>
	                                <select conv-question="This is it! If you like me, consider donating! If you need support, contact me. When the form gets to the end, the plugin submits it normally, like you had filled it." id="">
	                                    <option value="">Awesome!</option>
	                                </select>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- <script type="text/javascript" src="jquery-1.12.3.min.js"></script> -->
	<!-- <script type="text/javascript" src="dist/autosize.min.js"></script> -->
	<!-- <script type="text/javascript" src="dist/dragscroll.js"></script> -->
	<!-- <script type="text/javascript" src="dist/jquery.convform.min.js"></script> -->
	<script src="{{asset('../js/jquery-1.12.3.min.js')}}"></script>
	<script src="{{asset('../js/autosize.min.js')}}"></script>
	<script src="{{asset('../js/jquery.convform.js')}}"></script>
	<script src="{{asset('../js/app.js')}}"></script>

	<script>
		function google() {
			window.open("https://google.com");
		}
		function bing() {
			window.open("https://bing.com");
		}
	</script>
</body>
</html>
