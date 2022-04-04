<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component</title>
</head>
<body>
    <h1>How to call Component This  Page</h1>
    <hr>
    {{-- Structure of Component
        <x-Component name/> 
        --}}
        <x-card title='This is Card' descripton="this is description" paragraph="this is paragraph"/>
        @php
            $helllo='hello';    
        @endphp
        <x-card title='This is Card2' descripton="this is description2" paragraph="this is paragraph2" :phpValue=$hello/>
</body>
</html>