<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('createcv.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="phone" name="phone" placeholder="phone">
        <input type="text" name="address" placeholder="address">
        <input type="text" name="job" placeholder="job">
        <input type="text" name="experience" placeholder="experience">
        <input type="text" name="education" placeholder="education">
        <input type="text" name="skills" placeholder="skills">
        <input type="text" name="languages" placeholder="languages">
        <input type="text" name="interests" placeholder="interests">
        <input type="text" name="references" placeholder="references">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
