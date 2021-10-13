<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Toko Theo</title>
</head>
<body>
    <h1>WELCOME TO THEO SHOP</h1>
    <h2>Here are the list of our menu : </h2>
    <div style="float: left">
        <h3>Pudding</h3>
        <ul style="list-style: none;">
            <a href="/menu/pudding/pannacotta"><li style='margin-bottom: 20px;'><img src="{{ asset('images/PuddingPannacotta.png') }}" style='width: 100px;'><br> Pannacotta</li></a>
            <a href="/menu/pudding/fla"><li style='margin-bottom: 20px;'><img src="{{ asset('images/PuddingFla.png') }}" style='width: 100px;'><br> Fla</li></a>
            <a href="/menu/pudding/buah"><li style='margin-bottom: 20px;'><img src="{{ asset('images/PuddingBuah.png') }}" style='width: 100px;'><br> Buah</li></a>
        </ul>
    </div>
    <div style="float: left">
        <h3>Roti</h3>
        <ul style="list-style: none;">
            <a href="/menu/roti/tawar"><li style='margin-bottom: 20px;'><img src="{{ asset('images/RotiTawar.png') }}" style='width: 100px;'><br> Tawar</li></a>
            <a href="/menu/roti/gandum"><li style='margin-bottom: 20px;'><img src="{{ asset('images/RotiGandum.png') }}" style='width: 100px;'><br> Gandum</li></a>
            <a href="/menu/roti/coklat"><li style='margin-bottom: 20px;'><img src="{{ asset('images/RotiCoklat.png') }}" style='width: 100px;'><br> Coklat</li></a>
        </ul>
    </div>
</body>
</html>