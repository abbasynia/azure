<html>
<head>
<Title>Abbas' page</Title>
<style type="text/css">
    body { background-color: #fff; border-top: solid 10px #000;
        color: #333; font-size: .85em; margin: 20; padding: 20;
        font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
    }
    h1, h2, h3,{ color: #000; margin-bottom: 0; padding-bottom: 0; }
    h1 { font-size: 2em; }
    h2 { font-size: 1.75em; }
    h3 { font-size: 1.2em; }
    table { margin-top: 0.75em; }
    th { font-size: 1.2em; text-align: left; border: none; padding-left: 0; }
    td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
</style>
</head>
<body>
<h1>Who am I?!</h1>
    <p>My name is <strong>Abbas Ali Mirza</strong>. I'm a 2nd year computer scientist working on the Captain Chip project!</p>

<p>Check out my Wordpress blog: </p>
<iframe width="420" height="315" src="https://manutdabbas1994.wordpress.com" frameborder="0" allowfullscreen></iframe>
<p>And here are the recent commitsgjvgv to GitHub! </p>
 <div id="container">
    <div id="main">
                <div id="github-commits"></div>
    </div>
  </div> 
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script src="js/github.commits.widget.js"></script>
<script>
    $(function() {
        $('#github-commits').githubInfoWidget(
            { user: 'abbasynia', repo: 'azure', branch: 'master', last: 10 });
    });
</script>
</body>
</html>
