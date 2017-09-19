{$message}

<fieldset>
	<legend>Settings</legend>
	<form method="post">

		<p>
			<label for="MOD_API_KEY">API KEY:</label>
			<input id="MOD_API_KEY" name="MOD_API_KEY" type="text" value="{$MOD_API_KEY}" />
		</p>
		<p>
			<label>&nbsp;</label>
			<input id="submit_{$module_name}" name="submit_{$module_name}" type="submit" value="Save" class="button" />
		</p>
	</form>
</fieldset>
