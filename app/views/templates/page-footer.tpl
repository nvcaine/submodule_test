{if isset($scripts)}
	{foreach from=$scripts item=script}
		<script src="{$appURL}{$script}"></script>
	{/foreach}
{/if}
