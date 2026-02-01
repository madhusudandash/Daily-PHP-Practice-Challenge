<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Be My Valentine 💖</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8cdda;
            font-family: Arial, sans-serif;
        }

        .card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            width: 300px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h2 {
            margin-bottom: 20px;
        }

        .buttons {
            position: relative;
            height: 60px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #yes {
            background: #ff4d6d;
            color: white;
        }

        #no {
            background: #ddd;
            position: absolute;
            left: 0;
        }

        .note {
            margin-top: 10px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>💘 Will you be my Valentine?</h2>

        <div class="buttons">
            <button id="yes" onclick="sayYes()">Yes</button>
            <button id="no" onmouseover="moveNo()">No</button>
        </div>

        <div class="note">"No" seems a bit shy 😜</div>
    </div>

    <script>
        function moveNo() {
            const noBtn = document.getElementById("no");
            const x = Math.random() * 200;
            const y = Math.random() * 40;
            noBtn.style.left = x + "px";
            noBtn.style.top = y + "px";
        }

        function sayYes() {
            document.body.innerHTML = `
        <h1 style="color:#ff4d6d; font-family:Arial;">
          💖 Yay! Best Valentine Ever 💖
        </h1>`;
        }
    </script>

</body>

</html>