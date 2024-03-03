<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .profile-container {
            text-align: center;
            padding: 20px;
            width: 30%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        table {
          text-align: start;
          
        }
        button {
          background-color: orange;
          padding: 5px;
          
        }
        .button {
          display: inline-block;
          padding: 10px 20px;
          font-size: 16px;
          text-align: center;
          text-decoration: none;
          cursor: pointer;
          border: 2px solid #000000;
          color: #000000;
          border-radius: 5px;
          transition: background-color 0.3s;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <img src="{{ asset('/img/pp1.jpg') }}" alt="Foto Profil" class="profile-image">
    <table align="center">
      <tr>
        <td>Nama </td>
        <td>:</td>
        <td><p>{{ $data['Nama'] }}</p></td>
      </tr>
      <tr>
        <td>Jenis Kelamin </td>
        <td>:</td>
        <td><p>{{ $data['Jenis Kelamin'] }}</p></td>
      </tr>
      <tr>
        <td>Tanggal Lahir </td>
        <td>:</td>
        <td><p>{{ $data['ttl'] }}</p></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><p>{{ $data['Alamat'] }}</p></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><p>{{ $data['Email'] }}</p></td>
      </tr>
      <tr>
        <td>No HP</td>
        <td>:</td>
        <td><p>{{ $data['No HP'] }}</p></td>
      </tr>
      <tr>
        <td><button class="button" type="button">Edit</button></td>
      </tr>
    </table>
</div>

</body>
</html>
