<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSIB</title>
</head>
<body>
    <h1>Hello World</h1>
    <p><?php echo $user;?></p>
    <p>Nama : {{$user}}</p>

    <table style="width:100%">
    <?php $i = 1;?>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Email</td>
    </tr>
    @foreach ($modelUser as $user)
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['email'] }}</td>
    </tr>
    <?php $i++;?>
    @endforeach
</table>
</body>
</html>