<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<title>{$title}</title>

	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>-->

	{if isset($styles)}
		{foreach from=$styles item=style}
			<link href="{$appURL}{$style}" rel="stylesheet">
		{/foreach}
	{/if}
</head>