<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Bootstrap dan AJAX</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#loadData').click(function(){
                $.ajax({
                    url: 'data.php', // URL ke sumber data anda
                    type: 'GET',
                    success: function(response){
                        $('#dataContainer').html(response);
                    },
                    error: function(){
                        alert('Error loading data');
                    }
                });
            });
        });
    </script>
</body>
</html>
