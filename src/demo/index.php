<?php $THEMES = include "../themes.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-48CYVH0XEF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-48CYVH0XEF');
    </script>
    <title>GitHub Readme Streak Stats Demo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <link href="https://css.gg/css?=|moon|sun" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/toggle-dark.css">
    <script type="text/javascript" src="./js/script.js" defer></script>
    <script type="text/javascript" src="./js/accordion.js" defer></script>
    <script type="text/javascript" src="./js/toggle-dark.js" defer></script>
    <script type="text/javascript" src="./js/jscolor.min.js" defer></script>
</head>

<body <?php echo $_COOKIE["darkmode"] == "on" ? 'data-theme="dark"' : ""; ?>>
    <h1>🔥 GitHub Readme Streak Stats</h1>

    <div class="github">
        <!-- GitHub Sponsors -->
        <iframe src="https://github.com/sponsors/DenverCoder1/button" title="Sponsor DenverCoder1"
            height="32" width="116" style="border: 0; margin-left: 12px;"></iframe>
        <!-- GitHub Logo -->
        <a href="https://git.io/streak-stats" title="GitHub" style="text-decoration: none;">
            <svg stroke="#0000" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="32px"
                width="32px" xmlns="http://www.w3.org/2000/svg">
                <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8 0-5.4.2-33 .2-55.3 0-15.6-5.2-25.5-11.3-30.7 37-4.1 76-9.2 76-73.1 0-18.2-6.5-27.3-17.1-39 1.7-4.3 7.4-22-1.7-45-13.9-4.3-45.7 17.9-45.7 17.9-13.2-3.7-27.5-5.6-41.6-5.6-14.1 0-28.4 1.9-41.6 5.6 0 0-31.8-22.2-45.7-17.9-9.1 22.9-3.5 40.6-1.7 45-10.6 11.7-15.6 20.8-15.6 39 0 63.6 37.3 69 74.3 73.1-4.8 4.3-9.1 11.7-10.6 22.3-9.5 4.3-33.8 11.7-48.3-13.9-9.1-15.8-25.5-17.1-25.5-17.1-16.2-.2-1.1 10.2-1.1 10.2 10.8 5 18.4 24.2 18.4 24.2 9.7 29.7 56.1 19.7 56.1 19.7 0 13.9.2 36.5.2 40.6 0 4.3-3 9.5-11.5 8-66-22.1-112.2-84.9-112.2-158.3 0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7-.2-1.5 1.1-2.8 3-3.2 1.9-.2 3.7.6 3.9 1.9.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4-2.2.2-3.7-.9-3.7-2.4 0-1.3 1.5-2.4 3.5-2.4 1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3-1.9-.4-3.2-1.9-2.8-3.2.4-1.3 2.4-1.9 4.1-1.5 2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6-1.5-1.3-1.9-3.2-.9-4.1.9-1.1 2.8-.9 4.3.6 1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3 1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6-1.1-1.3-1.3-2.8-.4-3.5.9-.9 2.4-.4 3.5.6 1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4-1.3-.6-1.9-1.7-1.5-2.6.4-.6 1.5-.9 2.8-.4 1.3.7 1.9 1.8 1.5 2.6z"></path>
            </svg></a>
        <!-- GitHub Star -->
        <iframe src="https://ghbtns.com/github-btn.html?user=DenverCoder1&repo=github-readme-streak-stats&type=star&count=true&size=large"
            width="140" height="30" title="GitHub stars" style="border: 0;"></iframe>
    </div>

    <div class="container">
        <div class="properties">
            <h2>Properties</h2>
            <form class="parameters">
                <label for="user">Username<span title="required">*</span></label>
                <input class="param" type="text" id="user" name="user" placeholder="DenverCoder1" required
                        pattern="^[A-Za-z\d-]{0,39}[A-Za-z\d]$" title="Up to 40 letters or hyphens but not ending with hyphen">

                <label for="theme">Theme</label>
                <select class="param" id="theme" name="theme" placeholder="default">
<?php foreach ($THEMES as $theme => $options): ?>
                    <option><?php echo $theme; ?></option>
<?php endforeach;?>
                </select>

                <label for="hide_border">Hide Border</label>
                <select class="param" id="hide_border" name="hide_border" placeholder="false">
                    <option>false</option>
                    <option>true</option>
                </select>

                <details class="advanced">
                    <summary>⚙ Advanced Options</summary>
                    <div class="content parameters">
                        <label for="theme">Add Property</label>
                        <select id="properties" name="properties" placeholder="background">
<?php foreach ($THEMES["default"] as $option => $color): ?>
                            <option><?php echo $option; ?></option>
<?php endforeach;?>
                        </select>
                        <button class="plus btn" onclick="return preview.addProperty();">+</button>
                    </div>
                </details>

                <input class="btn" type="submit" value="Submit">
            </form>
        </div>

        <div class="output">
            <h2>Preview</h2>
            <img alt="GitHub Readme Streak Stats" src="preview.php?user=" />
            <p class="warning">
                Note: The stats above are just examples and not from your GitHub profile.
            </p>

            <h2>Markdown</h2>
            <div class="md">
                <code></code>
            </div>

            <button class="copy-button btn tooltip" onclick="clipboard.copy(this);" onmouseout="tooltip.reset(this);" disabled>
                Copy To Clipboard
            </button>
        </div>
    </div>

    <a href="javascript:toggleTheme()" class="darkmode" title="toggle dark mode">
        <i class="<?php echo $_COOKIE["darkmode"] == "on" ? 'gg-sun' : "gg-moon"; ?>"></i>
    </a>
</body>

</html>