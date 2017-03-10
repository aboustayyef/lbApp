<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<script>
    window.Laravel = {
        csrfToken: "{{csrf_token()}}"
    }
</script>
    <div id="app">

		<section class="hero is-primary">
		  <div class="hero-body">
		    <div class="container">
		      <h1 class="title is-3">
		        Lebanese Blogs
		      </h1>
		    </div>
		  </div>
		</section>

    	<section id="main" class="give-top">
	    	<div class="container">
		        		<top-posts></top-posts>
		        		<hr>
				        <h1>Posts:</h1>
						<posts></posts>
		        
	    	</div>
    	</section>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>