<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
	<title>{$title} - {$name}</title> 

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.container,.title{
			margin-top:20px;
		}
		.title, footer{
			text-align: center;
			margin-bottom: 20px;
		}
	</style>
</head> 
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{base_url()}client/">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="{base_url()}client/racks">Racks</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="{base_url()}client/books">Books</a>
      </li>
	  <li class="nav-item">
        <a class="nav-item nav-link" href="{base_url()}client/logout">Logout</a>
      </li>
    </ul>
	<form action="{base_url()}client/books" method="get" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search Books" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>