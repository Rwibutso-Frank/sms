<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body style="width: 60%;margin : 0 auto;background: whitesmoke">
  <h1> Send Sms</h1>
    <form action="/send/sms" method="post">
      @csrf
      <input type="text" name="sms" placeholder="Enter sms to send">
      <input type="text" name="phone" placeholder="Enter phone number to send to">
      <br>
      <input type="submit" value="SEND">  
    </form>
</body>
<style>
  input[type=text] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
h1{
  margin-top: 20%
}
</style>
</html>