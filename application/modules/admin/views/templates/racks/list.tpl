{include file="../header.tpl"}

<h2 class="title"> -: All Racks :- </h2>
<a href="{base_url()}admin/racks/add">Add New Rack</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {section name=rack loop=$data.data}
        <tr>
            <th scope="row">{$smarty.section.rack.rownum}</th>
            <td>{$data.data[rack].name}</td>
            <td>
                <a href="{base_url()}admin/racks/edit/{$data.data[rack].id}">Edit</a> | 
                <a href="{base_url()}admin/racks/delete/{$data.data[rack].id}">Delete</a></td>
        </tr>
    {sectionelse}
        <tr>
            <td colspan='3'>No data found.</td>
        </tr>
    {/section}
    
  </tbody>
</table>

<nav aria-label="Page navigation example">
    {paginateLinks($data.current_page, $data.last_page, $data.per_page)}
</nav>

{include file="footer.tpl"}
