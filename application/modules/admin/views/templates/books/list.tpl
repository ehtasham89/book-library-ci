{include file="../header.tpl"}

<h2 class="title"> -: All Books :- </h2>
<a href="{base_url()}admin/books/add">Add New Book</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Published Year</th>
      <th scope="col">Rack</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {section name=book loop=$data.data}
        <tr>
            <th scope="row">{$smarty.section.book.rownum}</th>
            <td>{$data.data[book].title}</td>
            <td>{$data.data[book].author}</td>
            <td>{$data.data[book].published_year}</td>
            <td>{$data.data[book].rack_name}</td>
            <td>
                <a href="{base_url()}admin/books/edit/{$data.data[book].id}">Edit</a> | 
                <a href="{base_url()}admin/books/delete/{$data.data[book].id}">Delete</a></td>
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
