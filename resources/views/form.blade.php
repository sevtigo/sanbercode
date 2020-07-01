<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>
    <form action="./welcome" method="POST">
        @csrf
        <label for="firstname">First name:</label><br><br>
        <input type="text" name="firstname" id="firstname"><br><br>
        <label for="lastname">Last name:</label><br><br>
        <input type="text" name="lastname" id="lastname"><br><br>
        <label>Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality</label><br><br>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Australian">Australian</option>
        </select><br><br>
        <label for="language">Language Spoken</label><br><br>
        <input type="checkbox" name="language" id="indonesia" value="Bahasa Indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" id="english" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" name="language" id="other" value="Other">
        <label for="other">Other</label><br><br>
        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
