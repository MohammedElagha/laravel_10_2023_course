<html>

<body>
    <h2>These are all books</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Edition</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->edition }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>


</html>
