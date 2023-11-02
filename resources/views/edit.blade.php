<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update product :</h1>
    @if($p)
    <form action="{{ url('/update_product', $p->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label>Create a product:</label>
        <input type="text" name="prodname" id="prodname" value="{{ $p->name }}" required>
        <label>Slug:</label>
        <input type="text" name="slug" id="slug" value="{{ $p->slug }}" required>
        <label>Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $p->stock }}" required>
       
        <label>Category:</label>
        <select name="category" id="category" required>
            @foreach($cats as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
    @endif
</body>
</html>