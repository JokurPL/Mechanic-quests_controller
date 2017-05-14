<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zlecenia.pl</title>
</head>
<body class="btnPrint">
<style>
    @import url('https://fonts.googleapis.com/css?family=Arimo');
    table {
        font-family: 'Arimo', sans-serif;
        margin: 0 auto;
        padding: 1%;
        border: 0;
        font-size: 20px;
        text-align: center;
        vertical-align: middle;
    }
    thead {
        vertical-align: middle;
        border: 2px solid #222;
    }
    tbody {
        vertical-align: middle;
        padding: 10px;
        font-weight: bold;
        border: 2px solid #222;
    }
    tbody > tr > td {
        padding: 5%;
        font-weight: 500;
    }
    thead > tr > th {
        color: #222;
        background: #eee;
        padding: 1%;
    }
    h3 {
        font-size: 32px;
        font-family: 'Arial';
        font-weight: 500;
        text-align: right;
        margin-right: 20%;
    }
    .a {
        font-size: 32px;
        position: relative;
        margin-left: 50%;
        font-family: 'Arimo', sans-serif;
        color: #fff;
        background-color: #222;
        padding: 1%;
        border-radius: 5%;
        text-decoration: none;
        text-transform: uppercase;
        transition: all 0.3s linear;
        cursor: pointer;
    }

    .a:hover {
        background-color: #555;
    }

    .aa {
        position: relative;
        padding:1%;
        background: #2a88bd;
        color: #fff;
        font-family: 'Arimo', sans-serif;
        text-transform: uppercase;
        text-decoration: none;
        font-size: 32px;
        border-radius: 5%;
        margin-left: 35%;
    }

    @media print {
        a {
            display: none;
        }
    }
</style>
    <table border="5">
        <thead>
        <tr>
            <th>Nazwa zlecenia:</th>
            <th>Wartość zlecenia:</th>
            <th>Imię i nazwisko klienta:</th>
            <th>Nr. telefonu klienta:</th>
            <th>Opis zlecenia:</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$quest->name}}</td>
            <td>{{$quest->prize}}</td>
            <td>{{$quest->client}}</td>
            <td>{{$quest->tel}}</td>
            <td>{{$quest->content}}</td>
        </tr>
        </tbody>
    </table>
    <h3>Podpis: </h3>

 <a class="a"  onclick="window.print();">Drukuj</a>
<br>
 <a class="aa" href="{{URL::previous()}}">Powrót</a>

</body>
<script>


</script>
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.printPage.js"></script>
</html>
