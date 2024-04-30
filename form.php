<!-- <?php
// Include database credentials
$formUsername = isset($_POST['username'])?$_POST['username']: '';
$formPassword = isset($_POST['username'])?$_POST['username']: '';

$host = "localhost"; // Change this to your database server name
$dbUsername = "root"; // Change this to your database username
$dbPassword = ""; // Change this to your database password
$db_name = "accounts"; // Change this to your database name

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host; dbname=$db_name", $dbUsername, $dbPassword);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement to insert data into the database
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

    // Bind parameters
    $stmt->bindParam(':username', $formUsername);
    $stmt->bindParam(':password', $formPassword);

    // Execute the statement
    $stmt->execute();

    echo "Data inserted successfully";
} catch(PDOException $e) {
    // Display error message
    echo "Connection Failed: " . $e->getMessage();
   
}
$pdo = null;

?> -->


<!-- <?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO sample (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Registration successful. <a href='index.php'>Login</a>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?> -->




