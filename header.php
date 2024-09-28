<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script src="https://kit.fontawesome.com/e283f80e25.js" crossorigin="anonymous"></script>
    <title>日本共産党北区議員団ホームページ</title>
<script>
	(function(d) {
		var config = {
		kitId: 'aes0nto',
		scriptTimeout: 3000,
		async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
</script>
	<?php wp_head(); ?>
</head>
<body>
<!-------------------------------

	Header

-------------------------------->
<header id="head">
	<h1><a href="<?php echo home_url(); ?>"><img id="main-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h1>
	<nav id="main-nav">
		<ul>
			<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
			<li><a href="<?php home_url(); ?>/member">議員紹介</a></li>
			<li><a href="<?php home_url(); ?>/activity">議員団の活動</a></li>
			<li><a href="<?php home_url(); ?>/policy">政策・提言</a></li>
			<li><a href="<?php home_url(); ?>/dan-news">議員団ニュース</a></li>
			<li><a href="<?php home_url(); ?>/consultation">生活・法律相談</a></li>
		</ul>
	</nav>
</header>