<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form method="POST" action="/welcome">
    @csrf
    <label for="first_name">First Name:</label> <br />
      <br />
      <input type="text" id="first_name" name="first_name" /> <br />
      <br />
      <label for="last_name">Last Name:</label> <br />
      <br />
      <input type="text" id="last_name" name="last_name"/> <br />
      <br />
        <label>Gender: </label> <br />
        <br />
        <input type="radio" name="gender" value="0" /> Male <br />
        <input type="radio" name="gender" value="1" /> Female <br />
        <input type="radio" name="gender" value="2" /> Other <br />
        <br />
        <label>Nationality</label> <br />
        <br />
        <select>
            <option>Indonesian</option>
            <option>Singapore</option>
            <option>Malaysian</option>
            <option>Australian</option>
        </select>
        <br />
        <br />
        <label>Language Spoken</label> <br />
        <br />
        <input type="checkbox" name="language" value="0" /> Bahasa Indonesia
        <br />
        <input type="checkbox" name="language" value="1" /> English <br />
        <input type="checkbox" name="language" value="2" /> Other <br />
        <br />
        <label for="bio">Bio: </label> <br />
        <br />
        <textarea id="bio" cols="30" rows="10"></textarea> <br />
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>