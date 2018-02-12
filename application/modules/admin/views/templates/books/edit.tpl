{include file="../header.tpl"}

<h2 class="title"> -: Edit Book :- </h2>

<div class="col-sm-6 offset-sm-3">
    <form action="" method="post">
        <div class="form-group">
            <label for="title">{ci_language line="Title"}</label>
            <input type="text" class="form-control" name="title" id="title" value="{$book.title}" placeholder="Enter Book Title">
            {ci_form_validation field='title' error='true'}
        </div>
        <div class="form-group">
            <label for="author">{ci_language line="Author"}</label>
            <input type="text" class="form-control" name="author" id="author" value="{$book.author}" placeholder="Enter Author Name">
            {ci_form_validation field='author' error='true'}
        </div>
        <div class="form-group">
            <label for="published_year">{ci_language line="Published Year"}</label>
            <input type="text" class="form-control" name="published_year" id="published_year" value="{$book.published_year}" placeholder="Enter Published Year">
            {ci_form_validation field='published_year' error='true'}
        </div>
        <div class="form-group">
            <label for="rack_id">{ci_language line="Rack"}</label>
            <select name="rack_id" class="form-control">
                <option value="">Select</option>
                {section name=index loop=$racks}
                    <option value="{$racks[index].id}" {if $book.rack_id == $racks[index].id} selected {/if}>{$racks[index].name}</option>
                {sectionelse}
                    <option value="">No data found</option>
                {/section}
            </select>
            {ci_form_validation field='rack_id' error='true'}
            
        </div>
        
        <input type="submit" name="action" class="btn btn-primary" value="Update">
    </form>
</div>

{include file="footer.tpl"}