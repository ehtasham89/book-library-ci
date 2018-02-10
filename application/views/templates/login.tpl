{include file="header.tpl"}

{if $error != ''}
    <div class="alert alert-danger" role="alert">
        {$error}
    </div>
{/if}

<h2 class="title"> -: Library System :- </h2>

<form action="" method="post">
    <div class="form-group">
        <label for="email">{ci_language line="Email"}</label>
        <input type="text" class="form-control" name="email" id="email" value="{ci_form_validation field='email'}" aria-describedby="emailHelp" placeholder="Enter email">
        {ci_form_validation field='email' error='true'}
    </div>

    <div class="form-group">
        <label for="password">{ci_language line="Password"}</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        {ci_form_validation field='password' error='true'}
    </div>
    
	<input type="submit" name="action" class="btn btn-primary" value="Submit">
</form>

{include file="footer.tpl"}
