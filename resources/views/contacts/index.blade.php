<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title>
</head>

<body>
    <h1> All Contacts </h1>

    <div>
        <a href={{ route('contacts.create') }}>Add Contact</a>

        <?php foreach ($contacts as $id => $cont): ?>

        <p>{{ $cont['name'] }} | {{ $cont['phone'] }} | <a href={{ route('contacts.show', $id) }}>Show Contact</a>

            <?php endforeach ?>

    </div>
</body>

</html>
