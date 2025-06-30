<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>
  <style>
    /* CSS variables for consistent theming */
    :root {
      --bg-color: #ffffff;
      --text-color: #374151;
      --text-muted: #6b7280;
      --input-bg: #f9fafb;
      --input-border: #d1d5db;
      --primary-color: #111827;
      --button-bg: #111827;
      --button-hover-bg: #1f2937;
      --border-radius: 0.75rem;
      --shadow-light: 0 1px 3px rgba(0, 0, 0, 0.1);
      --shadow-hover: 0 4px 6px rgba(0, 0, 0, 0.15);
      --font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen,
        Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    /* Reset and base styles */
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background-color: var(--bg-color);
      color: var(--text-color);
      font-family: var(--font-family);
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 1.5rem;
    }

    .login-container {
      background: var(--bg-color);
      max-width: 400px;
      width: 100%;
      padding: 2.5rem 2rem;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow-light);
      transition: box-shadow 0.3s ease;
    }
    .login-container:hover {
      box-shadow: var(--shadow-hover);
    }

    h1 {
      margin: 0 0 1rem 0;
      font-weight: 700;
      font-size: 2.75rem;
      line-height: 1.1;
      color: var(--primary-color);
      user-select: none;
      text-align: center;
    }
    p.subtitle {
      margin: 0 0 2rem 0;
      color: var(--text-muted);
      font-size: 1rem;
      text-align: center;
      user-select: none;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    label {
      font-weight: 600;
      font-size: 0.875rem;
      color: var(--text-muted);
      margin-bottom: 0.25rem;
      user-select: none;
    }

    input[type="email"],
    input[type="password"] {
      padding: 0.75rem 1rem;
      font-size: 1rem;
      border: 1px solid var(--input-border);
      border-radius: var(--border-radius);
      background-color: var(--input-bg);
      color: var(--text-color);
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      outline-offset: 2px;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(17, 24, 39, 0.2);
      background-color: #fff;
    }
    input::placeholder {
      color: var(--text-muted);
      font-weight: 400;
    }

    button {
      padding: 0.85rem 1rem;
      font-size: 1.125rem;
      font-weight: 700;
      color: #fff;
      background-color: var(--button-bg);
      border: none;
      border-radius: var(--border-radius);
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
      user-select: none;
      box-shadow: 0 4px 6px rgba(17, 24, 39, 0.3);
    }
    button:hover,
    button:focus-visible {
      background-color: var(--button-hover-bg);
      transform: scale(1.03);
      outline: none;
    }

    /* Responsive adjustments */
    @media (max-width: 480px) {
      .login-container {
        padding: 2rem 1.5rem;
      }
      h1 {
        font-size: 2.25rem;
      }
      button {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <main role="main" class="login-container" aria-label="Login Form">
    <h1>Adrian Ramadhan</h1>
    <p class="subtitle">23050558</p>
    <form action="#" method="POST" novalidate>
      <label for="email">Email address</label>
      <input type="email" id="email" name="email" placeholder="you@example.com" required autocomplete="email" />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />

      <button type="submit">Log In</button>
    </form>
  </main>
</body>
</html>

