{include file="../header.tpl"}

<h2 class="title"> -: Update Rack :- </h2>

<div class="col-sm-6 offset-sm-3">
    <form action="" method="post">
    <div class="form-group">
            <label for="name">{ci_language line="Name"}</label>
            <input type="text" class="form-control" name="name" id="name" value="{$rack.name}" placeholder="Enter Rack Name">
            {ci_form_validation field='name' error='true'}
        </div>
        
        <input type="submit" name="action" class="btn btn-primary" value="Update">
    </form>
</div>

{include file="footer.tpl"}
