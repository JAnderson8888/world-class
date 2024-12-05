<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vue in Laravel</title>
   <link href="{{ mix('css/app.css') }}" rel="stylesheet">
   <script>
      window.Laravel = {
         GOOGLE_MAPS_API_KEY: "{{ env('GOOGLE_MAPS_API_KEY') }}"
      };
   </script>
</head>
<body>
   <div id="app">
      <home></home>
   </div>

   <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>