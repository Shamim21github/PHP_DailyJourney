<?php
require 'vendor/autoload.php'; // Adjust this if you downloaded manually

use Dompdf\Dompdf;

// Initialize DOMPDF
$dompdf = new Dompdf();


// Define the HTML content for the PDF
$html = '
<div class="content">
        <h1>PHP Learning Topics</h1>

        <div class="section">
            <h2>🏗️ PHP Basics <span class="level">(Level: Newbie Chef 👨‍🍳)</span></h2>
            <ul>
                <li>PHP Syntax & Hello World</li>
                <li>Variables & Data Types</li>
                <li>Strings & String Functions</li>
                <li>Operators (Arithmetic, Logical, etc.)</li>
                <li>Conditional Statements (if, else, switch)</li>
                <li>Loops (for, while, do-while, foreach)</li>
                <li>Functions (Creating and Calling)</li>
                <li>Arrays (Indexed, Associative, Multidimensional)</li>
                <li>Superglobals ($_GET, $_POST, $_SESSION, $_COOKIE)</li>
                <li>Forms & Form Handling</li>
                <li>Include & Require</li>
                <li>Basic Error Handling</li>
            </ul>
        </div>

        <div class="section">
            <h2>🛠️ PHP Intermediate <span class="level">(Level: Junior Cook 👨‍🍳)</span></h2>
            <ul>
                <li>Working with Files (read, write, append)</li>
                <li>Sessions and Cookies (User Tracking)</li>
                <li>Object-Oriented PHP (Classes, Objects, Methods, Properties)</li>
                <li>Constructors & Destructors</li>
                <li>Inheritance & Polymorphism</li>
                <li>Form Validation & Security (Preventing SQL Injection, XSS)</li>
                <li>Working with Databases (MySQL + PHP)</li>
                <li>Prepared Statements</li>
                <li>Pagination</li>
                <li>Email Handling in PHP</li>
                <li>Working with APIs (cURL, file_get_contents)</li>
                <li>Uploading Files</li>
            </ul>
        </div>

        <div class="section">
            <h2>🔥 PHP Advanced <span class="level">(Level: Master Chef 👨‍🍳)</span></h2>
            <ul>
                <li>MVC Architecture</li>
                <li>PHP Namespaces</li>
                <li>Exception Handling</li>
                <li>Dependency Injection</li>
                <li>Composer (Package Management)</li>
                <li>RESTful API Development</li>
                <li>JWT Authentication</li>
                <li>Traits</li>
                <li>PHP Design Patterns</li>
                <li>Laravel (PHP Framework)</li>
                <li>Working with WebSockets</li>
                <li>Unit Testing (PHPUnit)</li>
            </ul>
        </div>
    </div>

    <style>

      body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            color: #2c3e50;
        }
        h1, h2 {
            color: #34495e;
        }
        ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        li {
            margin: 5px 0;
        }
        .section {
            margin-bottom: 20px;
        }
        .level {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
            color: #2980b9;
        }
    </style>
  
';

// Load HTML content
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("php_learning_roadmap.pdf", array("Attachment" => 1));
?>