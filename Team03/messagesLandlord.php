<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <title>Landlord Messages</title>

    <style type="text/css">
      #jumbo {
        text-align: center;
      }

      #viewMessages {
      }

      #goback {
      }

      .alert-message {
        margin: 20px 0;
        padding: 20px;
        border-left: 3px solid #eee;
      }

      .alert-message-success {
        background-color: #f4fdf0;
        border-color: #3c763d;
      }

      #messageList {
        width: 100%;
        height: 100%;
        background-color: lightgray;

        display: none;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron">
      <h1 class="display-4" id="jumbo">Landlord Messages</h1>

      <hr class="my-4" />

      <a class="btn btn-primary btn-lg" id="viewMessages" href="#" role="button">View messsges</a>

      <a
        class="btn btn-primary btn-lg"
        id="goback"
        href="landlord.php"
        role="button"
        >Go back</a
      >
    </div>

    <div class="container" id="messageList">
      <h2>Below you can see all messages</h2>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">From:</th>
            <th scope="col">Replying to Post:</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>Hello, Im interested in this leasing your apartment.</td>
          </tr>
          <tr>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Hello, Im interested in this leasing your apartment.</td>
          </tr>
          <tr>
            <td>Larry</td>
            <td>the Bird</td>
            <td>Hello, Im interested in this leasing your apartment.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <script type="text/javascript">
      document.getElementById("viewMessages").onclick = function() {
        document.getElementById("messageList").style.display = "block";
      };
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>