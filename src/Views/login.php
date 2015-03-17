<?php

echo <<< HTMLBLOCK
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="Style1.css">
            <title>Log in page</title>
        </head>
        <body>
            <table>
                <tr>
                    <td></td>
                    <td align="center"><h1>Log In</h1></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <form method="POST" action="Auth/index">
                        Username: <input type="text" name="usernameField" size="15" id="usernameField" ><br>
                        Password: <input type="password" name="passwordField" size="16" id="passwordField" ><br><br>
                        InFile <input type="radio" name="authenticationType" value="InFile" checked> InMemory <input type="radio" name="authenticationType" value="InMemory"><br>
                        InMySQL <input type="radio" name="authenticationType" value="InMySQL">InSqLite <input type="radio" name="authenticationType" value="InSqLite"><br><br>
                        <input type="submit" value="Submit">
                        </form>
                    </td>
                </tr>
            </table>
        </body>
    </html>
HTMLBLOCK;
