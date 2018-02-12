{include file="../header.tpl"}

<h2 class="title"> -: All Books in Rack:- </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Published Year</th>
      <th scope="col">Rack</th>
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
