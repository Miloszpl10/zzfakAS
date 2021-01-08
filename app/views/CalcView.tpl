{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
		<fieldset>

        <div class="pure-control-group">
			<label for="x">Kwota kredytu:</label>
			<input id="x" type="text" placeholder="10000" name="x" value="{$form->x}">
		</div>

        <div class="pure-control-group">
			<label for="y">Na ile lat:</label>
			<input id="y" type="text" placeholder="5" name="y" value="{$form->y}">
		</div>

        <div class="pure-control-group">
			<label for="percent">Oprocentowanie:</label>
			<input id="percent" type="text" placeholder="3.3" name="percent" value="{$form->percent}">
		</div>

		<div class="pure-controls">
			<button type="submit" class="pure-button">Oblicz</button>
		</div>

		</fieldset>
	</form>
</div>
</div>

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages inf">
	Wynik: {$res->result}
</div>
{/if}




{/block}