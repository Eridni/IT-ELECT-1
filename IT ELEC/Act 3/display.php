<html>
    <style>
        body {
        font-family: Arial, sans-serif;
        background: black;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 50px;
        color: white;
        }
        h2 {
        text-align: center;
        margin-bottom: 20px;
        color: white;
        }
    .form-container {
    background: linear-gradient(to right, blue 50%, black 50%);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 81, 255, 0.5);
    width: 100vw;
    max-width: 100vw;
    color: white;
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: stretch;
    }
        input[type="log out"] {
        display: inline-block;
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
        }
        input[type="log out"]:hover {
        background-color: red;
        }
    </style>
    <body>
    <div class="form-container">
        <h2>Registered Students</h2>
    <div style="overflow-x:auto; width:100vw; max-width:100vw;">
        <form method="post" style="margin-bottom:10px;">
            <button type="submit" name="clear_all" style="background-color:red; color:white; padding:8px 16px; border:none; border-radius:4px; font-weight:bold; margin-bottom:10px;">Clear All Students</button>
        </form>
        <table style="width:100vw; max-width:100%; border-collapse:collapse; background:white; color:black; border-radius:8px; overflow:hidden;">
            <thead style="background:linear-gradient(to right, blue 50%, black 50%); color:white;">
                <tr>
                    <th style="padding:8px;">First Name</th>
                    <th style="padding:8px;">Last Name</th>
                    <th style="padding:8px;">ID #</th>
                    <th style="padding:8px;">Email</th>
                    <th style="padding:8px;">Password</th>
                    <th style="padding:8px;">Section</th>
                    <th style="padding:8px;">Course</th>
                    <th style="padding:8px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $filename = 'students.txt';
                // Handle delete and clear actions
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['delete']) && isset($_POST['index'])) {
                        $idx = (int)$_POST['index'];
                        if (file_exists($filename)) {
                            $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                            if (isset($lines[$idx])) {
                                unset($lines[$idx]);
                                file_put_contents($filename, implode("\n", $lines) . (count($lines) ? "\n" : ""));
                            }
                        }
                        echo '<script>window.location.reload();</script>';
                    }
                    if (isset($_POST['clear_all'])) {
                        file_put_contents($filename, '');
                        echo '<script>window.location.reload();</script>';
                    }
                }
                if (file_exists($filename)) {
                    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    foreach ($lines as $i => $line) {
                        $fields = explode('|', $line);
                        echo '<tr>';
                        foreach ($fields as $field) {
                            echo '<td style="padding:8px; border-bottom:1px solid #ccc;">' . htmlspecialchars($field) . '</td>';
                        }
                        echo '<td style="padding:8px; border-bottom:1px solid #ccc; text-align:center;">';
                        echo '<form method="post" style="display:inline;">';
                        echo '<input type="hidden" name="index" value="' . $i . '">';
                        echo '<button type="submit" name="delete" style="background-color:#e74c3c; color:white; border:none; border-radius:4px; padding:4px 10px; font-weight:bold; cursor:pointer;">Delete</button>';
                        echo '</form>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        </div>
        <form action="index.php" method="get" style="margin-top:20px;">
            <button type="submit" style="text-align:center; width:100%; padding:10px; background-color:blue; color:white; border:none; border-radius:4px; cursor:pointer; font-weight:bold;">Log out</button>
        </form>
    </div>
    
    </body>
</html>
