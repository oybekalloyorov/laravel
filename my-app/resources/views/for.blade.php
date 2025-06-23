@foreach ($records as $record)
    <p>This is {{ $record }} - {{ $loop->index}}</p>
 @endforeach
