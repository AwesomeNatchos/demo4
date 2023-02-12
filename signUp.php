<html>
  <head>
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      form {
        display: flex;
        flex-direction: column;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
        background-color: #fff;
      }

      form h1 {
        text-align: center;
        margin-bottom: 1rem;
      }

      form input[type="text"],
      form input[type="email"],
      form input[type="password"] {
        margin-bottom: 1rem;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
        width: 100%;
      }

      form input[type="submit"] {
        padding: 0.5rem;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        background-color: #4285f4;
        color: #fff;
        cursor: pointer;
        transition: all 0.2s;
      }

      form input[type="submit"]:hover {
        background-color: #357ae8;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form>
        <h1>Sign Up</h1>
        <input type="text" placeholder="First Name" required>
        <input type="text" placeholder="Last Name" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <input type="submit" value="Sign Up">
      </form>
    </div>
  </body>
</html>
