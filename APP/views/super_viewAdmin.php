<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style_register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
        $(function(){
            $('#super_header').load('super_header.html')
        })
    </script>
</head>
<body>
    <div id="super_header"></div>
    <table class="content-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>District</th>
            <th>ID Number</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Sumeela</td>
            <td>Matara</td>
            <td>1000</td>
            <td>
                <button type="button">
                    <span class="button-text">Remove</span>
                </button>
            </td>
          </tr>
          <tr class="active-row">
            <td>Nuwan</td>
            <td>Matara</td>
            <td>1001</td>
            <td>
                <button type="button">
                    <span class="button-text">Remove</span>
                </button>
            </td>
          </tr>
          <tr>
            <td>Dinuka</td>
            <td>Matara</td>
            <td>1002</td>
            <td>
                <button type="button">
                    <span class="button-text">Remove</span>
                </button>
            </td>
          </tr>
        </tbody>
      </table>
    

</body>
</html>