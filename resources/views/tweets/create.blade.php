<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px; 
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    label {
        font-weight: bold;
        margin: 20px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button[type="submit"] {
        background-color: #36b95d;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold; 
    }

    button[type="submit"]:hover {
        background-color: #18e254;
    }
</style>



<div>
    <h1>Mini Twitter</h1>
</div>

<div>
    <form action="process_tweet.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="tweet_content">Tweet Content:</label>
        <textarea id="tweet_content" name="tweet_content" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Create Tweet</button>
    </form>
</div>
