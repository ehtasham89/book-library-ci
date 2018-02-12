{include file="../header.tpl"}

<h2 class="title"> -: All Racks :- </h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number of Books</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {section name=rack loop=$data.data}
        <tr>
            <th scope="row">{$smarty.section.rack.rownum}</th>
            <td>{$data.data[rack].name}</td>
            <td>{$data.data[rack].books_count}</td>
            <td>
                <a href="{base_url()}client/books/rack/{$data.data[rack].id}">View Books</a>
            </td>
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
