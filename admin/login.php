<div class="center">
    <form action="login.php" method="POST">
        <div class="input-container">
            <div class="row">
                <div class="col-9">
                    <input type="password" id="input" name="input" required>
                    <label for="input" class="label">Enter Password</label>
                </div>
                <div class="col-3">
                    <button type="submit">Login</button>
                </div>
                <div class="underline"></div>
            </div>
        </div>
    </form>
</div>
<?php
session_start();
if (isset($_POST)) {
    if ($_POST['input'] == "wecar") {
        $_SESSION['user'] = true;
        header("location: ./ ");
        exit;
    }
}
?>
<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 100vh;
    }

    .input-container {
        position: relative;
        margin: 50px auto;
        width: 200px;
    }

    .input-container input[type="password"] {
        font-size: 20px;
        width: 100%;
        border: none;
        border-bottom: 2px solid #ccc;
        padding: 5px 0;
        background-color: transparent;
        outline: none;
    }

    .input-container .label {
        position: absolute;
        top: 0;
        left: 0;
        color: #ccc;
        transition: all 0.3s ease;
        pointer-events: none;
    }

    .input-container input[type="password"]:focus~.label,
    .input-container input[type="password"]:valid~.label {
        top: -20px;
        font-size: 16px;
        color: #333;
    }

    .input-container .underline {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 2px;
        width: 100%;
        background-color: #333;
        transform: scaleX(0);
        transition: all 0.3s ease;
    }

    .input-container input[type="password"]:focus~.underline,
    .input-container input[type="password"]:valid~.underline {
        transform: scaleX(1);
    }


    button {
        appearance: none;
        background-color: transparent;
        border: 0.125em solid #1A1A1A;
        border-radius: 0.9375em;
        box-sizing: border-box;
        color: #3B3B3B;
        cursor: pointer;
        display: inline-block;
        font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 12px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        min-height: 1em;
        min-width: 0;
        outline: none;
        padding: 1em 2.3em;
        text-align: center;
        text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        will-change: transform;
    }

    button:disabled {
        pointer-events: none;
    }

    button:hover {
        color: #fff;
        background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
    }

    button:active {
        box-shadow: none;
        transform: translateY(0);
    }
</style>