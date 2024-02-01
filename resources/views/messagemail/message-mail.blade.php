<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
  ">
  <style>
    body {
      background: #E4F1F7;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .main-box{
      position: relative;
      /* padding: 100px 0 !important; */
      padding-bottom: 270px !important;
  
    }
    .letter-design{
      position: absolute;
      bottom: 0;
      left: 0;
      height: 110%;
      width: 100%;
      background-color: #F4F4F6;
      border: 5px dashed;
      background: linear-gradient(white, white) padding-box,
              linear-gradient(to right, rgb(180, 2, 2), rgba(43, 8, 184, 0.538)) border-box;
      border-top: none;
      clip-path: polygon(47% 70%, 100% 50%, 100% 100%, 0 100%, 0% 50%);



    }
  </style>
</head>

<body>
  <div class="container">
    <h2 class=" text-center  text-primary">we get new mail message</h2>
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="p-3 shadow-lg bg-white main-box">
          <h4 class="text-center text-info">send us a a Message</h4>
          <hr>
          <table class="table table-bordered table-hover">
            <tr>
              <th>Name: </th>
              <td>{{ $mailData['name'] }}</td>
            </tr>
            <tr>
              <th>E-mail: </th>
              <td>{{ $mailData['email'] }}</td>
            </tr>
            <tr>
              <th>Subject </th>
              <td>{{ $mailData['subject'] }}</td>
            </tr>
            <tr>
              <th>Message </th>
              <td>{{ $mailData['message'] }}</td>
            </tr>
          </table>
          <div class="letter-design shadow-sm"></div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>
