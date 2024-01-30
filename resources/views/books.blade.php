<table class="table">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Description</th>
        <th>Publication Year</th>
        <th>Total Copies</th>
        <th>Available Copies</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->genre }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->publication_year}}</td>
        <td>{{ $book->total_copies }}</td>
        <td>{{ $book->available_copies }}</td>
    </tr> 
    @endforeach
</table>