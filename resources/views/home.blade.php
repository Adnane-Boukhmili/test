<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/add_category') }}" method="POST">
        @csrf
        <label>Create a category:</label>
        <input type="text" name="catname" id="catname" required>
        <input type="submit" value="Submit">
    </form>
    <br>
    <form action="{{ url('/add_product') }}" method="POST">
        @csrf
        <label>Create a product:</label>
        <input type="text" name="prodname" id="prodname" required>
        <label>Slug:</label>
        <input type="text" name="slug" id="slug" required>
        <label>Stock:</label>
        <input type="number" name="stock" id="stock" required>
        <label>Category:</label>
        <select name="category" id="category" required>
            @foreach($cats as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endforeach
        </select>
        <input type="submit" value="Submit">
    </form><br><br>
    
    


    <h1>Products with Categories</h1>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <form method="POST" action="{{url('/delete_product',$product->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <form method="GET" action="{{url('/edit_product',$product->id)}}">
                        @csrf
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    

</body>
</html>