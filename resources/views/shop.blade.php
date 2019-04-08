<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.7 -  Pagination Link Customizations - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>

<div class="container">
    <h1>Laravel 5.7 -  Pagination Link Customizations - ItSolutionStuff.com</h1>
    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
        @foreach($links as $link)
        <tbody>
            <td>{{ $link->title }}</td>
            <td>{{ $link->url }}</td>
            <td>{{ $link->description }}</td>
        </tbody>
        @endforeach
    </table>
    {{ $links->onEachSide(1)->links() }}
</div>

</body>
</html>
